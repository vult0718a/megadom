<?php session_start(); $connect=new MySQLi("localhost","klvnvnip_old_posts","123456dL#@12","klvnvnip_old_posts"); mysqli_set_charset($connect,"utf8")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Demo Request-Response</title>
  <style>
    header{float: left;border: green thin solid;width: 100%;height: 100px;}
    nav{float: left;width: 100%;height: 30px;border: green thin solid;}
    nav>a{float: left;width: 33.3333333%;border: green thin solid;box-sizing: border-box;text-align: center;}
    article{float: left;width: 100%;min-height: 300px;border: green thin solid;}
  </style>
</head>
<body>
<header>Header1</header>
<nav><a href="?option=home">Home</a><a href="?option=news">News</a><a href="?option=feedback">Feedback</a></nav>
<article>
  <?php
    if(isset($_GET['option'])){
      switch($_GET['option']){
        case'home':
          include"home.php";
          break;
        case'news':
          include"news.php";
          break;
        case'feedback':
          include"feedback.php";
          break;
      }
    }
  ?>
</article>
</body>
</html>