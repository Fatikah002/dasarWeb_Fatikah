<?php

$serverName = "LAPTOP-JLU5UBSG\SQLEXPRESS";
$connectionInfo = [
    "Database" => "crud_sepatu"
];

$koneksi = sqlsrv_connect($serverName, $connectionInfo) or die(print_r(sqlsrv_errors(), true));