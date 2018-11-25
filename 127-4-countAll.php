<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "SELECT count(*) FROM schoolRecord";
  $res = $dbConnect->query($sql);
  $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
  echo "레코드 수 : ".$reviewInfo['count(*)'];
 ?>
