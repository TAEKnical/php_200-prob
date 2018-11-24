<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "UPDATE myMember SET phone=0 WHERE myMemberID=4";
  $res = $dbConnect->query($sql);

  if($res){
    echo "변경 성공";
    echo "<br>";
    $sql = "SELECT phone FROM myMember WHERE myMemberID =4";
    $res = $dbConnect->query($sql);
    $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
    echo "회원번호 4의 휴대전화번호는".$memberInfo["phone"];
  }
  else {
    echo "변경 실패";
  }
 ?>
