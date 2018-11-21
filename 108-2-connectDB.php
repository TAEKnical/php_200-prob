<?php
//앞서 생성한 DB에 접속
  $host = "localhost";
  $user ="root";
  $pw = "root";
  $dbName = "php200Example";
  $dbConnect = new mysqli($host,$user,$pw,$dbName);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_error()){
    echo "데이터베이스 {$dbName}에 접속 실패<br>";
  }
  else {
    echo "데이터베이스 {$dbName}에 접속<br>";
  }
 ?>
