<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>闪电物流</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/asset/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/asset/home/css/site.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        body{
            font-family: 'myriadsetpro-semiboldsemibold';
        }
    </style>

</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">闪电物流</a>
        </div>
        <nav id="bs-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="#" >首页</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

    <div class="container-fulid">
        <div class="Slide">
            <div class="container">
                <div style="margin-top: 0px;">
                    <img src="/Public/asset/home/image/bg6.jpg">
                </div>
                <a href="#mm_downloads">
                    <div class="download-down">
                        <i class="banner-down"></i>
                        <span>立即下载</span>
                    </div>
                </a>
                <div class="download-btn">
                    <i class="banner-btn"></i>
                    <span>会员中心</span>
                </div>

                <div class="download-btn-link">
                    <i class="banner-btn-link"></i>
                    <span>广告投放</span>
                </div>
            </div>
        </div>
    </div>



    <div class="container projects">
        <div class="row">
            <div class="col-xs-10 col-sm-12" style="text-align:center;margin-top:150px;">
                <h2>根据你的手机，选择下载</h2>
            </div>

            <div class="down">
                <div class="col-sm-6 col-md-4 downlod-iphone mouse">
                    <a href="">
                        <i class="icon"></i>
                        <p class="download-iphone-text">iPhone</p>
                    </a>
                </div>
            </div>
            <div class="dowm">
                <a href="http://www.lianshiding.com/client/downlond.php">
                <div class="col-sm-6 col-md-4 downlod-androud mouse">
                    <i class="icom"></i>
                    <p class="download-androud-text">Android</p>
                </div>
                </a>
            </div>
            <div id="mm_downloads"  class="col-sm-6 col-md-4 downlod-code mouse">
                <img src="/Public/asset/home/image/code1.png">
            </div>

        </div>
    </div>

    <div class="container" style="margin-top:150px;">

    </div>
    <footer class="footer">
        <div class="container" style="margin-bottom:20px;">
            <hr>
            <div class="row footer-bottom">
                <ul class="list-inline text-center">
                    <li><a href="#" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="/Public/asset/home/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/Public/asset/home/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(".down").mousemove(function(){
            $(".downlod-iphone").css("background-color", "#1879ef");
            $(".icon").css("background","url({{ asset('assets/home/image/icon.png') }}) 0 -110px no-repeat");
            $(".download-iphone-text").css("color","white");
        }).mouseout(function(){
            $(".downlod-iphone").css("background-color", "white");
            $(".icon").css("background","url({{ asset('assets/home/image/icon.png') }}) 0 0 no-repeat");
            $(".download-iphone-text").css("color","#8c8a8c");
        });

        $(".dowm").mousemove(function(){
            $(".downlod-androud").css("background-color", "#1879ef");
            $(".icom").css("background","url({{ asset('assets/home/image/icon.png') }}) -77px -111px no-repeat");
            $(".download-androud-text").css("color","white");
        }).mouseout(function(){
            $(".downlod-androud").css("background-color", "white");
            $(".icom").css("background","url({{ asset('assets/home/image/icon.png') }}) -77px 0 no-repeat");
            $(".download-androud-text").css("color","#8c8a8c");
        });


        $(".download-btn").click(function(){
            alert("暂未开通");
        });
        $(".download-btn-link").click(function(){
            alert("暂未开通");
        });
    });
</script>
</body>
</html>