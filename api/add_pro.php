<?php
include_once "../base.php";
if (!empty($_FILES) && $_FILES['file']['error'] == 0) {


    $type = $_FILES['file']['type'];
    $filename = $_FILES['file']['name'];
    $path = "./img/" . $filename;
    $text= $_POST['text'];
    $href= $_POST['href'];

    move_uploaded_file($_FILES['file']['tmp_name'], "../img/" . $filename);

    $sql = "insert into pro (`name`,`type`,`path`,`text`,`href`) values('$filename','$type','$path','$text','$href')";

    $pdo->exec($sql);
}

to("../admin.php?do=pro");

?>
