<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200/108-2-connectDB.php";

  $sql = "INSERT INTO myMember(";
  $sql .= "userId, name, password, phone, email, birthDay, gender, regTime)";
  $sql .= "VALUES('everdevelHost','김태영','mm281118','010-1234-5678','everdevel@everdevel.com','1986-04-04','m',now());";

  $res = $dbConnect->query($sql);

  if($res){
    echo "데이터 입력 완료";
  }
  else{
    echo "데이터 입력 실패";
  }
 ?>
