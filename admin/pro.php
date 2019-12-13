<?php
include_once "./base.php";
// $sql = "select * from photo where `id`";
// $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="modal">
    <form action="./api/add_pro.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <h4>名稱</h4><input type="text" name="text" style="width:150px;">
        <h4>連結</h4><input type="text" name="href" style="width:150px;">
        <br>
        <input type="submit" value="送出" class="insert">
        <input type="button" value="取消" class="cancel">
    </form>
</div>

<div class="tt">
        <table>
            <tr>
                <td style="width:100px">縮圖</td>
                <td>名稱</td>
                <td>連結</td>
                <td>刪除</td>
            </tr>
            <?php
            $table = "pro";
            $rows = all($table, 1);
            foreach ($rows as $r) {
                ?>
                <tr>
                    <td><img src="<?= $r['path']; ?>" style="width:70px;height:70px;"></td>
                    <td><?= $r['text']; ?></td>
                    <td><?= $r['href']; ?></td>
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
        let table = "pro";

        $.post("./api/del_pro.php", {
            table,
            id
        }, function(res) {
            window.location.reload("../admin.php?do=pro");
        })
    })

</script>

