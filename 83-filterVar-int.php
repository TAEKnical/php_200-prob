<?php
//filter_var 함수의 두번째 인자에 따라 검사할 유형이 달라진다.
//정수인지를 검사하는 예제

function checkINT($INT){
  $INTCheck = filter_Var($INT, FILTER_VALIDATE_INT);
  $returnInfo=false;
  if($INTCheck){
    $returnInfo = true;
  }
  return $returnInfo;
}

$INT = "123";

if(checkINT($INT)){
  echo "{$INT}은 올바른 INT입니다.";
}
else {
  echo "{$INT}은 올바른 형식이 아닙니다.";
}

 ?>
