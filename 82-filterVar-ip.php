<?php
//filter_var 함수의 두번째 인자에 따라 검사할 유형이 달라진다.
//ip주소를 검사하는 예제

function checkIP($IP){
  $IPCheck = filter_Var($IP, FILTER_VALIDATE_IP);
  $returnInfo=false;
  if($IPCheck){
    $returnInfo = true;
  }
  return $returnInfo;
}

$IP = "192.168.0.128";//http 또는 https를 적어줘야 올바른 형식으로 인식

if(checkIP($IP)){
  echo "{$IP}은 올바른 IP입니다.";
}
else {
  echo "{$IP}은 올바른 형식이 아닙니다.";
}

 ?>
