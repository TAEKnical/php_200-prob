<?php
//filter_var 함수의 두번째 인자에 따라 검사할 유형이 달라진다.
//url을 검사하는 예제

function checkURL($url){
  $URLCheck = filter_Var($url, FILTER_VALIDATE_URL);
  $returnInfo=false;
  if($URLCheck){
    $returnInfo = true;
  }
  return $returnInfo;
}

$url = "https://www.naver.com";//http 또는 https를 적어줘야 올바른 형식으로 인식

if(checkURL($url)){
  echo "{$url}은 올바른 URL입니다.";
}
else {
  echo "{$url}은 올바른 형식이 아닙니다.";
}

 ?>
