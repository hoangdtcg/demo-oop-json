<?php
function loadData(){
    $dataJson = file_get_contents("data-mini.json");
    $data = json_decode($dataJson);
    return $data;
}

function getStudentById($id){
    $students = loadData();
    return $students[$id];
}