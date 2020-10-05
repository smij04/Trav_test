<?php
require '../db.php';

session_start();

$Wood = 0;

$stmt = $db->prepare("SELECT Resources_wood FROM Village WHERE ID_Player_FK = ? LIMIT 1");
$stmt->execute(array($_SESSION['Player_id']));
$Wood = $stmt->fetch();

echo "<b>" . number_format($Wood['Resources_wood'],0) . "</b>";

?>