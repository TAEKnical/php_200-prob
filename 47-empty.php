<?php
//변수의 값이 빈 문자열인지 확인하는 함수
  $var = '';
  echo '값이 빈 문자열인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = null;//NULL도 가능
  echo '값이 NULL인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = array();//array() 대신 []도 가능
  echo '값이 빈 배열인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = 0;
  echo '값이 정수 0인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = '0';
  echo '값이 문자열 \'0\'인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = '문자열';//NULL도 가능
  echo '값이 문자열(string)인 경우';
  var_dump(empty($var));
  echo '<br>';

  echo '이상 case에 해당하면 변수 값이 비어있다고 판단합니다.'

 ?>
