<?php
include_once "function.php";
$students = loadData();
//echo "<pre>";
//print_r($students);
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
    <table border="1px" width="100%">
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $key=>$student): ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $student->name; ?></td>
                <td><?php echo $student->age; ?></td>
                <td><a href="detail.php?id=<?php echo $key; ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>