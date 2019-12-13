<?php
include_once "base.php";

$sql = "select * from exp where `id`";
$row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="tt">
  <?php
  foreach ($row as $r) {
    ?>
    <table>
      <tr>
        <td>職稱</td>
        <td><?= $r['job_name'] ?></td>
      </tr>
      <tr>
        <td>公司名稱</td>
        <td><?= $r['com_name'] ?></td>
      </tr>
      <tr>
        <td>工作內容</td>
        <td><?= $r['job_content'] ?></td>
      </tr>
      <tr>
        <td>從..年</td>
        <td><?= $r['from_year'] ?></td>
      </tr>
      <tr>
        <td>從..月</td>
        <td><?= $r['from_mon'] ?></td>
      </tr>
      <tr>
        <td>到..年</td>
        <td><?= $r['to_year'] ?></td>
      </tr>
      <tr>
        <td>到..月</td>
        <td><?= $r['to_mon'] ?></td>
      </tr>
    </table>
    <br>
  <?php
  }
  ?>

</div>