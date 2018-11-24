<?php
//테이블 필드 삭제
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "AlTER TABLE myMember DROP nationality"; //ALTER TABlE 테이블명 DROP 삭제할필드명;
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 삭제 완료";
  }
  else{
    echo "필드 삭제 실패";
  }
 ?>
