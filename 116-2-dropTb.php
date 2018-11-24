<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "DROP TABLE test";
  $res = $dbConnect->query($sql);

  if($res){
    echo "테이블 삭제 성공";
  }
  else {
    echo "테이블 삭제 실패";
  }
 ?>
