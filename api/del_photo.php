<?php
include_once "../base.php";

$id=$_POST['id'];

echo del("photo",$id);

to("../admin.php?do=photo");

?>
