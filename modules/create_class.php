<?php

include_once './database_config/meta_config.php';

if($_REQUEST_METHOD === 'POST'){

    $className = $_POST['className'];
    $adminName = $_POST['adminName'];
    $adminUserName = $_POST['adminUserName'];
    $adminPassword = $_POST['adminPassword'];
    $adminName = $_POST['adminName'];
    $staffsLength = $_POST['staffsLength'];
    $studentsLength = $_POST['studentsLength'];

    $sql = "INSERT INTO $database_meta_class (class_name, admin_name, admin_username, admin_password, staffs_length, students_length) VALUES ('$className', '$adminName', '$adminUserName', '$adminPassword', '$staffsLength', '$studentsLength')";
    
    if ($connection->query($sql) === TRUE) {
        echo(json_encode(array("status" => "success", "message" => "Class created successfully")));
    } else {
        echo(json_encode(array("status" => "error", "message" => "Error creating class: " . $connection->error)));
    }
}