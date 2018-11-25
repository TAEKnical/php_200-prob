<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "CREATE TABLE schoolRecord (";
  $sql .= "schoolRecordID int(10) unsigned AUTO_INCREMENT COMMENT '학생 번호',";
  $sql .= "myMemberID int unsigned NOT NULL COMMENT '회원 번호',";
  $sql .= "class tinyint unsigned COMMENT '소속 클래스',";
  $sql .= "english tinyint unsigned NOT NULL COMMENT '영어 점수',";
  $sql .= "math tinyint unsigned NOT NULL COMMENT '수학 점수',";
  $sql .= "science tinyint unsigned NOT NULL COMMENT '과학 점수',";
  $sql .= "japanese tinyint unsigned NOT NULL COMMENT '일본어 점수',";
  $sql .= "coding tinyint unsigned NOT NULL COMMENT '코딩 점수',";
  $sql .= "PRIMARY KEY (schoolRecordID)";
  $sql .= ") CHARSET=utf8 COMMENT = '성적 정보';";


  $res = $dbConnect->query($sql);

  if($res){
    echo "테이블 생성 완료";
  }
  else {
    echo "테이블 생성 실패";
  }
 ?>
