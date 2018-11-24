<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime) VALUES";

  $member = array();

  $member[0] = "('miu','김미우','miupw','010-1234-5678','miu@everdevel.com','2007-09-02','w',NOW())";
  $member[1] = "('yuna','김유나','yunapw','010-1234-5678','yuna@everdevel.com','2008-10-23','w',NOW())";
  $member[2] = "('minhoo','김민후','minhoopw','010-1234-5678','minhoo@everdevel.com','2005-04-30','m',NOW())";
  $member[3] = "('haeyun','김해윤','haeyunpw','010-1234-5678','haeyun@everdevel.com','2012-03-01','w',NOW())";

  foreach($member as $m){
    $query = $sql.$m;
    $res = $dbConnect->query($query);

    if($res){
      echo "데이터 입력 성공<br>";
    }
    else{
      echo "데이터 입력 실패<br>";
    }
  }
 ?>
