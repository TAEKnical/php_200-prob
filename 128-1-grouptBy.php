<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "UPDATE schoolRecord SET class=1 WHERE schoolRecordID=1";
  $dbConnect->query($sql);

  $sql = "SELECT class, avg(english) as avgEng FROM schoolRecord GROUP BY class"; //class를 기준으로 그룹을 나누어 english의 반별 평균값 계산
  $res = $dbConnect->query($sql);

  $dataCount =$res->num_rows;

  for($i=0;$i<$dataCount;$i++){
    $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "반 : ".$memberInfo['class'];
    echo "<br>";
    echo "평균 영어 점수 : ".$memberInfo['avgEng'];
    echo "<br>";
  }
 ?>
