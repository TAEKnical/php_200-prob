<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "SELECT name,userId FROM myMember WHERE userId Like 'm%'";
  $result = $dbConnect->query($sql);
  $dataCount = $result->num_rows;

  for($i=0; $i<$dataCount; $i++){
    $memberInfo = $result->fetch_array(MYSQLI_BOTH);
    echo "이름 : ".$memberInfo["name"];
    echo "<br>";
    echo "아이디 : ".$memberInfo["userId"];
    echo "<br>";
  }
 ?>
