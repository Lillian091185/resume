<?php
  include_once "base.php";
  
  $sql="select * from status where `id`";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  
?>
  <form action="./api/status_edit.php" method="post">
  <table>
  <tr>
  <td>工作年資</td>
  <td><input type="text" name="sen" value="<?=$row['sen']?>"></td>
  </tr><tr>
  <td>尋求工作類型</td>
  <td><input type="text" name="job_type" value="<?=$row['job_type']?>"></td>
  </tr><tr>
  <td>年薪區間</td>
  <td><input type="text" name="salary" value="<?=$row['salary']?>"></td>
  </tr><tr>
  <td>期望的職位</td>
  <td><input type="text" name="job_offr" value="<?=$row['job_offr']?>"></td>
  </tr><tr>
  <td>期望工作地點</td>
  <td><input type="text" name="job_site" value="<?=$row['job_site']?>"></td>
  </tr><tr>
  <td>語言能力</td>
  <td><input type="text" name="lan" value="<?=$row['lan']?>"></td>
  </tr><tr>
  <td>專長</td>
  <td><input type="text" name="skill" value="<?=$row['skill']?>"></td>
  </tr><tr>
  <input type="hidden" name="table" value="status">
  <input type="hidden" name="id" value="<?=$row['id']?>">
  <td><input type="submit" value="送出" class="sub"></td>
  </tr>
  </table>
  </form>
