<?php
include_once "../base.php";

$id=$_POST['id'];

echo del("pro",$id);

to("../admin.php?do=pro");

?>