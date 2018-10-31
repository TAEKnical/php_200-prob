<?php
//문자열을 자릿수로 자르기
  $str="everdevel";
  //0자리 시작하여 5글ㅈ라ㅡㄹ 자른 후 cutStr에 대입
  $cutStr=substr($str,0,5);
  echo $cutStr;
  //역순으로 자르기
  $cutStr2=substr($str,-5,5);
  echo $custStr2;
 ?>
