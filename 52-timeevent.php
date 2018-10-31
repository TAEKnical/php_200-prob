<?php
  //특정 시간에만 특정 명령어 작동하기
  //시작 시간 설정 2019년 1월 1일 0시 59분 59초
  $startTime = mktime(0,0,0,1,1,2019);

  //종료 시간 설정:2019년 1월 1일 0시 59분 59초
  $endTime = mktime(0,59,59,1,1,2019);

  $nowTime = time();
  if($nowTime >= $startTime && $nowTime <=$endTime){
    echo "현재 이벤트에 참여할 수 있는 시간입니다.";
  }
  else{
    echo "이벤트 시작 전이거나 종료되었습니다.";
  }
 ?>
