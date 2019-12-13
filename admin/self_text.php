<?php
  include_once "base.php";
  
  $sql="select `id`,`self_text` from self where 1";
  $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<form action="./api/self_text_edit.php" method="post">
<table>
<td>自傳</td>
<td><textarea name="self_text" cols="30" rows="10"><?=$row['self_text']?></textarea></td>
</tr><tr>
<input type="hidden" name="table" value="self">
<input type="hidden" name="id" value="<?=$row['id']?>">
<td><input type="submit" value="送出" class="sub"></td>
</tr>
</table>
</form>