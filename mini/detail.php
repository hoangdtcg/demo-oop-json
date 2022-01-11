<?php
include_once "function.php";
if(isset($_REQUEST["id"])){
    $student = getStudentById($_REQUEST["id"]);
    echo "<pre>";
    print_r($student);
}
