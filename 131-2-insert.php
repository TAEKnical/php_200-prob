<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

  $sql = "INSERT INTO myMember (userId, name, password, phone, email, birthDay, gender, regTime) VALUES ('pepper', '페퍼', 'vpvjeptm', '010-1234-5678', 'miu@everdevel.com','2015-11-18','m',now())";

  $res = $dbConnect->query($sql);

  if($res){
    echo "입력 완료";
  }
  else{
    echo "입력 실패"; //이메일이 중복이기 때문에 입력 실패
  }
  ?>
