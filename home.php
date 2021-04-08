<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=<? echo get_bloginfo('charset'); ?>" />
	<title><? bloginfo('name'); ?></title>
	<meta name="description" content="<? bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!--<meta charset="utf-8">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">-->
    <!--<title>bootstrap3.4_virsion1</title>-->
    <?php 
    $road=get_template_directory_uri();
   // echo $road;
    echo "<link rel=\"stylesheet\" href=\"$road/assets/bootstrap/css/bootstrap.min.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/assets/css/Navigation-Clean.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/assets/css/Navigation-with-Search-1.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/assets/css/Navigation-with-Search.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/assets/css/styles.css\">";
    ?>
    
</head>

<body>
  
    <div id="header">
		<div id="headerimg">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?>
			</div>
		</div>
	</div>
	
    <div id="wrapper" class="flow">
        <div id="top_nav" class="navbar border-none">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand" href="#">CLBlogs</a><button data-toggle="collapse" class="navbar-toggle collapsed" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li><a id="shouye" href="#">首页</a></li>
                            <li><a id="guidang" href="#">归档</a></li>
                            <li><a id="liuyan" href="#">留言</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" target="_self" style="margin-left: 100px;">
                            <div class="form-group"><label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form><a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="#">Action </a>
                    </div>
                </div>
            </nav>
            <ul class="nav nav-tabs">
                <li><a id="denglu" href="#">登录</a></li>
                <li><a id="zhuce" href="#">注册</a></li>
            </ul>
        </div>
        <div id="main-contain" class="hero">
            <div id="main" class="main">
                <div id="side_left" class="side-left card-list side-bar">
                    <div id="cnblog_b1" class="sidebar-image"></div>
                    <div id="sidebar_bh" class="sidebar-bh"></div>
                    <div class="card">
                        <h4 class="card-title"><a href="#">排行榜标题</a></h4>
                        <ul class="item-list">
                            <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>
                            <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>
                            <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>
                            <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h4 class="card-title"><a href="#">排行榜标题</a></h4>
                        <ul class="item-list">
                            <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>
                            <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>
                            <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>
                            <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>
                        </ul>
                    </div>
                </div>
	            <div id="main-flow" class="main-flow">
                    <div id="post-list" class="post-list">
                                <div id="home-loop">
                                    <?
                                        if( have_posts() )
                                        {
                                            while( have_posts() )
                                            {
                                                
                                                //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                                                the_post();
                                                ?>
                                                <div class="post-item">
                                                    <div class="post-title">
                                                        <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a><h2>
                                                    </div>
                                                    
                                                    <div class="post-content"><img class="avatar" src="http://139.196.175.60/wp-content/themes/Clblogs_theme_home/assets/img/photo_test.png"><? the_content(); ?>
                                                    </div>
                                                    <footer id="post-item-foot-2" class="post-item-foot"><a class="post-item-author" href="#"><span><span style="text-decoration: underline;">author</span></span></a><span class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                                                </div>
                                                <?
                                            }
                                        }
                                        else
                                        {
                                            echo '没有日志可以显示';
                                        }
                                    ?>
                                    
                                </div>
                            
                        
                        <article id="post-item-5" class="post-item">
                            <section id="post-item-body-5" class="post-item-body">
                                <div id="post-item-text-5" class="post-item-text"><a class="post-item-title" href="#">Text一把</a>
                                    <p class="post-item-summary"><a href="#"><img class="avatar" src="http://139.196.175.60/wp-content/themes/Clblogs_theme_home/assets/img/photo_test.png">前面我们研究了RPC的原理，市面上有很多基于RPC思想实现的框架，比如有Dubbo。今天就从Dubbo的SPI机制、服务注册与发现源码及网络通信过程去深入剖析下Dubbo。 Dubbo架构 概述 Dubbo是阿里巴巴公司开源的一个高性能优秀的服务框架，使得应用可通过高性能的RPC 实现服务<br></a></p>
                                </div>
                                <footer id="post-item-foot-5" class="post-item-foot"><a class="post-item-author" href="#"><span><span style="text-decoration: underline;">author</span></span></a><span class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                            </section>
                        </article>
                    </div>
                </div>
               
                                <footer id="post-item-foot-5" class="post-item-foot"><a class="post-item-author" href="#"><span><span style="text-decoration: underline;">author</span></span></a><span class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                            </section>
                        </article>
                    </div>
                </div>
                <div id="side_right" class="side_right">
                    <div class="list-box">
                        <div>
                            <div class="list-group">
                                <ul class="list-nav">
                                    <li class="list-right-item"><a href="#">Java</a></li>
                                    <li class="list-right-item"><a href="#">Python</a></li>
                                    <li class="list-right-item"><a href="#">C/C++</a></li>
                                    <li class="list-right-item"><a href="#">数据库</a></li>
                                    <li class="list-right-item"><a href="#">JavaScript</a></li>
                                    <li class="list-right-item"><a href="#">HTML</a></li>
                                    <li class="list-right-item"><a href="#">CSS</a></li>
                                    <li class="list-right-item"><a href="#">PHP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://139.196.175.60/wp-content/themes/Clblogs_theme_home/assets/js/jquery.min.js"></script>
    <script src="http://139.196.175.60/wp-content/themes/Clblogs_theme_home/assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>
