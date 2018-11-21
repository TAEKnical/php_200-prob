<?php
session_start();//session_start() 함수 앞에는 어떠한 코드도 있어서는 안된다
$_SESSION["userid"] = "everdevel";

if(isset($_SESSION["userid"])){
  echo "세션 생성 완료. 세션 userid의 값 : {$_SESSION['userid']}";
}
else {
  echo "세션 생성 실패";
}
 ?>
