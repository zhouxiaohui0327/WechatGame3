<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/12/1
 * Time: 13:50
 */
?>
<html>
<head lang="en">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>
    <script src="./js/jquery-2.1.4.js"></script>
<!--    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <title>包河万达5周年庆</title>
    <script>
       function myfunction(){
           $(".chief_left").animate({left:"-300px"},2000);
           $(".chief_right").animate({right:"-300px"},2000);
       }
    </script>
</head>
<body onload="setTimeout('myfunction()',2000)">
<div class="wrap">
    <div class="chief chief_left">
        <img  src="./images/index_1.jpg" alt=""/>
    </div>
    <div class="chief chief_right">
        <img  src="./images/index_2.jpg" alt=""/>
    </div>
    <div class="container">
        <img class="bg-pic" src="./images/bg-pic.jpg" alt=""/>
    </div>
    <div class="thr_btn">
        <a href=""><img src="./images/get.jpg" alt=""/></a>
        <a href="./join.php"><img src="./images/join.jpg" alt=""/></a>
        <a href=""><img src="./images/rule.jpg" alt=""/></a>
    </div>


</div>
</body>
</html>