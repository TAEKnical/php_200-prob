<?php
//테이블 초기화
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "TRUNCATE mymember";//TRUNCATE 테이블명
  $res = $dbConnect->query($sql);

  if($res){
    echo "초기화 성공";
    echo "<br>";
  }
  else {
    echo "초기화 실패";
    echo "<br>";
  }
 ?>
