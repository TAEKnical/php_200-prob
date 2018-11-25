<?php
  //GROUP BY 문에서 조건을 걸려면 having 사용
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";
  //각 반의 일본어 점수의 합계에서 170점 이상인 값을 표시
  $sql = "SELECT class, sum(japanese) FRoM schoolRecord GROUP BY class HAVING sum(japanese) >= 170";
  $res = $dbConnect->query($sql);

  $dataCount = $res->num_rows;

  for($i=0; $i<$dataCount; $i++){
    $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "반 : ".$memberInfo['class'];
    echo "<br>";
    echo "합산 점수 : ".$memberInfo['sum(japanese)'];
    echo "<br>";
  }
 ?>
