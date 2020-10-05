<?php


function fillVillageFields($Player_Village, $db_array) {
    //Fill village object
    switch ($db_array['Village_type']) {
        case 1:
            $Player_Village->Village_type = $db_array['Village_type'];

            $Player_Village->Field_wood_1 = $db_array['Field_wood_1'];
            $Player_Village->Field_wood_2 = $db_array['Field_wood_2'];
            $Player_Village->Field_wood_3 = $db_array['Field_wood_3'];
            $Player_Village->Field_wood_4 = $db_array['Field_wood_4'];
            $Player_Village->Field_clay_1 = $db_array['Field_clay_1'];
            $Player_Village->Field_clay_2 = $db_array['Field_clay_2'];
            $Player_Village->Field_clay_3 = $db_array['Field_clay_3'];
            $Player_Village->Field_clay_4 = $db_array['Field_clay_4'];
            $Player_Village->Field_iron_1 = $db_array['Field_iron_1'];
            $Player_Village->Field_iron_2 = $db_array['Field_iron_2'];
            $Player_Village->Field_iron_3 = $db_array['Field_iron_3'];
            $Player_Village->Field_iron_4 = $db_array['Field_iron_4'];
            $Player_Village->Field_wheat_1 = $db_array['Field_wheat_1'];
            $Player_Village->Field_wheat_2 = $db_array['Field_wheat_2'];
            $Player_Village->Field_wheat_3 = $db_array['Field_wheat_3'];
            $Player_Village->Field_wheat_4 = $db_array['Field_wheat_4'];
            $Player_Village->Field_wheat_5 = $db_array['Field_wheat_5'];
            $Player_Village->Field_wheat_6 = $db_array['Field_wheat_6'];

            break;
        
        default:
            $Player_Village->Village_type = $db_array['Village_type'];

            $Player_Village->Field_wood_1 = $db_array['Field_wood_1'];
            $Player_Village->Field_wood_2 = $db_array['Field_wood_2'];
            $Player_Village->Field_wood_3 = $db_array['Field_wood_3'];
            $Player_Village->Field_wood_4 = $db_array['Field_wood_4'];
            $Player_Village->Field_clay_1 = $db_array['Field_clay_1'];
            $Player_Village->Field_clay_2 = $db_array['Field_clay_2'];
            $Player_Village->Field_clay_3 = $db_array['Field_clay_3'];
            $Player_Village->Field_clay_4 = $db_array['Field_clay_4'];
            $Player_Village->Field_iron_1 = $db_array['Field_iron_1'];
            $Player_Village->Field_iron_2 = $db_array['Field_iron_2'];
            $Player_Village->Field_iron_3 = $db_array['Field_iron_3'];
            $Player_Village->Field_iron_4 = $db_array['Field_iron_4'];
            $Player_Village->Field_wheat_1 = $db_array['Field_wheat_1'];
            $Player_Village->Field_wheat_2 = $db_array['Field_wheat_2'];
            $Player_Village->Field_wheat_3 = $db_array['Field_wheat_3'];
            $Player_Village->Field_wheat_4 = $db_array['Field_wheat_4'];
            $Player_Village->Field_wheat_5 = $db_array['Field_wheat_5'];
            $Player_Village->Field_wheat_6 = $db_array['Field_wheat_6'];

            break;
    }

}

function fillVillageBuildings($Player_Village, $db_array) {
    $Player_Village->Main_Building = $db_array['Main_Building'];
    $Player_Village->Werehouse = $db_array['Werehouse'];
    $Player_Village->Cranny = $db_array['Cranny'];
}

function updateCaps($Player_Village) {
    switch ($Player_Village->Werehous) {
        case 0:
            $Player_Village->ResourcesCap = 800;
            break;
        case 1:
            $Player_Village->ResourcesCap = 1200;
            break;
        case 2:
            $Player_Village->ResourcesCap = 1700;
            break;
        case 3:
            $Player_Village->ResourcesCap = 2300;
            break;
        case 4:
            $Player_Village->ResourcesCap = 3100;
            break; 
        case 5:
            $Player_Village->ResourcesCap = 4000;
            break;
        case 6:
            $Player_Village->ResourcesCap = 5000;
            break;
        case 7:
            $Player_Village->ResourcesCap = 6300;
            break;
        case 8:
            $Player_Village->ResourcesCap = 7800;
            break;
        case 9:
            $Player_Village->ResourcesCap = 9600;
            break;
        case 10:
            $Player_Village->ResourcesCap = 11800;
            break; 
        case 11:
            $Player_Village->ResourcesCap = 14400;
            break; 
        case 12:
            $Player_Village->ResourcesCap = 17600;
            break;
        case 13:
            $Player_Village->ResourcesCap = 21400;
            break;
        case 14:
            $Player_Village->ResourcesCap = 25900;
            break;
        case 15:
            $Player_Village->ResourcesCap = 31300;
            break;
        case 16:
            $Player_Village->ResourcesCap = 37900;
            break; 
        case 17:
            $Player_Village->ResourcesCap = 45700;
            break;  
        case 18:
            $Player_Village->ResourcesCap = 55100;
            break;
        case 19:
            $Player_Village->ResourcesCap = 66400;
            break; 
        case 20:
            $Player_Village->ResourcesCap = 80000;
            break;                    
        default:
            $Player_Village->ResourcesCap = 800;
            break;
    }

    switch ($Player_Village->Cranny) {
        case 0:
            $Player_Village->WheatCap = 800;
            break;
        case 1:
            $Player_Village->WheatCap = 1200;
            break;
        case 2:
            $Player_Village->WheatCap = 1700;
            break;
        case 3:
            $Player_Village->WheatCap = 2300;
            break;
        case 4:
            $Player_Village->WheatCap = 3100;
            break; 
        case 5:
            $Player_Village->WheatCap = 4000;
            break;
        case 6:
            $Player_Village->WheatCap = 5000;
            break;
        case 7:
            $Player_Village->WheatCap = 6300;
            break;
        case 8:
            $Player_Village->WheatCap = 7800;
            break;
        case 9:
            $Player_Village->WheatCap = 9600;
            break;
        case 10:
            $Player_Village->WheatCap = 11800;
            break; 
        case 11:
            $Player_Village->WheatCap = 14400;
            break; 
        case 12:
            $Player_Village->WheatCap = 17600;
            break;
        case 13:
            $Player_Village->WheatCap = 21400;
            break;
        case 14:
            $Player_Village->WheatCap = 25900;
            break;
        case 15:
            $Player_Village->WheatCap = 31300;
            break;
        case 16:
            $Player_Village->WheatCap = 37900;
            break; 
        case 17:
            $Player_Village->WheatCap = 45700;
            break;  
        case 18:
            $Player_Village->WheatCap = 55100;
            break;
        case 19:
            $Player_Village->WheatCap = 66400;
            break; 
        case 20:
            $Player_Village->WheatCap = 80000;
            break;                    
        default:
            $Player_Village->WheatCap = 800;
            break;
    }

}


function showVillage($Player_Village) {
    echo("type: " . $Player_Village->Village_type . '<br>');

    echo("Resources Cap: " . $Player_Village->ResourcesCap . '<br>');

    echo("Wheat Cap: " . $Player_Village->WheatCap . '<br>');

    echo("Wood 1: " . $Player_Village->Field_wood_1 . '<br>');
    echo("Wood 2: " . $Player_Village->Field_wood_2 . '<br>');
    echo("Wood 3: " . $Player_Village->Field_wood_3 . '<br>');
    echo("Wood 4: " . $Player_Village->Field_wood_4 . '<br>');
    echo("Wood 5: " . $Player_Village->Field_wood_5 . '<br>');
    echo('<br>');
    echo("Clay 1: " . $Player_Village->Field_clay_1 . '<br>');
    echo("Clay 2: " . $Player_Village->Field_clay_2 . '<br>');
    echo("Clay 3: " . $Player_Village->Field_clay_3 . '<br>');
    echo("Clay 4: " . $Player_Village->Field_clay_4 . '<br>');
    echo("Clay 5: " . $Player_Village->Field_clay_5 . '<br>');
    echo('<br>');
    echo("Iron 1: " . $Player_Village->Field_iron_1 . '<br>');
    echo("Iron 2: " . $Player_Village->Field_iron_2 . '<br>');
    echo("Iron 3: " . $Player_Village->Field_iron_3 . '<br>');
    echo("Iron 4: " . $Player_Village->Field_iron_4 . '<br>');
    echo("Iron 5: " . $Player_Village->Field_iron_5 . '<br>');
    echo('<br>');
    echo("Wheat 1: " . $Player_Village->Field_wheat_1 . '<br>');
    echo("Wheat 2: " . $Player_Village->Field_wheat_2 . '<br>');
    echo("Wheat 3: " . $Player_Village->Field_wheat_3 . '<br>');
    echo("Wheat 4: " . $Player_Village->Field_wheat_4 . '<br>');
    echo("Wheat 5: " . $Player_Village->Field_wheat_5 . '<br>');
    echo("Wheat 6: " . $Player_Village->Field_wheat_6 . '<br>');
    echo("Wheat 7: " . $Player_Village->Field_wheat_7 . '<br>');
    echo("Wheat 8: " . $Player_Village->Field_wheat_8 . '<br>');
    echo("Wheat 9: " . $Player_Village->Field_wheat_9 . '<br>');
    echo("Wheat 10: " . $Player_Village->Field_wheat_10 . '<br>');
    echo("Wheat 11: " . $Player_Village->Field_wheat_11 . '<br>');
    echo("Wheat 12: " . $Player_Village->Field_wheat_12 . '<br>');
    echo("Wheat 13: " . $Player_Village->Field_wheat_13 . '<br>');
    echo("Wheat 14: " . $Player_Village->Field_wheat_14 . '<br>');
    echo("Wheat 15: " . $Player_Village->Field_wheat_15 . '<br>');


}


?>