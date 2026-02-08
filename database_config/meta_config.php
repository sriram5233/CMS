<?php

// Database Host Here
$host = "localhost";
// Database Name Here
$username = "__cms_database";
// Database Password Here
$password = "CMSdata@123";
// Meta Database Name Here
$database_meta = "__cms_meta";
// Database Meta Class Name Here
$database_meta_class = "__class_list";

$connection = new mysqli($host, $username, $password, $database_meta);

if ($connection->connect_error) {
    echo(json_encode(array("status" => "error", "message" => "Database connection failed: " . $connection->connect_error)));
    die();
}

