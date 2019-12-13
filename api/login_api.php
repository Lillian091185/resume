<?php

include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select id from `admin` where `acc`='$acc' &&  `pw`='$pw'";

$data=$pdo->query($sql)->fetch();

if(!empty($data)){
  to("../admin.php");
}else{
  to("../front/login.php");
} 

?>