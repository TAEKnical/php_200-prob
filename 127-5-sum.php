<?php
  //sum(필드명) 필드의 값의 합계를 표시
  //avg(필드명) 은 평균
  //max(필드명) 은 최댓값
  //min(필드명) 은 최솟값
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "SELECT sum(english) FROM schoolRecord";
  $result = $dbConnect->query($sql);
  $score = $result->fetch_array(MYSQLI_ASSOC);
  echo "영어 점수 합계 : ".$score['sum(english)'];
 ?>
