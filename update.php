<?php
include_once "Student.php";
include_once "Data.php";
$data = new Data();
if(isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $student = $data->getStudentById($id);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $student->getName()?>">
    <input type="text" name="age" value="<?php echo $student->getAge()?>">
    <input type="number" name="math" value="<?php echo $student->getMath()?>">
    <input type="number" name="physic" value="<?php echo $student->getPhysic()?>">
    <input type="number" name="chemistry" value="<?php echo $student->getChemistry()?>">
    <button>Update</button>
</form>
</body>
</html>
<?php
include_once "Student.php";
include_once "Data.php";
$data = new Data();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new Student($_REQUEST["name"], $_REQUEST["age"]);
    $student->setScore($_REQUEST["math"],$_REQUEST["physic"],$_REQUEST["chemistry"]);
    $data->updateStudent($id,$student);
    header("Location:index.php");
}
