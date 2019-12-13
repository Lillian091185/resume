<?php
include_once "./base.php";
?>

<div class="modal">
    <form action="./api/add_photo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" value="送出" class="insert">
        <input type="button" value="取消" class="cancel">
    </form>
</div>

<div class="tt">
    <form action="./api/edit_photo.php" method="post">
        <table>
            <tr>
                <td style="width:100px">大頭貼</td>
                <td>顯示</td>
                <td>刪除</td>
            </tr>
            <?php
            $table = "photo";
            $rows = all($table, 1);
            foreach ($rows as $r) {
                ?>
                <tr>
                    <td><img src="<?= $r['path']; ?>" style="width:70px;height:70px;"></td>
                    <td><input type="button" class="sh" data-id="<?= $r['id'] ?>" value="顯示" style="width:50px"></td>
                    <td><input type="button" data-id="<?= $r['id'] ?>" value="刪除" class="del"></td>
                    <input type="hidden" name="" value="<?= $$r['id']; ?>">

                </tr>
            <?php
            }
            ?>
            <tr>
                <input type="hidden" name="table" value="<?= $table; ?>">
                <td><input type="button" value="新增" class="edit_p" style="width:50px;height:20px"></td>

            </tr>
        </table>
    </form>
</div>

<script>
    $(".edit_p").on("click", function() {
        $(".modal").show();
    })

    $(".cancel").on("click", function() {
        $(".modal").hide();
    })

    $(".del").on("click", function() {
        let id = $(this).data('id');
        let table = "photo";

        $.post("./api/del_photo.php", {
            table,
            id
        }, function(res) {
            window.location.reload("../admin.php?do=photo");
        })

        alert("刪除成功");
    })

    $(".sh").on("click", function() {
        let sh = $(this).data('id');
        let table = "photo"

        $.post("./api/sh.php", {
            table,
            sh
        }, function(res) {
            window.location.reload("../admin.php?do=photo");
        })

        alert("更新成功");
    })
</script>