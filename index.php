<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CLBlogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <?php
    $road = get_template_directory_uri();
    ?> 
    <link href="https://cdn.bootcdn.net/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <style>
.footer-basic {
  padding: 40px 0;
  background-color: #f7f5f5;
  color: #4b4c4d;
}

.footer-basic ul {
  padding: 0;
  list-style: none;
  text-align: center;
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 0;
  background-color: #f7f5f5;
}

.footer-basic li {
  padding: 0 10px;
}

.footer-basic ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.8;
}

.footer-basic ul a:hover {
  opacity: 1;
}

.footer-basic .social {
  text-align: center;
  padding-bottom: 25px;
}

.footer-basic .social > a {
  font-size: 24px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  border: 1px solid #ccc;
  margin: 0 8px;
  color: inherit;
  opacity: 0.75;
}

.footer-basic .social > a:hover {
  opacity: 0.9;
}

.footer-basic .copyright {
  margin-top: 15px;
  text-align: center;
  font-size: 13px;
  color: #aaa;
  margin-bottom: 0;
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

@media (max-width:767px) {
  .navigation-clean {
    padding-top: 0;
    padding-bottom: 0;
  }
}

@media (max-width:767px) {
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
  box-shadow: 0 4px 8px rgba(0,0,0,.1);
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
  border: none;
  border-color: #0c0b0b;
  outline: none;
  background: #f5f6f7;
  width: 200px;
  font-size: inherit;
  border-radius: 4px 0 0 4px;
  height: 34px;
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
  border-color: initial;
  border-radius: 0 4px 4px 0;
  height: 34px;
  border-top-width: 0px;
  border-bottom-width: 0;
}

.container {
  background-color: #101010;
}

.navbar-brand {
  padding-top: 12px;
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

#main-flow {
  margin: 0 auto;
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
  border-radius: 4px;
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

.blog_card {
  border-width: 5px;
  border-bottom: 1px solid #d5d3d3;
  border-left: 1px solid #edeef0;
  border-right: 1px solid #edeef0;
  background-color: white;
  padding: 20px;
  border-top: 3px solid skyblue;
  margin-bottom: 15px;
}

.blog_div {
  background-color: #ffffff;
  margin-bottom: 10px;
}

.blog_imag {
  margin-bottom: 15px;
  width: 60%;
}

.abstract {
  display: block;
}

#top {
  margin-bottom: 40px;
  border: none;
}

#home {
  background-color: rgb(0, 0, 0);
  color: #ddd;
}

#home:hover {
  color: rgb(255, 255, 255);
}

#title {
  color: rgb(224, 224, 224);
}

#title:hover {
  color: #fff;
}

#login {
  color: #ddd;
}

#login:hover {
  color: rgb(255, 255, 255);
}

#caidan {
  padding-top: 2px;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  background-color: #222;
}

#dropdown_toggle {
  background-color: #222;
}
    </style>
    <style>
body {
  margin: 0;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
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
  width: 30%;
  max-width: 300px;
  min-width: 300px;
  margin-left: 5%;
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
  border: 1px solid rgba(0,0,0,.125);
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
  width: 50%;
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
    </style>
</head>

<body>
    <div id="wrapper" class="flow">
        <nav class="navbar navbar-default" id="top">
            <div class="container-fluid" id="top_in">
                <div class="navbar-header" id="CLBLOGS"><a class="navbar-brand" id="title" href="#">CLBLOGS</a><button data-toggle="collapse" class="navbar-toggle collapsed" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav" id="home_nav">
                        <li><a id="home" href="#">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav" id="top_right">
                        <li class="active">
                            <?php get_search_form(); ?>
                            <!-- <form class="navbar-form"><input class="form-control" type="text" id="top-input"><button class="btn btn-default" id="search-botton" type="button"><i class="glyphicon glyphicon-search"></i></button></form> -->
                        </li>
                        <?php
                        if (empty($_COOKIE['user_login'])) {
                            echo "<li><a id=\"login\" href=\"$road/login.php\">sign in / sign up</a></li>";
                        } 
                        else{
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
        <div id="main-contain" class="hero">
            <div id="main" class="main">
                <div id="side_left" class="side-left card-list side-bar">
                    <div class="card">
                        <h4 class="card-title"><a href="#">排行榜标题</a></h4>
                        <ul class="item-list">
                            <?php $args = array(
                                'meta_key' => 'views',
                                'orderby' => 'meta_value_num',
                                'posts_per_page' => 6,
                                'order' => 'DESC'
                            );
                            query_posts($args);
                            while (have_posts()) : the_post(); ?>
                                <li><a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                    <span class="kc-view fright">浏览：
                                        <?php
                                        echo number_format(getPostViews(get_the_ID()));
                                        ?>
                                    </span>
                                </li>
                            <?php endwhile;
                            wp_reset_query(); ?>
                            <!-- <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>
                            <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>
                            <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>
                            <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li> -->
                        </ul>
                    </div>

                    <!-- <div class="card">
                        <h4 class="card-title"><a href="#">排行榜标题</a></h4>
                        <ul class="item-list">
                            <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>
                            <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>
                            <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>
                            <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="card">
                        <h4 class="card-title"><a href="#">排行榜标题</a></h4>
                        <ul class="item-list">
                            <li><span class="number highlight">1</span><a href="#">Announcing -hardening<br><br></a></li>
                            <li><span class="number highlight">2</span><a href="#">有意思！强大的 SVG 滤镜<br><br><br></a></li>
                            <li><span class="number highlight">3</span><a href="#">CentOS离线安装Nginx<br><br><br></a></li>
                            <li><span class="number highlight">4</span><a href="#">图解 | 原来这就是 class<br><br></a></li>
                        </ul>
                    </div> -->

                </div>
                <div id="main-flow" class="main-flow">
                    <div id="post-list" class="post-list">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                                the_post();
                        ?>
                        <div class="blog_card"><a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                            <div class="blog_div">
                                <a href="#">
                                    <img class="blog_imag" src="http://test4.fnsflm.xyz:8192/wp-content/uploads/2021/05/屏幕截图27.png">
                                </a>
                                <a class="abstract" href="#"><br>
                                </a></div>
                            <footer id="post-item-foot-4" class="post-item-foot">
                            <a class="post-item-author" href="#"><span>author：<? the_author(); ?></span></a><span class="post-meta-item">time：<? the_time('Y-m-d'); ?></span>
                            <a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span>approvals: <?php
                                global $post;
                                $like_num = get_user_meta($post->post_author, 'likes', true);
                                echo empty($like_num)?0:$like_num;
                                ?></span></a>
                            <a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>收藏</span></a>
                            <a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-eye-open"></i><span><?php
                                echo ' views: ';
                                echo number_format(getPostViews(get_the_ID()));
                                ?></span></a>
                            </footer>
                        </div>
                        <?
                        }
                    } else {
                        echo 'No blog here';
                    }
                    ?>
                        <!-- <div class="blog_card"><a href="#">博客标题</a>
                            <div class="blog_div"><a href="#"><img class="blog_imag" src="assets/img/blog_test.png"></a><a class="abstract" href="#">摘要</a></div>
                            <footer id="post-item-foot-5" class="post-item-foot"><a class="post-item-author" href="#"><span>author</span></a><span class="post-meta-item">time</span><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-star"></i><span>Text</span></a><a class="post-meta-iten" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Text</span></a></footer>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-basic">
            <div class="social"><a href="#"><i class="icon ion-android-mail"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li><a href="#">CLBlogs</a></li>
                <li><a href="#">Terms</a></li>
                <!-- <li><a href="#">Copyright</a></li> -->
                <li><a href="#">陕ICP备2021003793号</a></li>
            </ul>
            <p class="copyright">CLBlogs © 2018-2021</p>
        </footer>
    </div>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
