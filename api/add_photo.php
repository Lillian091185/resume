<?php
include_once "../base.php";
$table = 'photo';
if (!empty($_FILES) && $_FILES['file']['error'] == 0) {


    $type = $_FILES['file']['type'];
    $filename = $_FILES['file']['name'];
    $path = "./img/" . $filename;

    move_uploaded_file($_FILES['file']['tmp_name'], "../img/" . $filename);

    $sql = "insert into photo (`name`,`type`,`path`) values('$filename','$type','$path')";

    $pdo->exec($sql);
}

to("../admin.php?do=photo");

?>
