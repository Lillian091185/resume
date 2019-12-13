<?php
  include_once "base.php";
  
  $sql="select * from self where `id`";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  
?>
  <table>
  <tr>
  <td>姓名</td>
  <td><?=$row['name']?></td>
  </tr><tr>
  <td>使用者名稱</td>
  <td><?=$row['username']?></td>
  </tr><tr>
  <td>電話</td>
  <td><?=$row['tel']?></td>
  </tr><tr>
  <td>信箱</td>
  <td><?=$row['email']?></td>
  </tr><tr>
  <td>地址</td>
  <td><?=$row['addr']?></td>
  </tr><tr>
  <td>最高學歷</td>
  <td><?=$row['school']?></td>
  </tr>
  </table>