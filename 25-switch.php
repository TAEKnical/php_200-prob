<?php
//switch 조건문
$likeCharacter = 'mickey';

switch($likeCharacter){
  case 'mickey':
    echo '미키';
    break;
  case 'minnie':
    echo '미니';
    break;
  case 'duffy':
    echo '더피';
  default://만약 break를 쓰지 않으면 default도 실행될 것
    echo "무엇도 좋아하지 않습니다.";
    break;
  }
 ?>
