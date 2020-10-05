<?php
require '../db.php';

session_start();

$Wood = 0;

$stmt = $db->prepare("SELECT Resources_wheat FROM Village WHERE ID_Player_FK = ? LIMIT 1");
$stmt->execute(array($_SESSION['Player_id']));
$Wood = $stmt->fetch();

echo "<b>" .number_format($Wood['Resources_wheat'],0) . "</b>";

?>