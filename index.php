<?php

# pripojeni do db
require 'scripts/db.php';

#import trid
require 'classes/Village_class.php';

#import funkci
// require 'scripts/functions.php';

date_default_timezone_get();
session_start();


# promenne
$_SESSION['Player_id'] = 1;
$Player_ID = 1;
$Player_Vil = new Player_Village();
$date = date('Y/m/d H:i:s');
// echo $Player_Vil->Village_type;


$stmt = $db->prepare("SELECT * FROM Player WHERE ID_Player = ? LIMIT 1");
$stmt->execute(array($_SESSION['Player_id']));
$Player = $stmt->fetch();

$stmt = $db->prepare("SELECT * FROM Fields");
$stmt->execute();
$Fields = $stmt->fetchColumn();

// print_r($Fields);
// print_r($Fields[0]['ID_Field']);

$stmt = $db->prepare("SELECT * FROM Village WHERE ID_Player_FK = ? LIMIT 1");
$stmt->execute(array($_SESSION['Player_id']));
$Village = $stmt->fetch();

$Field_1 = $Village['Field_1'];
$Field_2 = $Village['Field_2'];
$Field_3 = $Village['Field_3'];
$Field_4 = $Village['Field_4'];
$Field_5 = $Village['Field_5'];
$Field_6 = $Village['Field_6'];
$Field_7 = $Village['Field_7'];
$Field_8 = $Village['Field_8'];
$Field_9 = $Village['Field_9'];
$Field_10 = $Village['Field_10'];
$Field_11 = $Village['Field_11'];
$Field_12 = $Village['Field_12'];
$Field_13 = $Village['Field_13'];
$Field_14 = $Village['Field_14'];
$Field_15 = $Village['Field_15'];
$Field_16 = $Village['Field_16'];
$Field_17 = $Village['Field_17'];
$Field_18 = $Village['Field_18'];

// echo($Fields[0]['ID_Field']);
// $key = array_search($Field_15, array_column($Fields, 'ID_Field'));
// echo($key);


//Fill village object
// fillVillageFields($Player_Vil, $Village);
// fillVillageBuildings($Player_Vil, $Village);
// updateCaps($Player_Vil);

// showVillage($Player_Vil);


?>




<html>
	<head>
		<title>Travian Test</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles_index.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script>

			$(document).ready(function()
			{
				setInterval(function(){
					$("#timeRefresh").load("scripts/refreshes/refreshTime.php");
					refresh();
				}, 1000);
			});

			$(document).ready(function()
			{
				setInterval(function(){
					$("#woodRefresh").load("scripts/refreshes/refreshWood.php");
					refresh();
				}, 1000);
			});

			$(document).ready(function()
			{
				setInterval(function(){
					$("#clayRefresh").load("scripts/refreshes/refreshClay.php");
					refresh();
				}, 1000);
			});

			$(document).ready(function()
			{
				setInterval(function(){
					$("#ironRefresh").load("scripts/refreshes/refreshIron.php");
					refresh();
				}, 1000);
			});

			$(document).ready(function()
			{
				setInterval(function(){
					$("#wheatRefresh").load("scripts/refreshes/refreshWheat.php");
					refresh();
				}, 1000);
			});


		</script>

	</head>

	<body>
		<div id="timeRefresh">
			<?= $date?>
		</div>
		<div class="menu_block">
			<div class="menu">
				<a href="index.php"  >
					<img alt="fields" class="img_fields">
				</a>
				<a href="village.php"  >
					<img alt="map" class="img_village">
				</a>
				<a href="map.php?X=<?= $Village['CordX'] . "&Y=" . $Village['CordY']?>"  >
					<img alt="map" class="img_map">
				</a>
				<a href="scoreboard.php"  >
					<img alt="scoreboard" class="img_scoreboard">
				</a>
				
			</div>
		</div>
		<br><br>
		<div class="res_block">
			<div class="Resources">
				<div class="wood">
					<img src="assets/resource_icons/icon_wood.png" alt="wood" width="30">
					<br>
					<div id="woodRefresh" class="res_pad"> <b><?= number_format($Village['Resources_wood'],0) ?></b> </div> 
					<?= "out of: " . $Village['Resources_cap'] ?>
				</div>
				<div class="clay">
					<img src="assets/resource_icons/icon_clay.png" alt="wood" width="30">
					<br>
					<div id="clayRefresh" class="res_pad"> <b><?= number_format($Village['Resources_clay'],0) ?> </b> </div>
					<?= "out of: " . $Village['Resources_cap']?>
				</div>
				<div class="iron">
					<img src="assets/resource_icons/icon_iron.png" alt="wood" width="30">
					<br>
					<div id="ironRefresh" class="res_pad"> <b><?= number_format($Village['Resources_iron'],0) ?> </b></div>
					<?= "out of: " . $Village['Resources_cap']?>
				</div>
				<div class="wheat">
					<img src="assets/resource_icons/icon_wheat.png" alt="wood" width="30">
					<br>
					<div id="wheatRefresh" class="res_pad"> <b><?= number_format($Village['Resources_wheat'],0) ?> </b></div>
					<?= "out of: " . $Village['Wheat_cap']?>
				</div>
			</div>
		</div>

		<br>

		<div class="wrapper">

			<div class="fields_wrapper">
				<div class="fields_map">
					<img src="assets/fields/field_4446.png" >
				</div>
				

			</div>

			<div class="production_wrapper">
				<div class=production>
					<h2>
						Production:
					</h2>
					<div class=prod_wood>
						<p>
							<img src="assets/resource_icons/icon_wood.png" alt="wood" width="30">
							wood: <b><?= $Village['Prod_wood'] ?></b>
						</p>
					</div>
					<div class=prod_clay>
						<p>
							<img src="assets/resource_icons/icon_clay.png" alt="clay" width="30">
							clay: <b><?= $Village['Prod_clay'] ?></b>
						</p>
					</div>
					<div class=prod_iron>
						<p>
							<img src="assets/resource_icons/icon_iron.png" alt="iron" width="30">
							iron: <b><?= $Village['Prod_iron'] ?></b>
						</p>
					</div>
					<div class=prod_wheat>
						<p>
							<img src="assets/resource_icons/icon_wheat.png" alt="wheat" width="30">
							wheat: <b><?= $Village['Prod_wheat'] ?></b>
						</p>
					</div>
				</div>
			</div>

		</div>
		
	</body>
</html>