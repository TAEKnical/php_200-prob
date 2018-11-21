<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "DESC myMember";
  $res = $dbConnect->query($sql);

  $list = $res->fetch_array(MYSQLI_ASSOC);

  echo "<pre>";
  var_dump($list);
  echo "</pre>";
 ?>
