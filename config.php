<?php

//variable to control localhost or Network setup
// 0 -> LOCALHOST | 1 -> NETWORK
$conn_type = 0;

// USERNAME | PASSWORD | HOSTNAME | DB NAME
$dbusername = "id8415895_admin";
$dbpassword = "admin";
$dbhost = "localhost";
$dbname = "id8415895_notesdb";

if ($conn_type == 0) {
    $dbusername = "root";
    $dbpassword = "";
    $dbhost = "localhost";
    $dbname = "notes_db";
}

// CONNECT
$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}