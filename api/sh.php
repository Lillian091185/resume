<?php

include_once "../base.php";

$data=$_POST['sh'];
$table='photo';
$all= all($table,1);

foreach($all as $a){
    if( $a['id']== $data){
        $sql="UPDATE `photo` SET `sh`='1' WHERE `id` =" . $a['id'];
        $pdo->exec($sql);

    }else{
        $sql="UPDATE `photo` SET `sh`='0' WHERE `id` =" . $a['id'];
        $pdo->exec($sql);
    }
}

to("../admin.php?do=photo");

?>