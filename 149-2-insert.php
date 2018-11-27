<?php

  include $_SERVER["DOCUMENT_ROOT"].'/php200/108-2-connectDB.php';

  $uId=$_POST['userId'];
  $uName=$_POST['userName'];
  $uPw=$_POST['userPw'];
  $uPhone=$_POST['userPhone'];
  $uEmail=$_POST['userEmail'];
  $uBirthDay=$_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
  $uGender = $_POST['userGender'];

  $sql = "INSERT INTO myMember (userId, name, password, phone, email, birthDay, gender, regTime) VALUES ('{$uId}','{$uName}','{$uPw}','{$uPhone}','{$uEmail}','{$uBirthDay}','{$uGender}',NOW())";

  $res = $dbConnect->query($sql);

  if($res){
    $sql = "SELECT * FROM myMember";
    $res = $dbConnect->query($sql);

    $dataCount=$res->num_rows;

    for($i=0;$i<$dataCount;$i++){
      $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
      echo "아이디 : ".$memberInfo['userId'];
      echo "<br>";
      echo "이름 : ".$memberInfo['name'];
      echo "<hr>";
    }
  }
  else {
    echo "입력 실패";
  }
 ?>
