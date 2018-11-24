<?php
  //불러올 레코드 수 제한하기 LimitIterator
  //SELECT 필드명 FROM 테이블명 LIMIT 불러올수
    include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

    $sql = "SELECT name FROM myMember LIMIT 3";
    $result = $dbConnect->query($sql);
    $dataCount = $result->num_rows;

    for($i=0; $i<$dataCount; $i++){
      $memberInfo = $result->fetch_array(MYSQLI_BOTH);
      echo "이름 : ".$memberInfo["name"];
      echo "<br>";
    }
 ?>
