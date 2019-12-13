<?php
  include_once "base.php";
  
  $sql="select `self_text` from self where `id`";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  
?>
<div class="t">
<table>
<td><?=$row['self_text']?></td>
</tr>
</table>
</div>