<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/12/1
 * Time: 21:01
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

</head>
<body>
<div id="d-mask" style="display:none"></div>                   <!--黑色透明背景-->
<div class="wrap">
    <div class="shareWrap" style="display: none">              <!--分享给朋友。弹出框-->
        <img src="./images/share.png" alt=""/>
    </div>

    <div class="ruleWrap" style="display:none">                                           <!--活动规则弹出框-->
        <img src="./images/rule_pic.jpg" alt=""/>
    </div>

    <div class="winningWrap" style="display:none">                                   <!-- 恭喜中奖，弹出框-->
        <img src="./images/winning.jpg" alt=""/>
        <div class="btnWrap">
            <a href="javascript:clickGet()"><img src="./images/clickGet.png" alt=""/></a>
        </div>
    </div>
    <div class="infoWrap" style="display:none">                                             <!--联系方式。弹出框-->
        <img class="info_bg" src="./images/info_bg.png" alt=""/>
        <div class="info">
            <form action="" id="info_form">
                <input type="text" name="name" placeholder="姓名:"/>
                <input type="text" name="number" placeholder="电话:"/>
                <input style="display:none" type="text" name="place_name"/>
                <p class="choose_head">---请选择---</p>
                 <ul class="place_row">
                     <li class="row">合肥包河万达广场</li>
                     <li class="row">合肥天鹅湖万达广场</li>
                     <li class="row">芜湖万达广场</li>
                     <li class="row">蚌埠万达广场</li>
                     <li class="row">马鞍山万达广场</li>
                     <li class="row">阜阳万达广场</li>
                 </ul>
                <a href="javascript:sureBtn()"><img class="sureBtn" src="./images/sure.png" alt=""/></a>
            </form>
        </div>
    </div>

    <div class="faceWrap" style="display: none">                                                              <!--券被领完，弹出框-->
        <img src="./images/not_enough.png" alt=""/>
        <p>来晚了，券被领完了！</p>
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
        <img class="bg-pic" src="./images/bg-pic4.jpg" alt=""/>
        <p class="skill">技术支持 : 安徽瀚滔网络</p>
    </div>
    <div class="thr_btn">
        <a href=""><img src="./images/get.jpg" alt=""/></a>
        <a href="javascript:Invitation()"><img style="width:26%" src="./images/Invitation.jpg" alt=""/></a>
        <a href="javascript:rule()"><img src="./images/rule.jpg" alt=""/></a>
    </div>
</div>
</body>
<script>
    function rule(){
        $(".ruleWrap , #d-mask").css({display:"block"});
    }
</script>
<script>
    function clickGet(){
        $(".winningWrap").css({display:"none"});
        $(".infoWrap , #d-mask").css({display:"block"});
    }
</script>
<script>
    $(document).ready(function(){
        $(".place_row .row").click(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            var place = $(this).html();
            $('input[name=place_name]').val(place);
        });
        $(".faceWrap").click(function(){
            $(this).css({display:"none"});
            $("#d-mask").css({display:"none"});
        });
    })
</script>
<script>
    function sureBtn(){
        $("#info_form").submit();                     //确定按钮提交
    }
    function Invitation(){
        $(".shareWrap ,#d-mask").css({display:"block"});
    }
    $(document).ready(function(){
        $(".shareWrap").click(function(){
            $(this).css({display:"none"});
            $("#d-mask").css({display:"none"});
        });
        $("#d-mask").click(function(){
            $(this).css({display:"none"});
            $(".shareWrap").css({display:"none"});
            $(".faceWrap").css({display:"none"});
            $(".ruleWrap").css({display:"none"});
        })
        $(".ruleWrap").click(function(){
            $(this).css({display:"none"});
            $("#d-mask").css({display:"none"});
        })
    })
</script>
</html>