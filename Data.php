<?php

include_once "Student.php";
class Data
{
    private $path;
    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data); //JSON.stringify - Đưa mảng về dạng chuỗi để lưu lại
        file_put_contents($this->path,$dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return $this->convertToStudent($dataJson); //JSON.parse - Đưa chuỗi về mảng liên kết (object)
    }

    public function addNewStudent($student)
    {
        $data = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "math" => $student->getMath(),
            "physic" => $student->getPhysic(),
            "chemistry" => $student->getChemistry(),
        ];

        $students = $this->loadData();
//        $students[] = $student;
        array_push($students,$data);
        $this->saveData($students);
    }

    public function convertToStudent($arr)
    {
        $data = json_decode($arr);
        $students = [];
        foreach ($data as $item){
            $student = new Student($item->name,$item->age);
            $student->setScore($item->math,$item->physic,$item->chemistry);
            $students[] = $student;
        }
        return $students;
    }
}