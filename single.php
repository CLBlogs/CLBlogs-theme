<!--<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>-->
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo the_title(); ?></title>
    <?php
    $road = get_template_directory_uri();
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$road/css/article.css\">";
    echo '<link rel="stylesheet" href="' . $road . '/css/bootstrap.min.css">';
    echo '<script type="text/javascript" src="' . $road . '/js/jquery.min.js"></script>';
    echo '<script type="text/javascript" src="' . $road . '/js/bootstrap.min.js"></script>';
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-Clean.css\">";
    global $post;
    $author_id = $post->post_author;
    $author_data = get_userdata($author_id);
    $email = $author_data->user_email;
    $uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("uri", $uri, time() + 30 * 24 * 3600, '/');
    session_start();
    // 浏览次数 + 1
    $post_id = get_the_ID();
    setPostViews($post_id);

    ?>
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

        /*@media (max-width: 767px) {*/
        /*    .navigation-clean {*/
        /*        padding-top: 0;*/
        /*        padding-bottom: 0;*/
        /*    }*/
        /*}*/

        /*@media (max-width: 767px) {*/
        /*    .navigation-clean .navbar-header {*/
        /*        padding-top: 10px;*/
        /*        padding-bottom: 10px;*/
        /*    }*/
        /*}*/

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
            width: 100%;
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

        .navbar-nav > li {
            margin-bottom: 0px;
        }

        li.active > form {
            height: 34px;
        }

        .navbar-from > .btn-default {
            border: white;
            border-radius: 4px;
        }

        #myBtn {
            display: none; /* 默认隐藏 */
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: skyblue; /* 设置背景颜色，你可以设置自己想要的颜色或图片 */
            color: white; /* 文本颜色 */
            cursor: pointer;
            padding: 15px;
            border-radius: 10px; /* 圆角 */
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.cookie.js"></script>
    <script>
        window.onload = function () {
            const Thumb = document.querySelector('#Thumb_visible');
            const ThumbActive = document.querySelector('#Thumb_invisible');
            const Collect = document.querySelector('#Collect_visible');
            const CollectActive = document.querySelector('#Collect_invisible');
            $.ajax({
                url: <? echo "\"" . $road . "/functions/blogcontent.php\""; ?>,
                type: "post",
                dataType: 'json',
                data: {post_id: "<?php echo $post_id; ?>", author_id: <?php echo $author_id;?>},
                success: function (result) {
                    console.log(result);
                    let obj = typeof result == "string" ? JSON.parse(result) : result;
                    if (obj.judge == 0)//表示还未收藏
                    {
                        Collect.className = 'tool_visible';
                        CollectActive.className = 'tool_invisible';
                    } else {//已收藏
                        Collect.className = 'tool_invisible';
                        CollectActive.className = 'tool_visible';
                    }
                    document.getElementById('coll_number').innerText = obj.num;
                    document.getElementById('sum_comm').innerText += obj.sum_comm;
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }

        function displayThump() {
            const Thumb = document.querySelector('#Thumb_visible');
            const ThumbActive = document.querySelector('#Thumb_invisible');
            const dis = Thumb.style.display;
            if (dis == 'none') {
                Thumb.style.display = 'inline';
                ThumbActive.style.display = 'none';
            } else {
                Thumb.style.display = 'none';
                ThumbActive.style.display = 'inline';
            }

            var pid = <?php echo $post->ID; ?>; //文章ID
            var u_ip = '<?php echo $_SERVER["REMOTE_ADDR"]; ?>'; //当前客户端的IP地址
            var cookie_val = pid + '_' + u_ip; //cookie名
            if ($.cookie(cookie_val)) { //如果 COOKIE 存在，就提示 已点赞过
                alert("你已点赞过了。");
                return;
            }

            $.ajax({
                url: <? echo "\"" . $road . "/functions/addLike.php\""; ?>,
                type: "post",
                dataType: 'json',
                data: {post_id: "<?php echo $post_id; ?>"},
            });
            let like_number = parseInt(document.getElementById("like_number").innerText);
            like_number += 1;
            document.getElementById("like_number").innerText = like_number.toString();
            $.cookie(cookie_val, cookie_val, {expires: 1}); //设置COOKIE有效期 1 天
        }

        function displayCollect() {
            const Collect = document.querySelector('#Collect_visible');
            const CollectActive = document.querySelector('#Collect_invisible');
            $.ajax({
                url: <? echo "\"" . $road . "/functions/addColl.php\""; ?>,
                type: "post",
                dataType: 'json',
                data: {post_id: "<?php echo $post_id; ?>", author_id: <?php echo $author_id;?>},
                success: function (result) {
                    let obj = typeof result == "string" ? JSON.parse(result) : result;
                    if (obj.judge == 0)//表示还未收藏，可以收藏
                    {

                        Collect.className = 'tool_invisible';
                        CollectActive.className = 'tool_visible';
                        // Collect.style.display = "none";
                        // CollectActive.style.display = "inline";
                    } else {//已收藏，取消收藏
                        // Collect.style.display = "inline";
                        // CollectActive.style.display = "none";
                        Collect.className = 'tool_visible';
                        CollectActive.className = 'tool_invisible';
                    }
                    document.getElementById('coll_number').innerText = obj.num;

                }
            });
        }

        // if (window.addEventListener)//FF,火狐浏览器会识别该方法
        //     window.addEventListener('DOMMouseScroll', scroll, false);
        // window.onscroll = document.onscroll = scroll;//W3C
        // let v1=document.getElementById('other_article');
        // const len=$('#other_article').offset().top-$(window).scrollTop();
        // let scrolltop=0;
        // //  console.log(len);
        // if(len==10){
        //     scrolltop=$(window).scrollTop();
        // }
        // function scroll(scrolltop){
        //
        //     if(scrolltop<=$(window).scrollTop()){
        //         console.log(scrolltop);
        //         v1.className ='other_article_fixed';
        //         console.log(scrolltop);
        //         console.log($(window).scrollTop())
        //         console.log(v1.className);
        //     }
        //     else{
        //         v1.className ='other_article_relative';
        //             console.log(len);
        //             console.log(v1.className);
        //     }
        // }

    </script>
</head>
<body>

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
                <li class="active">
                    <?php get_search_form(); ?>
                </li>
                <?php
                if (empty($_COOKIE['user_login'])) {
                    echo "<li><a id=\"login\" href=\"$road/login.php\">sign in / sign up</a></li>";
                } else {
                    echo "<li><a class=\"dropdown-button\" id= \"caidan\" data-target=\"#\" href=\"/\">
                                <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" id=\"dropdown_toggle\" aria-expanded=\"false\" data-toggle=\"dropdown\" href=\"/\" data-target=\"#\">
                                        <img id=\"user_icon\" class=\"navbar-avatar\" src=\"https://v1.alapi.cn/api/avatar?email=$email&size=30\">    
                                        " . $_COOKIE['user_login'] . "
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"$road/mineblog.php\"><i class=\"glyphicon glyphicon-user\"></i>Personal Center</a></li>
                                        <li><a href=\"$road/functions/loginout.php\"><i class=\"glyphicon glyphicon-log-out\"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </a><li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


<div id="main_content">
    <main>
        <div class="main">
            <div class="main_head">
                <h2 class="article_title"><? the_title(); ?></h2>
                <div class="creat_information">
                    <div class="article_information">
                        <a href="index.php" class="blogger_name" target="_blank"><? the_author(); ?></a>
                        <span class="creat_time"><? the_time('Y-m-d H:i:s'); ?></span>
                    </div>
                    <!--                    <div class="article_tag">-->
                    <!--                        --><? // the_tags(); ?>
                    <!--                    </div>-->
                </div>
            </div>
            <article>
                <div class="blogs_content">
                    <? the_content(); ?>
                </div>
            </article>
            <div class="toolbox">
                <ul class="toolbox_one">
                    <li class="toolbox_Thumb">
                        <a onclick="displayThump()">
                            <?php echo "<img    class='tool_visible' id= \"Thumb_visible\" alt='点赞'   src=\"$road/img/tobarThumbUp.png\">"; ?>
                            <?php echo "<img class='tool_invisible'  id= \"Thumb_invisible\" alt='已点赞' src=\"$road/img/tobarThumbUpactive.png\">"; ?>
                            <span>Likes</span>
                            <span id="like_number">
                        <?php echo number_format(getPostLikes((int)$post_id)); ?>
                        </span>
                        </a>
                    </li>
                    <li class="toolbox_collection">
                        <a onclick="displayCollect()">
                            <?php echo "<img  class='tool_visible' id= \"Collect_visible\" alt=\"收藏\" src=\"$road/img/tobarCollect.png\">"; ?>
                            <?php echo "<img class='tool_invisible' id= \"Collect_invisible\" alt=\"已收藏\" src=\"$road/img/tobarCollectionActive.png\">"; ?>
                            <span>Favorites</span>
                            <span id="coll_number">
                        <?php
                        global $wpdb;
                        $wpdb->query("select * from $wpdb->usermeta where meta_key='favorite' and meta_value='$post_id'");
                        echo $wpdb->num_rows;
                        ?>
                        </span>
                        </a>
                    </li>
                    <li class="toolbox_comment">
                        <a>
                            <?php echo "<img id= \"Comment_visible\" alt=\"评论\" src=\"$road/img/comment.png\">"; ?>
                            <span>Comments</span>
                            <span><?php echo $number = get_comments_number($post_id); ?>
                        </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <? comments_template(); ?>
    </main>
    <aside>

        <div class="blogger_head">
            <?php echo "<a href=\"$road/otherblog.php?user_id=$author_id\">"; ?>
            <img class="blogger_head_portrait"
                 src="https://v1.alapi.cn/api/avatar?email=<?php echo $email; ?>&size=100"
                 alt="Enter the blogger's home" class="blogger_head_portrait">
            </a><br>
            <span id='author_introduction'>个人简介:<?php echo get_user_meta($author_id, 'introduction', true); ?></span>
        </div>

        <div class="blogger_introduction">
            <p class="blogger_name"> <?php echo $author_data->user_login; ?> </p>
            <hr class="blogger_line">
            <div class="blogger_information">
                <span>Article: <?php the_author_posts(); ?></span>
                |<span id="sum_comm">Comments:</span>
                |<span>Collection: </span>
                |<span>Thump:</span>
                |<span>E-mail: <?php echo $email ?></span>
            </div>
        </div>
        <div class="classify">

            <h4>Time nodes</h4>
            <ul>
                <?php wp_get_archives() ?>
            </ul>

        </div>
        <div class="other_article_relative" id="other_article">
            <h4>Blogger's Other Blogs</h4>
            <ul>
                <?php
                query_posts(array('post_status' => 'publish', 'author' => $author_id));
                if (!empty($author_id) && have_posts()) {
                    while (have_posts()) {
                        //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                        the_post();
                        ?>
                        <li>
                            <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                            <?php echo "<img  class='article_view' src=\"$road/img/articleView.png\">"; ?>
                            <span><? echo getPostViews(get_the_ID()); ?></span>
                        </li>
                        <?
                    }
                }
                ?>
            </ul>
        </div>
    </aside>
</div>
<button onclick="topFunction()" id="myBtn" title="回顶部">返回顶部</button>
<script>
    // 当网页向下滑动 20px 出现"返回顶部" 按钮
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // 点击按钮，返回顶部
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>
