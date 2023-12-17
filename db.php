<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "conf_bsas_db";

$db = mysqli_connect($serverName,$username,$password,$dbName);


if ($db->connect_errno) {
    echo "WE ARE HAVING TROUBLES";
    // die( "WE ARE HAVING TROUBLES");
}