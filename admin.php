<?php

include_once "base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>個人履歷-後台管理</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
<?php
        
        $sh= all("photo",1);
        foreach($sh as $value){
            if( $value['sh'] == 1){
                $img = $value['path'];
            }
        }
    ?>
    <button onclick="location.replace('index.php')" class="btn">Logout</button>
    <div class="all">
        <div class="title" onclick="location.replace('index.php')">
            <span class="ti">後台管理區</span>
        </div>
        <div class="left">
            <br>
            <div class="img">
                <img src="<?= $img?>" alt="" style="width:140px;height:140px;position:relative;left:20px">
            </div>
            <div class="item1" id="photo">
                <a href="?do=photo">頭貼管理</a>
            </div>
            <div class="item1" id="self">
                <a href="?do=self">個人檔案</a>
            </div>
            <div class="item1" id="self_text">
                <a href="?do=self_text">自傳</a>
            </div>
            <div class="item1" id="status">
                <a href="?do=status">求職狀態</a>
            </div>
            <div class="item1" id="exp">
                <a href="?do=exp">我的經歷</a>
            </div>

            <div class="item1" id="pro">
                <a href="?do=pro">我的作品</a>
            </div>
        </div>
        <div class="right">
            <?php
            $do = (!empty($_GET['do'])) ? $_GET['do'] : "self";
            $path = "./admin/" . $do . ".php";
            if (file_exists($path)) {
                include $path;
            } else {
                include "./admin/self.php";
            }
            ?>
        </div>

    </div>

</body>

</html>