<?php
//패턴 대입
  $pattern = '/^i+$/'; // '/패턴/' ^는 i로 시작하라는 뜻, $는 i로 끝내라는 뜻. 패턴식은 따로 지정하지 않으면 기본적으로 1byte만 검사하는데 +를 사용하면 1byte 이상 체크함을 의미한다.
  $str='ii';

  if(preg_match($pattern,$str,$matches)){
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";//preg_match(검사할패턴,검사할문자열,결과저장할변수)
    echo "<pre>";
    var_dump($matches);
    echo "</pre>";
  }
  else {
    echo "i로시작하고 i로 끝나야 합니다.";
  }
 ?>
