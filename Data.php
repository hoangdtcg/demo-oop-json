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
        //lay ra du lieu cu
        $students = $this->loadData();
//        $students[] = $student;
        array_push($students,$data); // thay doi (them phan tu)

        $this->saveData($students); //Luu du lieu moi vao json
    }

    public function deleteStudent($id)
    {
        $students = $this->loadData();
        array_splice($students,$id,1);
        $this->saveData($students);
    }

    public function getStudentById($id)
    {
        $students = $this->loadData();
        $s = $students[$id];
        $student = new Student($s->name,$s->age);
        $student->setScore($s->math,$s->physic,$s->chemistry);
        return $student;

    }

    public function updateStudent($id, $student)
    {
        $data = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "math" => $student->getMath(),
            "physic" => $student->getPhysic(),
            "chemistry" => $student->getChemistry(),
        ];
        $students = $this->loadData();
        $students[$id] = $data;
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