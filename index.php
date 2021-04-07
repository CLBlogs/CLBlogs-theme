<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bootstrap3.4_virsion1</title>
    <?php
    $road = get_template_directory_uri();
    // echo $road;
    echo "<link rel=\"stylesheet\" href=\"$road/js/jquery-3.5.1.js\">";
    echo "<link rel=\"stylesheet\" href=\"$road/js/bootstrap.js\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/bootstrap.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-Clean.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-with-Search-1.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-with-Search.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/styles.css\">";
    ?>
</head>

<body>

<div id="wrapper" class="flow">
    <div id="top_nav" class="navbar border-none">
        <nav class="navbar navbar-default navigation-clean-search">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="#">CLBlogs</a>
                    <button data-toggle="collapse" class="navbar-toggle collapsed" data-target="#navcol-1"><span
                                class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li><a id="shouye" href="#">首页</a></li>
                        <li><a id="guidang" href="#">归档</a></li>
                        <li><a id="liuyan" href="#">留言</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" target="_self" style="margin-left: 100px;">
                        <div class="form-group"><label class="control-label" for="search-field"><i
                                        class="glyphicon glyphicon-search"></i></label><input
                                    class="form-control search-field" type="search" id="search-field" name="search">
                        </div>
                    </form>
                    <a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="#">搜索</a>
                </div>
            </div>
        </nav>
        <ul class="nav nav-tabs">
            <?php
             echo "<li><a id=\"denglu\" href=\"$road/login.php\">登录/注册</a></li>";
            ?>
        </ul>
    </div>
    <div id="main-contain" class="hero">
        <div id="main" class="main">
            <!--            <div id="side_left" class="side-left card-list side-bar">-->
            <!--                <div id="cnblog_b1" class="sidebar-image"></div>-->
            <!--                <div id="sidebar_bh" class="sidebar-bh"></div>-->
            <!--                <div class="card">-->
            <!--                    <h4 class="card-title"><a href="#">排行榜标题</a></h4>-->
            <!--                    <ul class="item-list">-->
            <!--                        <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>-->
            <!--                        <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>-->
            <!--                        <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>-->
            <!--                        <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div class="card">-->
            <!--                    <h4 class="card-title"><a href="#">排行榜标题</a></h4>-->
            <!--                    <ul class="item-list">-->
            <!--                        <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>-->
            <!--                        <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>-->
            <!--                        <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>-->
            <!--                        <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <div id="main-flow" class="main-flow" style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto; ">
                <div id="post-list" class="post-list">
                    <article id="post-item-1" class="post-item">
                        <section id="post-item-body-1" class="post-item-body">
                            <div id="post-item-text-1" class="post-item-text"><a class="post-item-title"
                                                                                 href="#">博客标题</a>
                                <p class="post-item-summary"><a
                                            href="#"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                        前面我们研究了RPC的原理，市面上有很多基于RPC思想实现的框架，比如有Dubbo。今天就从Dubbo的SPI机制、服务注册与发现源码及网络通信过程去深入剖析下Dubbo。
                                        Dubbo架构 概述 Dubbo是阿里巴巴公司开源的一个高性能优秀的服务框架，使得应用可通过高性能的RPC 实现服务<br></a></p>
                            </div>
                            <footer id="post-item-foot-1" class="post-item-foot"><a class="post-item-author"
                                                                                    href="#"><span><span
                                                style="text-decoration: underline;">author</span></span></a><span
                                        class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                        </section>
                    </article>
                    <article id="post-item-1" class="post-item">
                        <section id="post-item-body-1" class="post-item-body">
                            <div id="post-item-text-1" class="post-item-text"><a class="post-item-title"
                                                                                 href="#">博客标题</a>
                                <p class="post-item-summary"><a
                                            href="#"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                        前面我们研究了RPC的原理，市面上有很多基于RPC思想实现的框架，比如有Dubbo。今天就从Dubbo的SPI机制、服务注册与发现源码及网络通信过程去深入剖析下Dubbo。
                                        Dubbo架构 概述 Dubbo是阿里巴巴公司开源的一个高性能优秀的服务框架，使得应用可通过高性能的RPC 实现服务<br></a></p>
                            </div>
                            <footer id="post-item-foot-1" class="post-item-foot"><a class="post-item-author"
                                                                                    href="#"><span><span
                                                style="text-decoration: underline;">author</span></span></a><span
                                        class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                        </section>
                    </article>
                    <article id="post-item-1" class="post-item">
                        <section id="post-item-body-1" class="post-item-body">
                            <div id="post-item-text-1" class="post-item-text"><a class="post-item-title"
                                                                                 href="#">博客标题</a>
                                <p class="post-item-summary"><a
                                            href="#"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                        前面我们研究了RPC的原理，市面上有很多基于RPC思想实现的框架，比如有Dubbo。今天就从Dubbo的SPI机制、服务注册与发现源码及网络通信过程去深入剖析下Dubbo。
                                        Dubbo架构 概述 Dubbo是阿里巴巴公司开源的一个高性能优秀的服务框架，使得应用可通过高性能的RPC 实现服务<br></a></p>
                            </div>
                            <footer id="post-item-foot-1" class="post-item-foot"><a class="post-item-author"
                                                                                    href="#"><span><span
                                                style="text-decoration: underline;">author</span></span></a><span
                                        class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                        </section>
                    </article>
                    <article id="post-item-1" class="post-item">
                        <section id="post-item-body-1" class="post-item-body">
                            <div id="post-item-text-1" class="post-item-text"><a class="post-item-title"
                                                                                 href="#">博客标题</a>
                                <p class="post-item-summary"><a
                                            href="#"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                        前面我们研究了RPC的原理，市面上有很多基于RPC思想实现的框架，比如有Dubbo。今天就从Dubbo的SPI机制、服务注册与发现源码及网络通信过程去深入剖析下Dubbo。
                                        Dubbo架构 概述 Dubbo是阿里巴巴公司开源的一个高性能优秀的服务框架，使得应用可通过高性能的RPC 实现服务<br></a></p>
                            </div>
                            <footer id="post-item-foot-1" class="post-item-foot"><a class="post-item-author"
                                                                                    href="#"><span><span
                                                style="text-decoration: underline;">author</span></span></a><span
                                        class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a
                                        class="post-meta-iten" href="#"><i
                                            class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                        </section>
                    </article>
                </div>
            </div>
            <!--            <div id="side_right" class="side_right">-->
            <!--                <div class="list-box">-->
            <!--                    <div>-->
            <!--                        <div class="list-group">-->
            <!--                            <ul class="list-nav">-->
            <!--                                <li class="list-right-item"><a href="#">Java</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">Python</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">C/C++</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">数据库</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">JavaScript</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">HTML</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">CSS</a></li>-->
            <!--                                <li class="list-right-item"><a href="#">PHP</a></li>-->
            <!--                            </ul>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</div>
</body>
</html>
