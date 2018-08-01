<?php
//Database connection
ob_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "sebastiancorfitzen_dk_db";

$con = new mysqli($host, $user, $password, $database);
$con -> set_charset("utf8");
if ($con -> connect_errno) {
    die('Can not connect to database: (' . $con -> connect_errno . ')' . $con -> connect_error);
}
?>