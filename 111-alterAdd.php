<?php
  //ALTER TABLE 테이블명 ADD 추가할필드명 옵션 코멘트 위치
  //myMember 테이블에 현재 나이 정보를 입력하는 필드 추가
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

  //마지막에 띄어쓰기가 있습니다.
  $sql = "ALTER TABLE myMember ADD crrentAge ";
  $sql .= "int unsigned COMMENT '현재 나이' AFTER gender";

  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 추가 완료";
  }
  else {
    echo "필드 추가 실패";
  }
 ?>
