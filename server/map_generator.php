<?php

define("SQL_HOST", "localhost");
define("SQL_DBNAME","travian_test");
define("SQL_USERNAME", "root");
define("SQL_PASSWORD", "");


$db = new PDO('mysql:host='.SQL_HOST.';dbname='.SQL_DBNAME.';charset=utf8', SQL_USERNAME, SQL_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

date_default_timezone_get();

$date = date('Y/m/d H:i:s');

$map_size = 20;
$sql = "INSERT INTO Map (X,Y,Type,Bonus,Img) VALUES (?,?,?,?,?)";


For($x = -$map_size; $x < $map_size+1 ; $x++) {
    For($y = -$map_size; $y < $map_size+1 ; $y++) {
        $rand_field = rand(1,1000);
        $field_type = 0;
        $field_bonus = 0;
        $field_img = "assets/images/map_empty.png";
        switch(true){
            case $rand_field <= 330:
                $field_type = 1;
                break;
            case $rand_field <= 360:
                $field_type = 2;
                break;
            case $rand_field <= 390:
                $field_type = 3;
                break;
            case $rand_field <= 420:
                $field_type = 4;
                break;
            case $rand_field <= 450:
                $field_type = 5;
                break;
            case $rand_field <= 480:
                $field_type = 6;
                break;
            case $rand_field <= 510:
                $field_type = 7;
                break;
            case $rand_field <= 567:
                $field_type = 8;
                break;
            case $rand_field <= 624:
                $field_type = 9;
                break;
            case $rand_field <= 680:
                $field_type = 10;
                break;
            case $rand_field <= 700:
                $field_type = 13;
                $field_img = "assets/images/map_wood_1.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 719:
                $field_type = 15;
                $field_img = "assets/images/map_clay.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 739:
                $field_type = 17;
                $field_img = "assets/images/map_iron.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 758:
                $field_type = 19;
                $field_img = "assets/images/map_crop_1.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 770:
                $field_type = 21;
                $field_img = "assets/images/map_wood_1.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 782:
                $field_type = 22;
                $field_img = "assets/images/map_clay.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 794:
                $field_type = 23;
                $field_img = "assets/images/map_iron.png";
                $field_bonus = 25;
                break;
            case $rand_field <= 803:
                $field_type = 14;
                $field_img = "assets/images/map_wood_1.png";
                $field_bonus = 50;
                break;
            case $rand_field <= 812:
                $field_type = 16;
                $field_img = "assets/images/map_clay.png";
                $field_bonus = 50;
                break;
            case $rand_field <= 821:
                $field_type = 18;
                $field_img = "assets/images/map_iron.png";
                $field_bonus = 50;
                break;
            case $rand_field <= 830:
                $field_type = 20;
                $field_img = "assets/images/map_crop_1.png";
                $field_bonus = 50;
                break;
            case $rand_field <= 930:
                $field_type = 24;
                break;
            case $rand_field <= 975:
                $field_type = 11;
                break;
            case $rand_field <= 1000:
                $field_type = 12;
                break;
        }

        if ($field_type<=12) {
           $rand_none = rand(1,8);
            switch (true) {
                case $rand_none <= 4:
                    $field_img = "assets/images/map_empty.png";
                    break;
                case $rand_none <= 6:
                    $field_img = "assets/images/map_empty_2.png";
                    break;
                case $rand_none <= 8:
                    $field_img = "assets/images/map_empty_3.png";
                    break;
            } 
        }
        
        if ($field_type==24) {
            $rand_none = rand(1,15);
            switch (true) {
                case $rand_none <= 5:
                    $field_img = "assets/images/map_empty.png";
                    break;
                case $rand_none <= 8:
                    $field_img = "assets/images/map_empty_2.png";
                    break;
                case $rand_none <= 11:
                    $field_img = "assets/images/map_empty_3.png";
                    break;
                case $rand_none <= 12:
                    $field_img = "assets/images/map_wood_1.png";
                    break;
                case $rand_none <= 13:
                    $field_img = "assets/images/map_clay.png";
                    break;
                case $rand_none <= 14:
                    $field_img = "assets/images/map_iron.png";
                    break;
                case $rand_none <= 15:
                    $field_img = "assets/images/map_crop_1.png";
                    break;
             } 
         }

        $stmt = $db->prepare($sql);
        $stmt->execute(array($x,$y,$field_type,$field_bonus,$field_img));
        echo("inserted field on x: " . $x . " y: " . $y . "\n");
    }
}



echo("\nMap succesfully created!\n\n");







?>