<?php
// create curl resource

$text=file_get_contents('http://t.52580.co/');
//去除换行及空白字元（序列化内容才需使用）
//$text=str_replace(array("r","n","t","s"), '', $text);
//取出div且id为PostContent的内容，并储存至阵列match
$regex4="/<div class=\"game-rec\".*?>.*?<\/div>/ism";
preg_match_all($regex4,$text,$match);


//印出match[0]
//$table = $match;
//print_r($match);
//exit();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>沈万发盘王推荐</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link href="./css/style(1).css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-1.11.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/global.js" charset="utf-8"></script>
</head>
<body><style>
    .daohang a{
        display:inline-block;
        height:54px;
        line-height:54px;
        color:#fff;
        font-size:18px;
        padding:0 40px
    }
    .daohang :hover
    {
        background-color:#0476E9;
    }
    .navul li{
        float: left;
        position: relative;
    }
    .navul li:after{
        position:absolute;
        content:'';
        width:1px;
        height:32px;
        background-color: #1F650F;
        top:0;
        bottom:0;
        right:0;
        margin:auto;
    }
    .navul li:nth-child(4n):after{
        display:none;
    }
    .navul li a{
        display: block;
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        padding: 14px 64px;
    }
    .clearfloat{
        clear:both;
    }
</style>

<img src="/views/swtj/imgs/ico-qq.gif?v2">
<div class="ppall">
    <div class="num">
        <!--<a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858" class="num-q">5313858</a>-->
        <!--<a class="num-w">laofa8899</a>-->
    </div>

    <div style="text-align:center;background-color:#135104;width:998px;margin:243px auto 0;">
        <ul class="navul">
        </ul>
    </div>
    <div class="web-nav">
        <a href="list-zuqiutuijie.php"><img src="./image/intizq.jpg"></a>
    </div>
    <?php
     echo str_replace('views/swtj/imgs','image',$match[0][0]);
    ?>
    <div class="web-nav">
        <a href="list-lanqiutuijie.php"><img src="./image/intilq.jpg"></a>
    </div>
    <?php
    echo str_replace('views/swtj/imgs','image',$match[0][1]);
    ?>

    <!--
    <div class="web-nav" style="margin-top:30px;">
        <a href="./list-liuhetuijian.html"><img src="/views/swtj/imgs/intihk.jpg" /></a>
    </div>
    <div class="game-rec">
        <div id="showSix">
        <table>
            <thead>
                <tr>
                    <th nowrap="">期数</th>
                    <th>内幕资料(长跟必赢)</th>
                    <th nowrap="">必中生肖（十拿九稳）</th>
                    <th nowrap="">平特肖尾</th>
                    <th>老发推荐</th>
                </tr>
            </thead>
            <tbody>
                            <tr>
                    <td style="font-size:16px;">008期</td>
                    <td><span style="font-size:16px;">单双中特：【单数+鸡牛】</span><br />
    <span style="font-size:16px;">野兽家畜：【家禽+龙虎】</span><br />
    <span style="font-size:16px;">精选波色：【红波+緑波】</span><br /></td>
                    <td><span style="font-size:16px;">九肖中特：马虎鸡牛龙狗猴兔蛇</span><br />
    <span style="font-size:16px;">七肖中特：马虎鸡牛龙狗猴</span><br />
    <span style="font-size:16px;">稳中六肖：马虎鸡牛龙狗</span><br />
    <span style="font-size:16px;">四肖中特：马虎鸡牛</span><br /></td>
                    <td><span style="font-size:16px;">平特推荐:马肖+5尾</span><br />
    <span style="font-size:16px;">推荐号：</span><span style="font-size:16px;">27.39.31.43.36.48.32.44</span><br />
    <span style="font-size:16px;">开奖结果：？.？.？.？.？.？特？&lt;？&gt;</span><br /></td>
                    <td><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858"><img src="/views/swtj/imgs/ico-qq.gif?v2"></a></td>
                </tr>
                            <tr>
                    <td style="font-size:16px;">007期</td>
                    <td><span style="font-size:16px;">单双中特：【<span style="background-color:#FFE500;">单数</span>+蛇猪】</span><br />
    <span style="font-size:16px;">野兽家畜：【<span style="background-color:#FFE500;">野兽</span>+马狗】</span><br />
    <span style="font-size:16px;">精选波色：【红波+蓝波】</span><br />
    <br /></td>
                    <td><span style="font-size:16px;">九肖中特：</span><span style="font-size:16px;">虎龙猴马<span style="background-color:#FFE500;">鼠</span>蛇猪鸡狗</span><br />
    <span style="font-size:16px;">七肖中特：</span><span style="font-size:16px;">虎龙猴马<span style="background-color:#FFE500;">鼠</span>蛇猪</span><span style="font-size:16px;"></span><br />
    <span style="font-size:16px;">稳中六肖：</span><span style="font-size:16px;">虎龙猴马<span style="background-color:#FFE500;">鼠</span>蛇</span><span style="font-size:16px;"></span><br />
    <span style="font-size:16px;">四肖中特：</span><span style="font-size:16px;">虎龙猴马</span><span style="font-size:16px;"></span><br /></td>
                    <td><span style="font-size:16px;">平特推荐:虎肖+1尾</span><br />
    <span style="font-size:16px;">推荐号：</span><span style="font-size:16px;">31.43.35.47.29.41.37.49</span><br />
    <span style="font-size:16px;">开奖结果：42.47.27.26.28.36特33&lt;鼠&gt;</span><br />
    <span style="font-size:16px;"></span><br /></td>
                    <td><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858"><img src="/views/swtj/imgs/ico-qq.gif?v2"></a></td>
                </tr>
                            <tr>
                    <td style="font-size:16px;">006期</td>
                    <td><span style="font-size:16px;">单双中特：【双数+<span style="background-color:#FFE500;">狗</span>猴】</span><br />
    <span style="font-size:16px;">野兽家畜：【<span style="background-color:#FFE500;">家禽</span>+马龙】</span><br />
    <span style="font-size:16px;">精选波色：【<span style="background-color:#FFE500;">红波</span>+蓝波】</span><br /></td>
                    <td><span style="font-size:16px;">九肖中特：鸡<span style="background-color:#FFE500;">狗</span>牛马猴羊鼠猪兔</span><br />
    <span style="font-size:16px;">七肖中特：鸡<span style="background-color:#FFE500;">狗</span>牛马猴羊鼠</span><br />
    <span style="font-size:16px;">稳中六肖：鸡<span style="background-color:#FFE500;">狗</span>牛马猴羊</span><br />
    <span style="font-size:16px;">四肖中特：鸡<span style="background-color:#FFE500;">狗</span>牛马</span><br /></td>
                    <td><span style="font-size:16px;">平特推荐:鸡肖+<span style="background-color:#FFE500;">2</span>尾</span><br />
    <span style="font-size:16px;">推荐号：12.18.24.06.11.23.08.20</span><br />
    <span style="font-size:16px;">开奖结果：44.22.37.48.06.01.特35&lt;狗&gt;</span><br /></td>
                    <td><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858"><img src="/views/swtj/imgs/ico-qq.gif?v2"></a></td>
                </tr>
                            <tr>
                    <td style="font-size:16px;">005期</td>
                    <td><span style="font-size:16px;">单双中特：【<span style="background-color:#FFE500;">双数</span>+狗猴】</span><br />
    <span style="font-size:16px;">野兽家畜：【<span style="background-color:#FFE500;">家禽</span>+<span style="background-color:#FFE500;">兔</span>鸡】</span><br />
    <span style="font-size:16px;">精选波色：【红波+<span style="background-color:#FFE500;">緑波</span>】</span><br />
    <span style="font-size:16px;"></span><br /></td>
                    <td><span style="font-size:16px;">九肖中特：<span style="background-color:#FFE500;">兔</span>鸡狗羊牛猪猴马龙</span><br />
    <span style="font-size:16px;">七肖中特：<span style="background-color:#FFE500;">兔</span>鸡狗羊牛猪猴</span><br />
    <span style="font-size:16px;">稳中六肖：<span style="background-color:#FFE500;">兔</span>鸡狗羊牛猪</span><br />
    <span style="font-size:16px;">四肖中特：<span style="background-color:#FFE500;">兔</span>鸡狗羊</span><br />
    <br /></td>
                    <td><br />
    <span style="font-size:16px;">平特推荐:<span style="background-color:#FFE500;">兔肖</span>+<span style="background-color:#FFE500;">6尾</span></span><br />
    <span style="font-size:16px;">推荐号：<span style="background-color:#FFE500;">06</span>.18.12.48.11.47.02.14</span><br />
    <span style="font-size:16px;">开奖结果：43.30.27.40.18.25特06&lt;兔&gt;</span><br /></td>
                    <td><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858"><img src="/views/swtj/imgs/ico-qq.gif?v2"></a></td>
                </tr>
                            <tr>
                    <td style="font-size:16px;">004期</td>
                    <td><span style="font-size:16px;">单双中特：【单数+羊<span style="background-color:#FFE500;">鸡</span>】</span><br />
    <span style="font-size:16px;">野兽家畜：【野兽+马狗】</span><br />
    <span style="font-size:16px;">精选波色：【<span style="background-color:#FFE500;">红波</span>+蓝波】<span style="background-color:#FFE500;"><span style="background-color:#FF9900;"><span style="background-color:#FFE500;"></span></span></span></span><br /></td>
                    <td><span style="font-size:16px;">九肖中特：猴鼠狗龙虎马羊<span style="background-color:#FFE500;">鸡</span>蛇</span><br />
    <span style="font-size:16px;">七肖中特：猴鼠狗龙虎马羊</span><br />
    <span style="font-size:16px;">稳中六肖：猴鼠狗龙虎马</span><br />
    <span style="font-size:16px;">四肖中特：猴鼠狗龙</span><br /></td>
                    <td><span style="font-size:16px;">平特推荐:龙肖+7尾</span><br />
    <span style="font-size:16px;">推荐号：25.37.33.45.35.47.<span style="background-color:#FFE500;">07</span>.41</span><br />
    <span style="font-size:16px;">开奖结果：26.14.02.39.07.38特12&lt;鸡&gt;</span><br /></td>
                    <td><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=5313858"><img src="/views/swtj/imgs/ico-qq.gif?v2"></a></td>
                </tr>
                        </tbody>
            <tbody>
            </tbody>
        </table>
        </div>
    </div>
    -->
    <div class="ppnnn" style="padding-bottom:150px">
        <p class="ppnnn_p"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=5313858&amp;site=qq&amp;menu=yes" target="_blank">5313858</a></p>
    </div>
</div>


<div class="box">
    <div class="adbox">

        <style>
            #shadowhide1 {
                background: rgba(0, 0, 0, .6);
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
            }

            .tankuang1 {
                padding: 1%;
                min-height: 10.5rem;
                background: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translateX(-50%);
                margin-top: -2.5rem;
                border-radius: .5rem;
            }
            @media screen and (max-width:500px){
                .tankuang1{
                    width: 90%;
                    top: 30%;
                }
            }
            .tankuang1 a {
                text-decoration: none;
                color: #000;
            }

            .tankuang1 .openwx {
                text-align: center;
                padding: .125rem;
                width: 7.5rem;
                height: 1rem;
                background: #ff6b6b;
                line-height: 1.05rem;
                font-size: .65rem;
                color: #fff;
                margin: 0 auto;
            }

            .close1 {
                width: .95rem;
                height: .95rem;
                position: absolute;
                right: .125rem;
                top: .125rem;
                cursor: pointer;
            }
            .niucenter {
                display: inline-block;
                vertical-align: top;
                text-align: center;
            }
        </style>
        <div>
            <div id="shadowhide1" style="display:none">
                <div class="tankuang1">
                    <img src="./index_files/UTB8XtVYdYPJXKJkSafS761qUXXaN.png" alt="" class="close1" onclick="hidetext1()">
                    <div style="display:inline-block">
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">&nbsp; &nbsp; &nbsp; &nbsp;老发推荐</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
	<span style="font-size:24px;"><br>
</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">&nbsp; &nbsp; &nbsp;波胆-串球-足蓝&nbsp;</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
	<span style="font-size:24px;"><br>
</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">&nbsp; &nbsp;扫码免费获取红单推荐 &nbsp;</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
	<span style="font-size:24px;"><br>
</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">&nbsp; 或编辑短信88发送 15549360651&nbsp;</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
	<span style="font-size:24px;"><br>
</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">&nbsp; &nbsp; &nbsp; 永久免费领取</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
	<span style="font-size:24px;"><br>
</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;">每个人的成功只有三个字--试一试</span>
                        </p>
                        <p style="font-size:14px;background-color:#FFFFFF;font-family:sans-serif;">
                            <span style="font-size:24px;"><span style="color:#FF0000;"></span></span>
                        </p>                         </div>
                    <div class="niucenter">
                        <img src="./index_files/3.jpg" alt="" style="vertical-align: top;margin-left: 10px;width:251px;height:250px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        var duilian = $("div.duilian");
        var duilian_close = $("a.duilian_close");
        var window_w = $(window).width();
        if (window_w > 1000) {
            duilian.show()
        }
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            duilian.stop().animate({
                top: scrollTop + 100
            })
        });
        duilian_close.click(function() {
            $(this).parent().hide();
            return false
        })
        var daojishileft = $('.web-nav').offset().left*1+257+'px';
        $('.daojishi').css('left',daojishileft)
    });
</script>
<style>
    .duilian{top:150px;position:absolute; width:120px; overflow:hidden;}
    .duilian_left{ left:6px;}
    .duilian_right{right:6px;}
    .duilian_con{ width:120px; height:180px; overflow:hidden;}
    .duilian_close{ width:100%; height:24px; line-height:24px; text-align:center; display:block; font-size:13px; color:#555555; text-decoration:none;}
</style>

<div class="duilian duilian_left" style="top: 700px;">
    <div class="duilian_con"><a href="" target="_blank"><img src="./index_files/tuijian.png" width="100%"></a></div>
    <a href="http://t.52580.co/#" class="duilian_close">X关闭</a>
</div>
<div class="duilian duilian_right" style="top: 700px;">
    <div class="duilian_con"><a href="" target="_blank"><img src="./index_files/tuijian.png" width="100%"></a></div>
    <a href="http://t.52580.co/#" class="duilian_close">X关闭</a>
</div>


<span style="display:none">
<script src="./index_files/z_stat.php" language="JavaScript"></script><script src="./index_files/core.php" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=1274999921" target="_blank" title="站长统计">站长统计</a>
</span>


</body></html>