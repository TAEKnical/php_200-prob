<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "SELECT m.name, r.content, r.regTime FROM myMember m JOIN prodReview r ON (m.myMemberID = r.myMemberID);";
//JOIN문으로 두 테이블을 합칠 때는 앨리어스(별명)을 지정해야한다. 두 테이블간에 동일한 필드명이 있기 때문이다.
  $res= $dbConnect->query($sql);

  if($res){
    $dataCount = $res->num_rows;

    for($i=0;$i<$dataCount;$i++){
      $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
      echo "{$reviewInfo['regTime']}-{$reviewInfo['name']}님, {$reviewInfo['content']}";
      echo "<br>";
    }
  }
 ?>
