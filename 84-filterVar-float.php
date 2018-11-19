<?php
//filter_var 함수의 두번째 인자에 따라 검사할 유형이 달라진다.
//실수인지를 검사하는 예제

function checkFLOAT($FLOAT){
  $FLOATCheck = filter_Var($FLOAT, FILTER_VALIDATE_FLOAT);
  $returnInfo=false;
  if($FLOATCheck){
    $returnInfo = true;
  }
  return $returnInfo;
}

$FLOAT = "123.1"; //123도 실수로 인식

if(checkFLOAT($FLOAT)){
  echo "{$FLOAT}은 올바른 FLOAT입니다.";
}
else {
  echo "{$FLOAT}은 올바른 형식이 아닙니다.";
}

 ?>
