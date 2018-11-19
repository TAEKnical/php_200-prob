<?php
//filter_var 함수의 두번째 인자에 따라 검사할 유형이 달라진다.
//이메일을 검사하는 예제

function checkEmail($email){
  $emailCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);
  $returnInfo=false;
  if($emailCheck){
    $returnInfo = true;
  }
  return $returnInfo;
}

$email = "mybookforweb@gmail.com";

if(checkEmail($email)){
  echo "{$email}은 올바른 이메일 주소입니다.";
}
else {
  echo "{$emial}은 올바른 형식이 아닙니다.";
}

 ?>
