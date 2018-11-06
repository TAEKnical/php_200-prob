<?php
  //$_server는 슈퍼 글로벌 변수. 슈퍼 글로벌 변수는 PHP 자체적으로 내장된 변수이며 배열 형태로 저장되어있다. 인덱스값에 따라 여러 정보를 획득할 수 있다.

  echo 'SERVER_SOFTWARE : '.$_SERVER['SERVER_SOFTWARE']; //현재 사용중인 서버의 소프트웨어 환경
  echo '</br>';
  echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'];
//현재 사용중인 서버의 호스트명
  echo '</br>';
  echo 'SERVER_PROTOCOL :'.$_SERVER['SERVER_PROTOCOL'];
  //페이지가 리퀘스트 될 때의 프로토콜과 버전
  echo '</br>';
  echo 'REQUEST_METHOD :'.$_SERVER['REQUEST_METHOD'];//페이지 엑세스 할 때의 리퀘스트의 메소드명
  echo '</br>';
  echo 'DOCUMENT_ROOT : '.$_SERVER['DOCUMENT_ROOT'];//현재 실행 파일의 경로
  echo '</br>';
  echo 'HTTP_CONNECTION : '.$_SERVER['HTTP_CONNECTION'];//리퀘스트 CONNECTION 헤더 출력
  echo '</br>';
  echo 'HTTP_HOST : '.$_SERVER['HTTP_HOST'];//리퀘스트 HOST 헤더 출력
  echo '</br>';
  //echo 'HTTP_REFERER : '.$_SERVER['HTTP_REFERER']; //이전 페이지 주소
  echo '</br>';
  echo 'HTTP_USER_AGENT : '.$_SERVER['HTTP_USER_AGENT'];//페이지에 접속중인 USER AGENT
  echo '</br>';
  //echo 'HTTPS : '.$_SERVER['HTTPS'];//HTTPS 프로토콜을 이용해 실행되는 경우의 정보를 표시
  echo '</br>';
  echo 'REMOTE_ADDR : '.$_SERVER['REMOTE_ADDR']; //현재 페이지를 보고 있는 유저의 아이피 주소
  echo '</br>';
  //echo 'REMOTE_HOST : '.$_SERVER['REMOTE_HOST'];//현제 페이지를 엑세스하고 있는 호스트명
  echo '</br>';
  echo 'REMOTE_PORT :'.$_SERVER['REMOTE_PORT'];//사용자의 기기에서 웹서버로 통신하는 포트
  echo '</br>';
  echo 'SERVER_ADMIN : '.$_SERVER['SERVER_ADMIN'];//웹서버 설정 파일의 SERVER_ADMIN에 설정된 값
  echo '</br>';
  echo 'SERVER_PORT : '.$_SERVER['SERVER_PORT'];//웹서버의 통신포트
  echo '</br>';
  echo 'HTTP_ACCEPT_LANGUAGE :'.$_SERVER['HTTP_ACCEPT_LANGUAGE'];
  echo '</br>';
  echo 'REQUEST_URI :'.$_SERVER['REQUEST_URI'];//현재 페이지에서 도메인 제외하고 출력
  echo '</br>';
  echo 'PHP_SELF :'.$_SERVER['PHP_SELF'];//실행중인 파일의 경로와 파일명 표시
  echo '</br>';
  echo 'QUERY_STRING :'.$_SERVER['QUERY_STRING']; //GET방식으로 전달하는 변수의 정보를 보여줌
?>
