<?php
  //setcookie("쿠키명","쿠키값","폐기시간(타임스태프)","적용범위(/->최상단부터,/php200->php200 디렉토리 안에서만)","적용할도메인","http or https");
  setcookie("myCookie","hello",time()+86400);//86400은 하루를 초로 계산한 값.
  setcookie("memberID","everdevel",time()+3600,"/");

  //크롬 개발자도구에서 확인 가능
 ?>
