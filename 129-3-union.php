<?php
  //UNION을 사용하면 중복된 데이터는 한번만 출력한다. UNION ALL은 중복된 데이터도 출력한다.
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

  $sql = "SELECT name, email FROM dropOutOld UNION SELECT name, email FROM dropOutNew";

  $res = $dbConnect->query($sql);

  $dataCount = $res->num_rows;

  for($i=0;$i<$dataCount;$i++){
    $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "이름 : ".$memberInfo['name'];
    echo "<br>";
    echo "이메일 : ".$memberInfo['email'];
    echo "<br>";
  }
 ?>
