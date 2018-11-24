<?php
  //필드명 변경하기
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "ALTER TABLE myMember CHANGE cudrrentAge nationality int"; //ALTER TABLE 테이블명 CHANGE 기존필드명 새필드명 기존데이터형
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드명 변경 완료";
  }
  else {
    echo "필드명 변경 실패";
  }
 ?>
