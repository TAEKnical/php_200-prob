<?php
  include $_SERVER["DOCUMENT_ROOT"].'/php200project/common/171-session.php';
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/179-checkSignSession.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>설문조사 프로그램</title>
   </head>
   <body>
     <h1>설문조사 프로그램</h1>
     <h2>당신은 어떤 경로로 이 책을 알게 되었나요?</h2>
     <form name="survey" action="./190-surveySave.php" method="post">
       <input type="radio" name="surveyKind" value="offlineStore" required/>오프라인 서점<br>
       <input type="radio" name="surveyKind" value="onlineStore">온라인 서점<br>
       <input type="radio" name="surveyKind" value="website">웹사이트<br>
       <input type="radio" name="surveyKind" value="friends">지인<br>
       <input type="radio" name="surveyKind" value="academy">교육기관<br>
       <input type="radio" name="surveyKind" value="noMemory">기억이 안남<br>
       <input type="radio" name="surveyKind" value="etc">기타<br>
       <input type="submit" value="제출"/>
     </form>
   </body>
 </html>
