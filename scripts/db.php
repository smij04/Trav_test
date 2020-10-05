<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 25.02.2020
 * Time: 17:03
 */

if ($_SERVER["SERVER_NAME"] == "localhost") {
    define("SQL_HOST", "localhost");
    define("SQL_DBNAME","travian_test");
    define("SQL_USERNAME", "root");
    define("SQL_PASSWORD", "");
} else {
    // CONFIG WEBZDARMA
//---------------------------------------------------
    define(ROOT, '');
    define("SQL_HOST", "localhost");
    define("SQL_DBNAME", "c0videosupp");
    define("SQL_USERNAME", "vsroot");
    define("SQL_PASSWORD", "j0oLckdrkxPqN2fz");
}


$db = new PDO('mysql:host='.SQL_HOST.';dbname='.SQL_DBNAME.';charset=utf8', SQL_USERNAME, SQL_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

?>