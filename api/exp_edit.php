<?php
include_once "../base.php";

$data['id']=$_POST['id'];
$data['com_name']=$_POST['com_name'];
$data['job_content']=$_POST['job_content'];
$data['job_name']=$_POST['job_name'];
$data['from_year']=$_POST['from_year'];
$data['from_mon']=$_POST['from_mon'];
$data['to_year']=$_POST['to_year'];
$data['to_mon']=$_POST['to_mon'];
$table=$_POST['table'];

echo save($table, $data);

to("../admin.php?do=exp");

?>