<?php
include_once "../base.php";
$table=$_POST['table'];
$id=$_POST['id'];
$data=find($table,$id);
if(!empty($_FILES['img']['tmp_name'])){
    $data['photo']="./img/".$_FILES['img']['name'];
    
    move_uploaded_file($_FILES['img']['tmp_name'],".".$data['photo']);
    save($table,$data);

}
to("../admin.php?do=$table");