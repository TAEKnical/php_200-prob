<?php
  //INDEX(필드명)을 사용하면 데이터를 더 빠르게 불러올 수 있다.
  //ALTER는 이미 존재하는 테이블에 인덱스를 새롭게 추가할 때 쓴다.

  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

  $sql = "ALTER TABLE myMember ADD INDEX(name);";
  $res = $dbConnect->query($sql);

  if($res){
    echo "적용 완료";
  }
  else {
    echo "적용 실패";
  }

  //cmd에서 ㄷ[]이터베이스를 확인해보면 name의 Key 속성에 MUL이 표시된 것을 확인할 수 있다.
  //자주 쓰이는 필드라면 인덱스를 적용해 놓는 것이 속도면에서 유리하다.
 ?>
