<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "SELECT myMemberID, name FROM myMember WHERE myMemberID IN (1,2,3)"; // myMemberID >=1 AND mymemberID <=3 과 같음
  $res = $dbConnect->query($sql);

  if($res){
    $dataCount = $res->num_rows;

    for($i=0; $i<$dataCount; $i++){
        $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
        echo "회원번호 {$memberInfo['myMemberID']} 회원이름 {$memberInfo['name']}";
        echo "<br>";
    }
  }
  else {
    echo "실패";
  }
 ?>
