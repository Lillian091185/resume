<?php
include_once "../base.php";

$data['id']=$_POST['id'];
$data['self_text']=$_POST['self_text'];
$table=$_POST['table'];

echo save($table, $data);
to("../admin.php?do=self_text");

?>