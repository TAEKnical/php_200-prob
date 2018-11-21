<?php
//DB생성
  $host="localhost";
  $user="root";
  $pw="root";
  $dbConnect = new mysqli($host,$user,$pw);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_error()){
    echo "데이터베이스 접속 실패";
  }
  else {
    echo "데이터베이스 접속 성공<br>";
    $sql= "CREATE DATABASE php200Example";
    $res=$dbConnect->query($sql); //쿼리문을 날리고 결과값을 받음

    if($res){
      echo "데이터베이스 생성 완료";
    }
    else {
      echo "데이터베이스 생성 실패";
    }
  }
 ?>
