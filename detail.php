<?php
include_once "Student.php";
include_once "Data.php";
$data = new Data();
if(isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $student = $data->getStudentById($id);
}
//echo "<pre>";
//print_r($student);
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
    <h1><?php echo $student->getName(); ?></h1>
    <h3><?php echo $student->getAge(); ?></h3>
    <p>Math: <?php echo $student->getMath(); ?></p>
    <p>Physic: <?php echo $student->getPhysic(); ?></p>
    <p>Chemistry: <?php echo $student->getChemistry(); ?></p>
</body>
</html>
