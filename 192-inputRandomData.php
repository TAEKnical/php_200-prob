<?php
//설문조사 결과에 랜덤한 값을 100개 집어넣는다. 차트를 만들기 위해서.
    include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/171-session.php";
    include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/179-checkSignSession.php";
    include $_SERVER["DOCUMENT_ROOT"]."/php200project/connection/163-connection.php";

    $kindList = array();
    $kindList = ["offlineStore", "onlineStore", "website", "friends", "academy", "noMemory", "etc"];

    $memberID = 2;

    for($i=1; $i<=100;$i++){
      $memberID++;
      $kind=$kindList[rand(0,6)];
      $time=time();
      $sql = "INSERT INTO survey (memberID, kind, regTime)";
      $sql .= "VALUES ({$memberID}, '{$kind}', {$time})";
      $dbConnect->query($sql);
    }
 ?>
