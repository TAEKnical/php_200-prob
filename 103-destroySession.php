<?php
//모든 세션 삭제
  session_start();

  $_SESSION["mySession1"] = "everdevel";
  $_SESSION["mySession2"] = "beanscent";
  $_SESSION["mySession3"] = "tomodevel";

  //생성된 세션 확인
  echo "<pre>";
  var_dump($_SESSION);
  echo "</pre>";

  //세션 파괴
  if(session_destroy()){
    echo "세션 삭제 완료";
  }
  else {
    echo "세션 삭제 실패";
  }


 ?>
