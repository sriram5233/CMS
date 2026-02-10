<?php

include_once './../database_config/meta_config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Get all class ids to check for duplicates
    $classIds = array();
    $result = $connection->query("SELECT class_id FROM $database_meta_class");
    while($row = $result->fetch_assoc()){
        array_push($classIds, $row['class_id']);;
    }

    $classId = "";

    // Generate a unique class id
    if(count($classIds) < 1){
        $classId = generateClassId();
    }
    else{
        while(in_array($classId, $classIds)){
            $classId = generateClassId();
        }
    }
    
    // Get class details from POST request
    $className = $_POST['className'];
    $adminName = $_POST['adminName'];
    $adminUserName = $_POST['adminUserName'];
    $adminPassword = $_POST['adminPassword'];
    $hashedAdminPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
    $adminName = $_POST['adminName'];
    $staffsLength = $_POST['staffsLength'];
    $studentsLength = $_POST['studentsLength'];

    //Validation of details

    if(validateClassData($_POST) !== true){
        echo(json_encode(validateClassData($_POST)));
        die();
    }

    else{

        // Insert class details into database
        $sql = "INSERT INTO $database_meta_class (class_id, class_name, admin_name, admin_username, admin_password, no_staffs, no_students) 
                VALUES ('$classId', '$className', '$adminName', '$adminUserName', '$hashedAdminPassword', '$staffsLength', '$studentsLength')";

        if ($connection->query($sql) === TRUE) {
            echo(json_encode(array("status" => "success", "message" => "Class created successfully", "classId" => $classId, "className" => $className, "adminName" => $adminName)));
            die();
        } 
        else {
            echo(json_encode(array("status" => "error", "message" => "Error creating class: " . $connection->error)));
            die();
        }
    }
}

function generateClassId() {
    $year  = date("y");           // 26
    $month = strtoupper(date("M")); // JAN
    $day   = date("d");           // 05

    $chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
    $random = substr(str_shuffle($chars), 0, 4);

    return "CLS{$year}{$month}{$day}{$random}";
}

function validateClassData($classData) {

    $classNamePattern = '/^[a-zA-Z ]{3,20}$/';
    $adminNamePattern = '/^[a-zA-Z ]{3,20}$/';
    $adminUsernamePattern = '/^[a-zA-Z0-9_]{3,20}$/';
    $adminPasswordPattern = '/^[a-zA-Z0-9!@#$%^&*()_+]{6,20}$/';
    $staffsLengthPattern = '/^[0-9]{1,20}$/';
    $studentsLengthPattern = '/^[0-9]{1,200}$/';

    if($classData['className'] == "" && 
        $classData['adminName'] == "" &&
        $classData['adminUserName'] == "" && 
        $classData['adminPassword'] == "" &&
        $classData['adminConfirmPassword'] == "" &&
        $classData['staffsLength'] == "" && 
        $classData['studentsLength'] == "") 
    {
        return array("status" => "alert", "message" => "Please fill all the fields correctly");
    }

    else if(!preg_match($classNamePattern, $classData['className'])){
        return array("status" => "alert", "message" => "Class Name should be 3-20 characters long and should only contain letters and spaces");
    }
    else if(!preg_match($staffsLengthPattern, $classData['staffsLength'])){
        return array("status" => "alert", "message" => "Staffs Length should be a number between 1 and 20");
    }
    else if(!preg_match($studentsLengthPattern, $classData['studentsLength'])){
        return array("status" => "alert", "message" => "Students Length should be a number between 1 and 200");
    }
    else if(!preg_match($adminNamePattern, $classData['adminName'])){
        return array("status" => "alert", "message" => "Admin Name should be 3-20 characters long and should only contain letters");
    }
    else if(!preg_match($adminUsernamePattern, $classData['adminUserName'])){
        return array("status" => "alert", "message" => "Admin Username should be 3-20 characters long and should only contain letters, numbers and underscores");
    }
    else if(!preg_match($adminPasswordPattern, $classData['adminPassword'])){
        return array("status" => "alert", "message" => "Admin Password should be 6-20 characters long and should only contain letters, numbers and special characters");
    }
    else if($classData['adminPassword'] != $classData['adminConfirmPassword']){
        return array("status" => "alert", "message" => "Passwords do not match");
    }
    else{
        return true;
    }
}