<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CLBlogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <?php
    $road = get_template_directory_uri();
    ?>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        div {
            display: block;
        }

        .hero {
            padding-left: 40px;
            padding-right: 40px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .hero > .main {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        .hero > .main > .side-left {
            width: 25%;
            /*max-width: 300px;*/
            min-width: 300px;
            margin-left: 3%;
        }

        .ad-right-text, .sidebar-bh {
            font-size: 12px;
            margin-left: 20px;
            color: #353535;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card {
            background-color: #fff;
            padding: 20px 24px;
            font-size: 14px;
        }

        .card .card-title, .dropdown > .dropdown-menu .card-title, .hero > .main > .side-left .card-title {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            color: #555;
            font-size: 14px;
            font-weight: 400;
            white-space: nowrap;
        }

        .card-list > .card > .card-title, .hero > .main.card-list > .side-left > .card-title, .dropdown.card-list > .dropdown-menu > .card-title {
            padding-top: 0;
            padding-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            color: #2b2b2b;
            line-height: 22px;
            justify-content: space-between;
        }

        .card-title {
            margin-bottom: .75rem;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        .item-list {
            padding: 0;
        }

        ul {
            padding: 0;
            list-style: none;
            list-style-position: initial;
            list-style-image: initial;
            list-style-type: none;
            background-color: #fff;
        }

        .card-list > .card > .item-list > li {
            margin-bottom: 8px;
        }

        li {
            list-style: none;
        }

        .item-list li .number {
            margin-right: 10px;
            color: #909090;
        }

        .sidebar .item-list li a:link, .sidebar .item-list li a:active, .sidebar .item-list li a:visited {
            color: #353535;
        }

        .item-list li {
            display: flex;
            max-height: 40px;
            line-height: 20px;
            text-overflow: ellipsis;
            overflow: hidden;
            font-size: 13px;
        }

        .hero > .main > .main-flow {
            width: 72%;
            /*border: 1px rgb(225,218,218) solid;*/
            background-color: #ffffff;
        }

        .post-list {
            width: 100%;
            margin-bottom: 30px;
            min-height: 500px;
            /*background-color: #fff;*/
        }

        .post-list > .post-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-bottom: 10px;
            border-bottom: 1px solid #f6f6f6;
            margin-top: 16px;
            overflow-wrap: break-word;
            background-color: #fff;
        }

        .post-list > .post-item > .post-item-body {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-right: 10px;
            padding-left: 10px;
        }

        .post-item-text {
            padding: 0;
            background-color: #fff;
        }

        .post-list > .post-item > .post-item-body > .post-item-text > .post-item-title:link {
            color: #4c4d4d;
            /*text-decoration: underline;*/
        }

        .post-list > .post-item > .post-item-body > .post-item-text > .post-item-summary {
            display: block;
            color: #555;
            font-size: 12px;
            font-weight: 400;
            line-height: 20px;
            -o-text-overflow: clip;
            text-overflow: clip;
        }

        .post-item .avatar {
            border-radius: 0;
            padding: 1px;
            border: 1px solid #ccc;
            float: left;
            margin-right: 5px;
            margin-top: 3px;
        }

        .post-list > .post-item > .post-item-body > .post-item-text > .post-item-title {
            font-weight: bold;
            font-size: 15px;
            line-height: 25px;
            outline: none;
        }

        #post-item-foot {
            margin-top: 0;
            display: inline-flex;
            align-items: center;
            font-size: 13px;
            color: #555;
        }

        .post-meta-item {
            margin-right: 16px;
            vertical-align: middle;
            font-size: 16px;
        }

        .post-item-author {
            margin-right: 16px;
            vertical-align: middle;
        }

        .post-meta-iten {
            margin-right: 16px;
            vertical-align: middle;
        }

        .glyphicon.glyphicon-thumbs-up {
            height: 16px;
            width: 16px;
        }

        .side-right {
            margin-top: 60px;
            margin-left: 20px;
            width: 150px;
            width: 300px;
            max-width: 150px;
            min-width: 150px;
            padding-top: 20px;
            padding-right: 0;
        }

        .list-box {
            margin-top: 40px;
            margin-left: 30px;
            width: 120px;
            z-index: 10;
            -webkit-transition: all .1s;
            transition: all .1s;
            position: relative;
            background: #fff;
            border-radius: 6px;
            border: 1px solid #e6e6e6;
        }

        .list-right-item {
            margin-bottom: 26px;
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
        }

        .list-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: .25rem;
            background-color: #fff;
        }

        #caidan {
            padding-top: 2px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            background-color: #222;
        }

        .dropdown {
            background-color: initial;
        }

        #dropdown_toggle {
            background-color: #222;
        }

        #home {
            background-color: rgb(0, 0, 0);
            color: #ddd;
        }

        #home:hover {
            color: rgb(255, 255, 255);
        }

        #top {
            border: none;
        }

        #top_in {
            border-radius: 4px;
            min-height: 51px;
        }

        #title {
            color: #9d9d9d;
            height: 50px;
            font-size: 19px;
            line-height: 23px;
        }

        #title:hover {
            color: #ffffff;
        }

        #login {
            color: rgb(207, 207, 207);
        }

        #login:hover {
            color: #ffffff;
        }
    </style>
    <style>
        .navigation-clean {
            background: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #333;
            border-radius: 0;
            box-shadow: none;
            border: none;
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .navigation-clean {
                padding-top: 0;
                padding-bottom: 0;
            }
        }

        @media (max-width: 767px) {
            .navigation-clean .navbar-header {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        .navigation-clean .navbar-brand {
            font-weight: bold;
        }

        .navigation-clean .navbar-toggle {
            border-color: #ddd;
        }

        .navigation-clean .navbar-toggle:hover, .navigation-clean .navbar-toggle:focus {
            background: none;
        }

        .navigation-clean .navbar-toggle .icon-bar {
            background-color: #888;
        }

        .navigation-clean .navbar-nav > .active > a, .navigation-clean .navbar-nav > .open > a {
            background: none;
            box-shadow: none;
        }

        .navigation-clean.navbar-default .navbar-nav > .active > a, .navigation-clean.navbar-default .navbar-nav > .active > a:focus, .navigation-clean.navbar-default .navbar-nav > .active > a:hover {
            color: #cbc6c6;
            box-shadow: none;
            background: none;
            /*pointer-events: none;*/
            padding-top: 8px;
            font-size: 12px;
            padding-bottom: 0;
            padding-right: 0;
        }

        .navigation-clean.navbar .navbar-nav > li > a {
            padding-left: 18px;
            padding-right: 18px;
        }

        .navigation-clean.navbar-default .navbar-nav > li > a {
            color: #465765;
        }

        .navigation-clean.navbar-default .navbar-nav > li > a:focus, .navigation-clean.navbar-default .navbar-nav > li > a:hover {
            color: #faf8f8 !important;
            background-color: transparent;
        }

        .navigation-clean .navbar-nav > li > .dropdown-menu {
            margin-top: -5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
            background-color: #fff;
            border-radius: 2px;
        }

        .navigation-clean .dropdown-menu > li > a:focus, .navigation-clean .dropdown-menu > li > a {
            line-height: 2;
            font-size: 14px;
            color: #37434d;
        }

        .navigation-clean .dropdown-menu > li > a:focus, .navigation-clean .dropdown-menu > li > a:hover {
            background: #eee;
            color: inherit;
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-align: center;
            align-items: center;
        }

        .top_nav_link {
            padding-left: 18px;
            padding-right: 18px;
            font-size: 20px;
        }

        .navbar-brand {
            font-size: 28px;
        }

        #shouye {
            margin-left: 15px;
            padding-top: 12px;
            font-size: 15px;
        }

        #navbar_search {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            align-items: center;
            border-radius: 6px;
            /*background-color: #f4f4f4;*/
        }

        #top-input {
            border-color: #b3aeae;
            outline: none;
            background: #fafafa;
            width: 68%;
            font-size: inherit;
            border-radius: 4px 0 0 4px;
            height: 43px;
            border-right: none;
            font-size: 16px;
        }

        #submit {
            background: none;
            /*position: absolute;*/
            /*top: 8px;*/
            /*right: 16px;*/
            /*margin: 0;*/
            /*padding: 0;*/
            /*border: none;*/
            /*background: none;*/
            color: #505050;
            font-size: 16px;
            line-height: 20px;
            cursor: pointer;
            /*transition: all .2s;*/
        }

        #search-botton {
            /*background: #282424;*/
        }

        #navbar_login_status {
            min-width: 120px;
            margin-left: 24px;
            list-style: none;
        }

        .navbar-list > a {
            margin-left: 24px;
        }

        #denglu {
            font-size: 17px;
            padding-top: 13px;
            padding-left: 30px;
            padding-right: 10px;
        }

        #zhuce {
            font-size: 17px;
            padding-top: 13px;
            padding-right: 0;
            padding-left: 10px;
        }

        #search-botton {
            outline: none;
            border-color: #bdbbbb;
            border-radius: 0 4px 4px 0;
            height: 43px;
            width: 45px;
            background: #ebebeb;
            border-radius: 0 4px 4px 0;
        }

        .container {
            background-color: #101010;
        }

        .navbar-brand {
            padding-top: 12px;
        }

        .active {
        }

        .top_nav_link {
        }

        #user_icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .navbar-avatar {
            border-radius: 50%;
            margin-right: 10px;
        }

        #guidang {
            font-size: 20px;
            padding-top: 12px;
            padding-left: 30px;
        }

        #liuyan {
            font-size: 20px;
            padding-top: 12px;
            padding-left: 30px;
        }

        a {
            font-size: 15px;
        }

        .dropdown {
            background-color: initial;
        }

        .dropdown-menu {
            min-width: initial;
        }

        .dropdown-toggle {
            color: #f0eeee;
        }

        #top_right {
            float: right;
            background-color: #222;
        }

        #user {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        navbar {
            background-color: #2b2727;
            border-radius: 4px;
        }

        #top_in {
            background-color: #222;
        }

        #navcol-1 {
            background-color: #222;
        }

        #CLBLOGS {
            background-color: #222;
        }

        #title {
            color: #9d9d9d;
            float: left;
            height: 50px;
            /*padding: 15px 15px;*/
            font-size: 19px;
            line-height: 23px;
        }

        @media (min-width: 768px) .navbar {
            border-radius: 4px;
        }

            .blog_card {
                border-width: 5px;
                border-bottom: 1px solid #d2d2d2;
                border-left: 1px solid #edeef0;
                border-right: 1px solid #edeef0;
                background-color: white;
                padding: 20px;
                border-top: 3px solid skyblue;
                margin-bottom: 10px;
            }

            .blog_div {
                background-color: #ffffff;
                margin-bottom: 10px;
            }

            .blog_imag {
                margin-bottom: 15px;
                width: 80%;
            }

            .abstract {
                display: block;
            }

            #top {
                margin-bottom: 12px;
            }

            #input_form {
                width: 100%;
                padding-left: 30px;
            }

            #search_nav {
                margin-bottom: 40px;
                background: #ffff;
            }
    </style>
</head>

<body>
<div id="wrapper" class="flow">
    <nav class="navbar navbar-default" id="top">
        <div class="container-fluid" id="top_in">
            <div class="navbar-header" id="CLBLOGS"><a class="navbar-brand" id="title" href="/">CLBLOGS</a>
                <button data-toggle="collapse" class="navbar-toggle collapsed" data-target="#navcol-1"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav" id="home_nav">
                    <li><a id="home" href="/">Home</a></li>
                </ul>
                <ul class="nav navbar-nav" id="top_right">
                    <?php
                    if (empty($_COOKIE['user_login'])) {
                        echo "<li><a id=\"login\" href=\"$road/login.php\">sign in / sign up</a></li>";
                    } else {
                        echo "<li><a class=\"dropdown-button\" id= \"caidan\" href=\"$road/mineblog.php\">
                                <div class=\"dropdown\"><a class=\"dropdown-toggle\" id=\"dropdown_toggle\" aria-expanded=\"false\" data-toggle=\"dropdown\" href=\"$road/mineblog.php\">
                                        <img id=\"user_icon\" class=\"navbar-avatar\" src=\"assets/img/photo_test.png\">    
                                        昵称
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i>个人空间</a></li>
                                        <li><a href=\"#\"><i class=\"glyphicon glyphicon-log-out\"></i>退出登录</a></li>
                                    </ul>
                                </div>
                            </a><li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-default" id="search_nav">
        <div class="container-fluid">
            <? get_search_form() ?>
        </div>
    </nav>
    <div id="main-contain" class="hero">
        <div id="main" class="main">
            <div id="main-flow" class="main-flow">
                <div id="post-list" class="post-list">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();
                            ?>
                            <div class="blog_card"><a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                <div class="blog_div"><a href="#"></a><a class="abstract" href="<? the_permalink(); ?>"><? the_excerpt(); ?><br></a></div>
                                <footer id="post-item-foot-4" class="post-item-foot">
                                    <a class="post-item-author"
                                       href="#"><span>author：<? the_author(); ?></span></a><span
                                            class="post-meta-item">time：<? the_time('Y-m-d'); ?></span>
                                    <p class="post-meta-item" p><p
                                                class="glyphicon glyphicon-thumbs-up"></p><span>Likes: <?php
                                            global $post;
                                            $like_num = get_user_meta($post->post_author, 'likes', true);
                                            echo empty($like_num) ? 0 : $like_num;
                                            ?></span>
                                    </p>
                                    <span class="post-meta-item">
                                        <i class="glyphicon glyphicon-star"></i><span>Favorites</span></span>
                                    <span class="post-meta-item"><i class="glyphicon glyphicon-eye-open"></i><span><?php
                                            echo ' views: ';
                                            echo number_format(getPostViews(get_the_ID()));
                                            ?></span>
                                    </span>
                                </footer>
                            </div>
                            <?
                        }
                    } else {
                        echo 'No Results';
                    }
                    ?>
                </div>
            </div>
            <div id="side_left" class="side-left card-list side-bar">
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
        </div>
    </div>
</div>
<? get_footer(); ?>
</body>

</html>