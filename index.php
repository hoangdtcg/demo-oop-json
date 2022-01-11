<?php
include_once "Student.php";
include_once "Data.php";

$data = new Data();

$students = $data->loadData();
//$data->saveData($student);
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
<a href="create.php">Add New Student</a>
    <table border="1px">
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Total Point</th>
            <th>Avg Point</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $key=>$student): ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $student->getName();?></td>
            <td><?php echo $student->getAge();?></td>
            <td><?php echo $student->getSumScore() ?></td>
            <td><?php echo $student->getAvgScore() ?></td>
            <td><a href="detail.php?id=<?php echo $key?>">Detail</a></td>
            <td><a href="update.php?id=<?php echo $key?>">Update</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $key?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
