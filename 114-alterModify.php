<?php
  //테이블 필드 옵션,자료형 변경하기
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";
  //마지막에 스페이스 입력
  $sql = "ALTER TABLE myMember MODIFY nationality ";//ALTER TABLE 테이블명 MODIFY 필드명 변경할정보
  $sql .= "varchar(15) comment '국적' AFTER gender"; //실제 쿼리는 다음과 같음 : ALTER TABLE myMember MODIFY nationality varchar(15) comment '국적' AFTER gender
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 정보 변경 환료";
  }
  else{
    echo "필드 정보 변경 실패";
  }
?>
