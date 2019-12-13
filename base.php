<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,"root","");

function find($table,...$arg){
    global $pdo;  
    $sql="select * from $table where ";

    if(is_array($arg[0])){
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql.implode(" && ",$tmp);
    }else{
        $sql=$sql."`id`='".$arg[0]."'";
    }
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function all($table,...$arg){
    global $pdo;
    $sql="select * from $table";
    if(is_array($arg[0])){
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql."where".implode(" && ",$tmp);
    }
    return $pdo->query($sql)->fetchAll();
}

function save($table,$data){
    global $pdo;
    if(!empty($data['id'])){
        foreach($data as $key => $value){
            if($key!='id'){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }
           $sql="update $table set " . implode("," , $tmp) . " where `id`='".$data['id']."'";
    }else{
        $sql="insert into $table (`".implode("`,`",array_keys($data))."`)value('".implode("','",$data)."')";

    }
    echo $sql;
    return $pdo->exec($sql);
}

function del($table,...$arg){
    global $pdo;
    $sql="delete from $table where ";

    if(is_array($arg[0])){
        foreach($arg as $key => $value){
           $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql.implode(" && ",$tmp);
    }else{
        $sql=$sql."`id`='".$arg[0]."'";
    }
    return $pdo->exec($sql);
}

function nums($table,...$arg){
    global $pdo;
    $sql="select count(*) from $table";
  
    if(!empty($arg[0])){
       foreach($arg[0] as $key => $value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql."where".implode(" && ",$tmp);
      }    
    return $pdo->query($sql)->fetchColumn();  
  }

function to($path){
  
    header("location:".$path);
  
  }
?>