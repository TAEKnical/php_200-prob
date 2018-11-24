<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "DELETE FROM myMember WHERE myMemberID=4"; //DELETE FROM 테이블명 WHERE 조건
  $res = $dbConnect->query($sql); //WHERE 문 없이 DELETE문만 사용하면 모든 레코드가 삭제되므로 주의해야한다

  if($res){
    echo "삭제 성공";
    echo "<br>";
    $sql = "SELECT myMemberID,phone FROM myMember";
    $result = $dbConnect->query($sql);
    $dataCount = $result->num_rows;

    echo "현재의 회원<br>";
    for($i=0;$i<$dataCount;$i++){
      $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
      echo "회원번호 {$memberInfo['myMemberID']} 휴대전화번호 {$memberInfo['phone']}";
      echo "<br>";
    }
  }
  else {
    echo "변경 실패";
  }
 ?>
