<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/12/10
 * Time: 0:05
 */
?>
<html>
<head>
    <meta charset="utf-8"/>
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
        $(document).ready(function(){
            window.scrollTo(0,300);
        })
    </script>
    <style>
        .button_box , .info_box{position: absolute;}
        .button_box{bottom:50px;width: 100%;text-align: center}
        .button_box img{width: 50%}
        .info_box{width:100%;text-align: center;bottom: 300px; }
        .info_box p{font-size: 40px;color:#fff;line-height: 70px}
        @media screen and (min-width: 320px) {.button_box{bottom:35px;} .info_box p{font-size: 15px;line-height: 25px}.info_box{bottom: 190px;} }
        @media screen and (min-width: 360px) {.button_box{bottom:35px;} .info_box p{font-size: 16px;line-height: 25px}.info_box{bottom: 215px;} }
        @media screen and (min-width: 375px) {.button_box{bottom:35px;} .info_box p{font-size: 16px;line-height: 25px}.info_box{bottom: 225px;} }
        @media screen and (min-width: 384px) {.button_box{bottom:35px;} .info_box p{font-size: 17px;line-height: 30px}.info_box{bottom: 230px;} }
        @media screen and (min-width: 414px) {.button_box{bottom:45px;} .info_box p{font-size: 20px;line-height: 30px}.info_box{bottom: 250px;} }
        @media screen and (min-width: 600px) {.button_box{bottom:50px;} .info_box p{font-size: 30px;line-height: 45px}.info_box{bottom: 360px;} }

    </style>
</head>
<div class="wrap">
    <div class="container" style="position: relative">
<!--        <img style="width:100%"src="./images/success1.jpg" alt=""/>-->
        <img style="width:100%;display: none" src="./images/tianehu.jpg" alt=""/>
        <img style="width:100%;display: block" src="./images/baohe.jpg" alt=""/>
        <img style="width:100%;display: none" src="./images/maanshan.jpg" alt=""/>
        <img style="width:100%;display: none" src="./images/fuyang.jpg" alt=""/>
        <img style="width:100%;display: none" src="./images/bengbu.jpg" alt=""/>
        <img style="width:100%;display: none" src="./images/wuhu.jpg" alt=""/>
        <div class="info_box">
            <p>姓名</p>
            <p>电话</p>
        </div>
<!--        <div class="button_box">-->
<!--            <a href=""><img src="./images/sure.png" alt=""/></a>-->
<!--        </div>-->
    </div>
    <p class="skill">技术支持 : 安徽瀚滔网络</p>
    
</div>
</html>