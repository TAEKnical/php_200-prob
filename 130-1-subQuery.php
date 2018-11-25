<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

  $sql = "SELECT * FROM schoolRecord WHERE english = (SELECT max(english) FROM schoolRecord)";

  $res = $dbConnect->query($sql);

  $dataCount = $res->num_rows;

  for($i=0;$i<$dataCount;$i++){
    $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "학생번호 : ".$memberInfo['myMemberID'];
    echo "<br>";
    echo "클래스 : ".$memberInfo['class'];
    echo "<br>";
    echo "영어 : ".$memberInfo['english'];
    echo "<br>";
  }
 ?>
