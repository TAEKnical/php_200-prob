<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "create table prodReview (";
  $sql .= "prodReviewID int unsigned auto_increment comment '리뷰의 고유번호',";
  $sql .= "myMemberID int unsigned comment '리뷰를 작성한 회원번호',";
  $sql .= "content tinytext comment '리뷰 내용',";
  $sql .= "regTime datetime not null comment '리뷰 작성 날짜',";
  $sql .= "primary key(prodReviewID))";
  $sql .= "charset=utf8 comment='상품 리뷰';";

  $result = $dbConnect->query($sql);

  if($result){
    echo "테이블 생성 완료";
  }
  else {
    echo "테이블 생성 실패";
  }
 ?>
