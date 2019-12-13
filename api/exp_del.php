<?php
include_once "../base.php";

$id=$_POST['id'];

echo del("exp",$id);

to("../admin.php?do=photo");

?>

