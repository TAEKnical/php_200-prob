<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "SELECT name, userId FROM myMember";
  $result = $dbConnect->query($sql);

  $dataCount = $result->num_rows; //num_rows는 불러온 레코드의 수를 반환한다.

  for($i=0; $i<$dataCount;$i++){
    $memberInfo = $result->fetch_array(MYSQLI_NUM);
    echo "이름 : ".$memberInfo[0];
    echo "<br>";
    echo "이이디 : ".$memberInfo[1];
    echo "<br>";
  }
 ?>
