<?php
//정규표현식 영문대문자,영문소문자,한글,숫자,.(점), 띄어쓰기 패턴 허용
$pattern = '/^[A-Za-z가-힣. 0-9]+$/';
$str = '안녕 ha se yo.하2ha2하위';
if(preg_match($pattern,$str,$matches)){
  echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
  echo "<pre>";
  var_dump($matches);
  echo"<pre>";
}
else {
  echo "이름에 영문 대문자,소문자,한글,점,띄어쓰기 외의 다른 문자가 있는지 확인";
}
 ?>
