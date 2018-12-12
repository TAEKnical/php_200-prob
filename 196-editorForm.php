<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/171-session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/179-checkSignSession.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>웹코딩 에디터</title>
   </head>
   <body>
     <h1>실행할 php코드를 입력하세요</h1>
     <form name="webEditor" action="197-playCode.php" method="post">
       <textarea name="code" rows="30" cols="100"></textarea>
       <br>
       <input type="submit" value="PLAY CODE" />
     </form>
   </body>
 </html>
