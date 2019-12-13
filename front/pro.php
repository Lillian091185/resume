<?php
include_once "base.php";

$sql = "select * from pro where `id`";
$row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="tt">
<table>
    <tr>
        <td style="width:100px">縮圖</td>
        <td>名稱</td>
        <td>連結</td>
    </tr>
    <?php
    foreach ($row as $r) {
        ?>
        <tr>
            <td><img src="<?= $r['path']; ?>" style="width:70px;height:70px;"></td>
            <td><?= $r['text']; ?></td>
            <td><?= $r['href']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
