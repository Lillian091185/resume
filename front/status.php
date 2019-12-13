<?php
  include_once "base.php";
  
  $sql="select * from status where `id`";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  
?>
  <table>
  <tr>
  <td>工作年資</td>
  <td><?=$row['sen']?></td>
  </tr><tr>
  <td>尋求工作類型</td>
  <td><?=$row['job_type']?></td>
  </tr><tr>
  <td>年薪區間</td>
  <td><?=$row['salary']?></td>
  </tr><tr>
  <td>期望的職位</td>
  <td><?=$row['job_offr']?></td>
  </tr><tr>
  <td>期望工作地點</td>
  <td><?=$row['job_site']?></td>
  </tr><tr>
  <td>語言能力</td>
  <td><?=$row['lan']?></td>
  </tr><tr>
  <td>專長</td>
  <td><?=$row['skill']?></td>
  </tr>
  </table>