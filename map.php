<?php

# pripojeni do db
require 'scripts/db.php';



$stmt = $db->prepare("SELECT * FROM Village WHERE ID_Vil = 1");
$stmt->execute();
$Village = $stmt->fetch();


// $village_X = $Village['CordX'];
// $village_Y = $Village['CordY'];

$village_X = 0;
$village_Y = 0;

$village_X = $_GET['X'];
$village_Y = $_GET['Y'];


$SizeOfMap = 20;

$stmt = $db->prepare("SELECT X,Y,Type,Img FROM Map WHERE X > ? AND X < ? AND Y > ? AND Y < ?");
$stmt->execute(array($village_X-8,$village_X+8,$village_Y-8,$village_Y+8));
// $stmt->execute(array($village_X-$SizeOfMap/2,$village_X+$SizeOfMap/2,$village_Y-$SizeOfMap/2,$village_Y+$SizeOfMap/2));
$Map = $stmt->fetchAll();

// print_r($Map[0*11]['X']);
// print_r($Map[0*11]['Y']);
// echo('<br>');
// print_r($Map[1]['X']);
// print_r($Map[1]['Y']);
// echo('<br>');
// print_r($Map[1*11]['X']);
// echo('<br>');
// print_r($Map[2*11]['X']);
// echo('<br>');
// print_r($Map[3*11]['X']);
// echo('<br>');
// print_r($Map[4*11]['X']);
// echo('<br>');


// echo($Map[1]['X']);
// echo($Map[1]['Y'] . "\n\n");

// $key = array_search(0, array_column($Map, 'X') && array_column($Map, 'Y'));

// echo($key . "\n");
// print_r($Map[$key]);


//. $Map[$x*11+$y]['X'] . '|' . $Map[$x*11+$y]['Y'] . '<img src="' . $Map[$x*11+$y]['Img'] . '" width="50" height="50" >



?>


<html>
	<head>
		<title>Travian Map</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles_map.css" />


	</head>

	<body>
        <div>
            
        </div>
        <div class='map'>
        
            <table>

            <?php
                for($y = 0 ; $y < 15 ; $y++) {
                    echo('<tr>');
                    for ($x = 0 ; $x < 15 ; $x++){
                        $type = 0;
                        $img_bonus = "";
                        switch ($Map[$x*15+$y]['Type']){
                            case 1:
                                $type = "4-4-4-6";
                                break;
                            case 2:
                                $type = "5-3-4-6";
                                break;
                            case 3:
                                $type = "5-4-3-6";
                                break;
                            case 4:
                                $type = "3-5-4-6";
                                break;
                            case 5:
                                $type = "4-5-3-6";
                                break;
                            case 6:
                                $type = "5-3-4-6";
                                break;
                            case 7:
                                $type = "4-3-5-6";
                                break;
                            case 8:
                                $type = "3-4-4-7";
                                break;
                            case 9:
                                $type = "4-3-4-7";
                                break;
                            case 10:
                                $type = "4-4-3-7";
                                break;
                            case 11:
                                $type = "3-3-3-9";
                                break;
                            case 12:
                                $type = "1-1-1-15";
                                break;
                            case 13:
                                $type = "w: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 14:
                                $type = "w: 50%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 15:
                                $type = "c: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 16:
                                $type = "c: 50%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 17:
                                $type = "i: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 18:
                                $type = "i: 50%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 19:
                                $type = "wh: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 20:
                                $type = "wh: 50%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 21:
                                $type = "wh: 25% w: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 22:
                                $type = "wh: 25% c: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 23:
                                $type = "wh: 25% i: 25%";
                                $img_bonus = "assets/images/map_bonus.png";
                                break;
                            case 24:
                                $type = "";
                                break;
                        }
                        Echo('
                            <td>

                            
                            <img src="' . $Map[$x*15+$y]['Img'] . '" width="50" height="50" >

                        ');
                        if ($img_bonus != "") {

                            echo('
                                <img src="' . $img_bonus . '" class="img-bonus">
                            ');
                        };
                            
                        echo('
                            <span class="span_class">' 
                            . $type . 
                            '</span>
                            </td>
                            
                        ');
                    }
                    echo('</tr>'); 
                }


            ?>

            </table>
        </div>


	</body>
</html>




