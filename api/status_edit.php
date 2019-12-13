<?php
include_once "../base.php";

$data['id']=$_POST['id'];
$data['sen']=$_POST['sen'];
$data['job_type']=$_POST['job_type'];
$data['salary']=$_POST['salary'];
$data['job_offr']=$_POST['job_offr'];
$data['job_site']=$_POST['job_site'];
$data['lan']=$_POST['lan'];
$data['skill']=$_POST['skill'];
$table=$_POST['table'];

echo save($table, $data);
to("../admin.php?do=status");

?>