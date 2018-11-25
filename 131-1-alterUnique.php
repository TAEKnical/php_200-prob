<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';
  //UNIOQUE는 PIRMARY처럼 중복을 방지하지만 그 테이블의 기준필드가 되지는 않는다.
  $sql = "ALTER TABLE myMember MODIFY email varchar(30) NOT NULL UNIQUE COMMENT '고객의 이메일 주소'";
  $res = $dbConnect->query($sql);
  //이제 email에는 중복이 불가능해졌음
  if($res){
    echo "변경 완료";
  }
  else {
    echo "변경 실패";
  }
 ?>
