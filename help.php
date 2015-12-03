<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/12/1
 * Time: 22:21
 */
?>
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
<div id="d-mask" style="display:none"></div>                   <!--黑色透明背景-->
<div class="wrap">
    <div class="faceWrap" style="display: none">              <!--成功帮好友点蜡烛，弹出框-->
        <img src="./images/success.png" alt=""/>
        <p>恭喜您成功帮好友点燃蜡烛！</p>
    </div>

    <div class="ruleWrap" style="display:none">                                           <!--活动规则弹出框-->
        <img src="./images/rule_pic.jpg" alt=""/>
    </div>

    <div class="chief chief_left">                              <!--自动分开页面-->
        <img  src="./images/1212.png" alt=""/>
    </div>
    <div class="chief chief_right">
        <img  src="./images/123123.png" alt=""/>
    </div>

    <div class="container">
        <div class="candle candle_1" style="display:none">                                                     <!--第一根蜡烛亮-->
            <img src="images/candle.png" alt=""/>
        </div>
        <div class="candle candle_2" style="display: none">                                                    <!--第二根蜡烛亮-->
            <img src="images/candle.png" alt=""/>
        </div>
        <div class="candle candle_3" style="display: none">                                                    <!--第三根蜡烛亮-->
            <img src="images/candle.png" alt=""/>
        </div>
        <div class="candle candle_4" style="display: none">                                                    <!--第四根蜡烛亮-->
            <img src="images/candle.png" alt=""/>
        </div>
        <div class="candle candle_5" style="display: none">                                                    <!--第五根蜡烛亮-->
            <img src="images/candle.png" alt=""/>
        </div>
        <img class="bg-pic" src="./images/bg-pic3.jpg" alt=""/>
        <p class="skill">技术支持 : 安徽瀚滔网络</p>
    </div>
    <div class="thr_btn">
        <a href=""><img style="width:26%" src="./images/help.jpg" alt=""/></a>
        <a href="./index.php"><img src="./images/jointoo.jpg" alt=""/></a>
        <a href="javascript:rule()"><img src="./images/rule.jpg" alt=""/></a>
    </div>
</div>

<script>
    function rule(){
        $(".ruleWrap , #d-mask").css({display:"block"});
    }
    $(".faceWrap").click(function(){
        $(this).css({display:"none"});
        $("#d-mask").css({display:"none"});
    });
    $("#d-mask").click(function(){
        $(this).css({display:"none"});
        $(".faceWrap").css({display:"none"});
        $(".ruleWrap").css({display:"none"});
    })
    $(".ruleWrap").click(function(){
        $(this).css({display:"none"});
        $("#d-mask").css({display:"none"});
    })
</script>
</body>
</html>