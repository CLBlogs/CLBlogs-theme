<!DOCTYPE html>
<html lang="en">

<head><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CLBlogs</title>
    <?php
    $road = get_template_directory_uri();
    echo "<link rel=\"application/javascript\" href=\"$road/js/jquery.min.js\">";
    echo "<link rel=\"application/javascript\" href=\"$road/js/bootstrap.min.js\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/bootstrap.min.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-Clean.css\">";
    echo "<link rel=\"stylesheet\" href=\"$road/css/styles.css\">";
    ?>
</head>

<body>
    <div id="wrapper" class="flow">
        <div id="top_nav" class="navbar border-none">
            <nav class="navbar navbar-default navigation-clean">
                <div class="container">
                    <div id="navcol-1" class="collapse navbar-collapse"><a class="navbar-brand" href="#">CLBlog</a>
                        <ul class="nav navbar-nav">
                            <li class="active"><a id="shouye" class="top_nav_link" href="#">首页</a></li>
                            <!-- <li class="active"><a id="guidang" class="top_nav_link" href="#">归档</a></li>
                            <li class="active"><a id="liuyan" class="top_nav_link" href="#">留言</a></li> -->
                        </ul>
                        <ul class="nav navbar-nav" id="top-navbar-right">
                        <?php get_search_form(); ?>
                            <!-- <li>
                                <form class="navbar-form" id="navbar_search"><input class="form-control" type="text" id="top-input">
                                    <div><button class="btn btn-default" id="search-botton" type="button"><i class="glyphicon glyphicon-search"></i></button></div>
                                </form>
                            </li> -->
                            <?php
                            echo "<li class=\"active\"><a id=\"denglu\" class=\"top_nav_link\" href=\"$road/login.php\">登录/注册</a></li>";
                            ?>
                            <!-- <li class="active" style="display: none;"><a id="denglu" class="top_nav_link" href="#">登录</a></li>
                            <li class="active" style="display: none;"><a id="zhuce" class="top_nav_link" href="#">注册</a></li>
                            <li class="active" style="/*display: none;*/"><a class="dropdown-button" href="#"><img id="user_icon" class="navbar-avatar" src="assets/img/photo_test.png">昵称</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="main-contain" class="hero">
            <div id="main" class="main">
                <!-- <div id="side_left" class="side-left card-list side-bar">
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
                </div> -->
                <div id="main-flow" class="main-flow" style="MARGIN-RIGHT: auto; MARGIN-LEFT: auto; ">
                    <div id="post-list" class="post-list">
                        <?php
                    if (have_posts()) {
                        while (have_posts()) {

                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();

                            ?>
                        <article id="post-item" class="post-item">
                            <section id="post-item-body" class="post-item-body">
                                <div id="post-item-text" class="post-item-text">
                                    <!-- <a class="post-item-title" -->
                                    <!-- href="--><?php //$author=the_author(); echo "$road/single.php?user=".$author; ?><!--">--><?// the_title(); ?><!--</a>-->
                                        <a class="post-item-title"
                                            href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                        
                                        <p class="post-item-summary">
                                            <a href="<?php echo the_permalink()/*."?author=".the_author()*/; ?>"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                                <? the_excerpt(); ?>
                                                <br>
                                            </a>
                                        </p>
                                </div>
                                <footer id="post-item-foot" class="post-item-foot">
                                    <!--                                        --><?php
                                    //                                        $author = the_author();
                                    //                                        echo "<a class=\"post-item-author\" href=\"$road/mineblog.php?author=$author\">$author</a>";
                                    //                                        ?>
                                        <span class="post-meta-item"><? the_date(); ?></span>
                                    <!-- <a class="post-item-author" href="#">
                                        <span>author</span>
                                    </a>
                                    <span class="post-meta-item">time</span>
                                    <a class="post-meta-iten" href="#">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                        <span>Text</span>
                                    </a>
                                    <a class="post-meta-iten" href="#">
                                        <i class="glyphicon glyphicon-star"></i>
                                        <span>Text</span>
                                    </a>
                                    <a class="post-meta-iten" href="#">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <span>Text</span>
                                    </a> -->
                                </footer>
                            </section>
                        </article>
                        <?
                        }
                    } else {
                        echo '没有文章可以显示';
                    }
                    ?>
                    </div>
                </div>
                <!-- <div id="side_right" class="side_right">
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
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CLBlogs</title>
    <?php
    $road = get_template_directory_uri();
    echo "<link rel=\"application/javascript\" href=\"$road/js/jquery-3.5.1.js\">";
    echo "<link rel=\"application/javascript\" href=\"$road/js/bootstrap.js\">";
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
                <div class="navbar-header"><a class="navbar-brand" href="/">CLBlogs</a>
                    <button data-toggle="collapse" class="navbar-toggle collapsed" data-target="#navcol-1"><span
                                class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li><a id="shouye" href="/">首页</a></li>
<!--                        <li><a id="guidang" href="#">归档</a></li>-->
<!--                        <li><a id="liuyan" href="#">留言</a></li>-->
                        <!--                        <li>--><?php //get_search_form(); ?><!--</li>-->
                    </ul>
                    <?php get_search_form(); ?>
                    <!--                    <form class="navbar-form navbar-left" target="_self" style="margin-left: 100px;">-->
                    <!--                        <div class="form-group">-->
                    <!--                            <label class="control-label" for="search-field">-->
                    <!--                                <i class="glyphicon glyphicon-search"></i>-->
                    <!--                            </label>-->
                    <!--                            <input class="form-control search-field" type="search" id="search-field" name="search">-->
                    <!--                        </div>-->
                    <!--                    </form>-->
                    <!--                    <a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="#">搜索</a>-->

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
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {

                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();

                            ?>
                            <article id="post-item-1" class="post-item">
                                <section id="post-item-body-1" class="post-item-body">
                                    <div id="post-item-text-1" class="post-item-text">
<!--                                        <a class="post-item-title"-->
<!--                                           href="--><?php //$author=the_author(); echo "$road/single.php?user=".$author; ?><!--">--><?// the_title(); ?><!--</a>-->
                                        <a class="post-item-title"
                                           href="<? the_permalink(); ?>"><? the_title(); ?></a>

                                        <p class="post-item-summary">
                                            <a href="<?php echo the_permalink()/*."?author=".the_author()*/; ?>"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                                <? the_excerpt(); ?>
                                                <br>
                                            </a>
                                        </p>
                                    </div>
                                    <footer id="post-item-foot-1" class="post-item-foot">
                                        <!--                                        --><?php
                                        //                                        $author = the_author();
                                        //                                        echo "<a class=\"post-item-author\" href=\"$road/mineblog.php?author=$author\">$author</a>";
                                        //                                        ?>
                                        <span class="post-meta-item"><? the_date(); ?></span>
                                        <!--                                        <a class="post-meta-iten" href="#">-->
                                        <!--                                            <i class="glyphicon glyphicon-thumbs-up"></i>-->
                                        <!--                                            <span>Text</span>-->
                                        <!--                                        </a>-->
                                        <!--                                        <a class="post-meta-iten" href="#">-->
                                        <!--                                            <i class="glyphicon glyphicon-star"></i>-->
                                        <!--                                            <span>Text</span></a><a class="post-meta-iten" href="#">-->
                                        <!--                                            <i class="glyphicon glyphicon-eye-open"></i>-->
                                        <!--                                            <span>Text</span>-->
                                        <!--                                        </a>-->
                                    </footer>
                                </section>
                            </article>
                            <?
                        }
                    } else {
                        echo '没有文章可以显示';
                    }
                    ?>
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
