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
        $(document).ready(function(){
                window.scrollTo(0,300);
        })
    </script>

    <script>
       function myfunction(){
           $(".chief_left").animate({left:"-300px"},2000);
           $(".chief_right").animate({right:"-300px"},2000);
       }
    </script>
    <style>
        @media screen and (min-width: 320px){.huochai{top:340px;}}
        @media screen and (min-width: 360px){.huochai{top:387px;}}
        @media screen and (min-width: 375px){.huochai{top:404px;}}
        @media screen and (min-width: 384px){.huochai{top:415px;}}
        @media screen and (min-width: 414px){.huochai{top:450px;}}

            .huochai img{
                margin-top: 30px;margin-right: 30px;
                animation:myfirst 2s infinite linear;
                -webkit-animation:myfirst 2s infinite linear;  Safari and Chrome
            }
            @keyframes myfirst
            {
                0% {margin-top: 30px;margin-right: 30px}
                50% {margin-top: 54px;margin-right: -10px}
                100%{margin-top:30px;margin-right: 30px;}
            }
            @-webkit-keyframes myfirst  Safari and Chrome
            {
                0% {margin-top: 30px;margin-right: 30px}
                50% {margin-top: 55px;margin-right: -10px}
                100%{margin-top:30px;margin-right: 30px;}
            }


    </style>
</head>
<body onload="setTimeout('myfunction()',2000)">
<div id="d-mask" style="display:none"></div>                   <!--黑色透明背景-->
<div class="wrap">
    <div class="chief chief_left">
        <img  src="./images/1212.png" alt=""/>
    </div>
    <div class="chief chief_right">
        <img  src="./images/123123.png" alt=""/>
    </div>
    <div class="container">
        <img class="bg-pic" src="./images/bg-pic111.jpg" alt=""/>
        <div class="huochai" style="position: absolute;;width: 100%;text-align: right">
            <img style="width: 23%;margin-top: 30px;margin-right: 30px;" src="images/huochai1.png" alt=""/>
        </div>

        <p class="skill">技术支持 : 安徽瀚滔网络</p>
    </div>
    <div class="thr_btn">
        <a href=""><img src="./images/get.jpg" alt=""/></a>
        <a href="./join.php"><img src="./images/join.jpg" alt=""/></a>
        <a href="javascript:rule()"><img src="./images/rule.jpg" alt=""/></a>
    </div>
    <div class="ruleWrap" style="display:none">                                           <!--规则弹出框-->
        <img src="./images/rule_pic.jpg" alt=""/>
    </div>

    <script>
        function rule(){
            $(".ruleWrap , #d-mask").css({display:"block"});
        }

            $("#d-mask").click(function(){
                $(this).css({display:"none"});
                $(".ruleWrap").css({display:"none"});
            });
            $(".ruleWrap").click(function(){
                $(this).css({display:"none"});
                $("#d-mask").css({display:"none"});
            })
    </script>

</div>
</body>
</html>