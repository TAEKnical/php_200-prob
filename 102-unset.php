<?php
session_start();
$_SESSION["userid"] = "everdevel";

if(isset($_SESSION["userid"])){
  echo "세션 생성 완료. 세션 userid의 값 : {$_SESSION['userid']}";
}
else {
  echo "세션 생성 실패";
}

unset($_SESSION["userid"]);

echo "<br>";

if(isset($_SESSION["userid"])){
  echo "세션 삭제 실패";
}
else {
  echo "세션 삭제 성공. userid 세션의 값 : {$_SESSION['userid']}";
}
?>
