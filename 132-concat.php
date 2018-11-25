<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';
  //concat은 서로 다른 필드의 값을 문자열에 합쳐서 출력할 수 있다.
  $sql = "SELECT CONCAT(name,'의 이메일 주소는', email,'입니다.') as word FROM myMember;";

  $res=$dbConnect->query($sql);

  $dataCount = $res->num_rows;

  for($i=0;$i<$dataCount;$i++){
    $concat = $res->fetch_array(MYSQLI_ASSOC);
    echo $concat['word'];
    echo "<br>";
  }
 ?>
