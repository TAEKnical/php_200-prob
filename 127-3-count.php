<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  function schoolRecord(){
    global $dbConnect;
    $sql = "SELECT count(class) FROM schoolRecord"; //count(필드명) = 필드가 가진 레코드의 개수를 표시. 단, 값이 NULL인 레코드는 제외하고 계산.
    $res = $dbConnect->query($sql);
    $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "class 필드를 기준으로 한 레코드 수 : {$reviewInfo['count(class)']}"."<br>";
  }

  schoolRecord();

  //schoolRecordID가 1인 레코드의 class 필드 값을 NULL로 변경
  $sql = "UPDATE schoolRecord SET class = NULL WHERE schoolRecordID=  1";
  $dbConnect->query($sql);

  schoolRecord();
 ?>
