<?php
include_once "base.php";

$sql = "select * from exp where `id`";
$row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="tt">
  <div class="modal">
    <h4>職稱</h4><input type="text" id="com_name"><br>
    <h4>公司名稱</h4><input type="text" id="job_content"><br>
    <h4>工作內容</h4><input type="text" id="job_name"><br>
    <h4>從..年</h4><input type="text" id="from_year"><br>
    <h4>從..月</h4><input type="text" id="from_mon"><br>
    <h4>到..年</h4><input type="text" id="to_year"><br>
    <h4>到..月</h4><input type="text" id="to_mon"><br>
    <input type="button" value="送出" class="insert">
    <input type="button" value="取消" class="cancel">
  </div>

  <input type="button" value="新增" class="new">
  
  <?php
  foreach ($row as $r) {
    ?>
    <form action="./api/exp_edit.php" method="post">
      <table>
        <tr>
          <td>職稱</td>
          <td><input type="text" name="job_name" value="<?= $r['job_name'] ?>"></td>
        </tr>
        <tr>
          <td>公司名稱</td>
          <td><input type="text" name="com_name" value="<?= $r['com_name'] ?>"></td>
        </tr>
        <tr>
          <td>工作內容</td>
          <td><input type="text" name="job_content" value="<?= $r['job_content'] ?>"></td>
        </tr>
        <tr>
          <td>從..年</td>
          <td><input type="text" name="from_year" value="<?= $r['from_year'] ?>"></td>
        </tr>
        <tr>
          <td>從..月</td>
          <td><input type="text" name="from_mon" value="<?= $r['from_mon'] ?>"></td>
        </tr>
        <tr>
          <td>到..年</td>
          <td><input type="text" name="to_year" value="<?= $r['to_year'] ?>"></td>
        </tr>
        <tr>
          <td>到..月</td>
          <td><input type="text" name="to_mon" value="<?= $r['to_mon'] ?>"></td>
        </tr>
        <tr>
          <input type="hidden" name="table" value="exp">
          <input type="hidden" name="id" value="<?= $r['id'] ?>">
          <td><input type="submit" value="送出" class="sub"></td>
          <td><input type="button" data-id="<?= $r['id'] ?>" value="刪除" class="del"></td>
        </tr>
      </table>
    </form>
    <br><br>
  <?php
  }
  ?>
</div>

<script>
  $(".new").on("click", function() {
    $(".modal").show();
  })

  $(".cancel").on("click", function() {
    $(".modal").hide();
  })

  $(".insert").on("click", function() {
    let data = [$('#com_name').val(), $('#job_content').val(), $('#job_name').val(),
      $('#from_year').val(), $('#from_mon').val(), $('#to_year').val(),
      $('#to_mon').val()
    ];

    let table = "exp";
    $.post("./api/exp_add.php", {
      table,
      data
    }, function(res) {
      $(".modal").hide();
      window.location.reload("../admin.php?do=exp");
    })

    alert("新增成功");
  })

  $(".del").on("click", function() {
    let id = $(this).data('id');
    let table = "exp";

    $.post("./api/exp_del.php", {
      table,
      id
    }, function(res) {
      window.location.reload("../admin.php?do=exp");
      console.log(res);
    })

  })
</script>