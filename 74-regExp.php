<?php
  $pattern = '/^[가-힣]{3,}$/';
  //검사 범위를 지정할 때는 [00-00] 으로.
  //한글은 3byte이며 {3]이라고 하면 3byte를 검사하겠다는 뜻. {9,15}라고 하면 한글 3글자~5글자를 검사한다는 뜻이고 {3,}라고 하면 +와 같은 의미. +를 사용해도 됨.

  $str = '신난다신나';

  if(preg_match($pattern,$str,$matches)){
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
    echo "<pre>";
    var_dump($matches);
    echo"<pre>";
  }
  else {
    echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인 요망";
  }
 ?>
