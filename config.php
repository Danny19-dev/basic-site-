<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "trybrid_games_db";

if(!$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("Failed to conncect to Database");
}