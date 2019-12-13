<?php
include_once "../base.php";

$data['id']=$_POST['id'];
$data['username']=$_POST['username'];
$data['tel']=$_POST['tel'];
$data['email']=$_POST['email'];
$data['addr']=$_POST['addr'];
$data['school']=$_POST['school'];
$table=$_POST['table'];

echo save($table, $data);
to("../admin.php?do=self");

?>