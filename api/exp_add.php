<?php
include_once "../base.php";

$data['com_name'] = $_POST['data']['0'];
$data['job_content'] = $_POST['data']['1'];
$data['job_name'] = $_POST['data']['2'];
$data['from_year'] = $_POST['data']['3'];
$data['from_mon'] = $_POST['data']['4'];
$data['to_year'] = $_POST['data']['5'];
$data['to_mon'] = $_POST['data']['6'];

echo save("exp", $data);

to("../admin.php?do=exp");
