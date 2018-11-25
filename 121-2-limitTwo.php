<?php
//SELECT 필드명 FROM 테이블명 LIMIT 시작할순번(0부터) 불러올개수
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "SELECT name,userId FROM myMember LIMIT 2,3";
  $result = $dbConnect->query($sql);
  $dataCount = $result->num_rows;

  for($i=0; $i<$dataCount; $i++){
    $memberInfo = $result->fetch_array(MYSQLI_BOTH);
    echo "이름 : ".$memberInfo[0];
    echo "<br>";
  }
 ?>
