<?php
  include_once "base.php";
  
  $sql="select * from self where `id`";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  
?>
  <form action="./api/self_edit.php" method="post">
  <table>
  <tr>
  <td>姓名</td>
  <td><input type="text" name="name" value="<?=$row['name']?>"></td>
  </tr><tr>
  <td>使用者名稱</td>
  <td><input type="text" name="username" value="<?=$row['username']?>"></td>
  </tr><tr>
  <td>電話</td>
  <td><input type="text" name="tel" value="<?=$row['tel']?>"></td>
  </tr><tr>
  <td>信箱</td>
  <td><input type="text" name="email" value="<?=$row['email']?>"></td>
  </tr><tr>
  <td>地址</td>
  <td><input type="text" name="addr" value="<?=$row['addr']?>"></td>
  </tr><tr>
  <td>最高學歷</td>
  <td><input type="text" name="school" value="<?=$row['school']?>"></td>
  </tr><tr>
  <input type="hidden" name="table" value="self">
  <input type="hidden" name="id" value="<?=$row['id']?>">
  <td><input type="submit" value="送出" class="sub"></td>
  </tr>
  </table>
  </form>


