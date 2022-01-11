<?php
include_once "Student.php";
include_once "Data.php";
if(isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $data = new Data();
    $data->deleteStudent($id);
    header("Location:index.php");
}