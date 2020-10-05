<?php

define("SQL_HOST", "localhost");
define("SQL_DBNAME","travian_test");
define("SQL_USERNAME", "root");
define("SQL_PASSWORD", "");


$db = new PDO('mysql:host='.SQL_HOST.';dbname='.SQL_DBNAME.';charset=utf8', SQL_USERNAME, SQL_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

date_default_timezone_get();

$date = date('Y/m/d H:i:s');

// $stmt = $db->prepare("UPDATE Village SET Resources_Wood = ? WHERE ID_Vil = ?");
// $stmt->execute(array(400,1));

// $stmt = $db->prepare("SELECT * FROM Village WHERE ID_Vil = 1");
// $stmt->execute();
// $Village = $stmt->fetch();

// $Production_wood_per_second = $Village['Prod_wood'] / 3600; 
// round($Production_wood_per_second,4);
// echo (round($Production_wood_per_second,4));

//update production of the village

$stmt = $db->prepare("SELECT * FROM Village WHERE ID_Vil = 1");
$stmt->execute();
$Village = $stmt->fetch();
$Prod_wood = 0;
$Prod_clay = 0;
$Prod_iron = 0;
$Prod_wheat = 0;


for( $i = 1 ; $i < 19 ; $i++ ) {

    $tmp = $db->prepare("SELECT * FROM Fields WHERE ID_Field = ?");
    $tmp->execute(array($Village['Field_' . $i]));
    $Fields = $tmp->fetch();

    switch($Fields['Field_type']) {
        case 1:
            $Prod_wood += $Fields['Production'];
            break;
        case 2:
            $Prod_clay += $Fields['Production'];
            break;
        case 3:
            $Prod_iron += $Fields['Production'];
            break;
        case 4:
            $Prod_wheat += $Fields['Production'];
            break;
        default:
            $Prod_wood += $Fields['Production'];
    }

}

$upd = $db->prepare("UPDATE Village SET 
        Prod_wood = ?, 
        Prod_clay = ?,
        Prod_iron = ?,
        Prod_wheat = ? WHERE ID_Vil = ?");
$upd->execute(array($Prod_wood, $Prod_clay, $Prod_iron, $Prod_wheat, 1));


while(true) {
    //set variables
    $Player_ID = 1;

    //get the village
    $stmt = $db->prepare("SELECT * FROM Village WHERE ID_Vil = ?");
    $stmt->execute(array($Player_ID));
    $Village = $stmt->fetch();

    // echo("reources wood: " . $Village['Resources_wood'] . "\n");

    //get production per second
    $Production_wood_per_second = $Village['Prod_wood'] / 3600;
    $Production_clay_per_second = $Village['Prod_clay'] / 3600;
    $Production_iron_per_second = $Village['Prod_iron'] / 3600;
    $Production_wheat_per_second = $Village['Prod_wheat'] / 3600;

    //set new resources
    $new_wood = $Village['Resources_wood'] + round($Production_wood_per_second,3);
    $new_clay = $Village['Resources_clay'] + round($Production_clay_per_second,3);
    $new_iron = $Village['Resources_iron'] + round($Production_iron_per_second,3);
    $new_wheat = $Village['Resources_wheat'] + round($Production_wheat_per_second,3);

    //check for res cap
    $new_wood >= $Village['Resources_cap'] ? $new_wood=$Village['Resources_cap'] : '';
    $new_clay >= $Village['Resources_cap'] ? $new_clay=$Village['Resources_cap'] : '';
    $new_iron >= $Village['Resources_cap'] ? $new_iron=$Village['Resources_cap'] : '';
    $new_wheat >= $Village['Wheat_cap'] ? $new_wheat=$Village['Resources_cap'] : '';

    echo("new wood: " . $new_wood . "\n");
    echo("new clay: " . $new_clay . "\n");
    echo("new iron: " . $new_iron . "\n");
    echo("new wheat: " . $new_wheat . "\n\n");

    //update resources
    $upd = $db->prepare("UPDATE Village SET 
        Resources_wood = ?, 
        Resources_clay = ?,
        Resources_iron = ?,
        Resources_wheat = ? WHERE ID_Vil = ?");
    
    $upd->execute(array($new_wood, $new_clay, $new_iron, $new_wheat, 1));





    sleep(1);
}




?>
