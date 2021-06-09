<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <?php
    require '../../../wp-blog-header.php';
    require '../../../wp-admin/includes/post.php';
    require_once 'check.php';
    global $wpdb;
    $road = get_template_directory_uri();
    echo "<link href=\"$road/css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery.min.js\"></script>";
    echo "<script src=\"$road/js/bootstrap.min.js\"></script>";
    echo "<link rel=\"stylesheet\" href=\"$road/css/Navigation-Clean.css\">";

    //    session_start();
    $user_id = $_SESSION['user_id'];
    setcookie("user_id", $user_id, time() + 3600, '/');
    $author_info = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$user_id");
    // echo $author_info->user_email;
    $user_name = $_COOKIE['user_login'];
    echo "<title>$user_name's Personal Center</title>";
    $user_data = get_userdata($user_id);
    $email = $user_data->user_email;
    ?>

    <style>
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
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

        .navbar-list > a {
            margin-left: 24px;
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

        .card {
            border-width: 5px;
            /* border-style: solid; */
            border-top: 3px solid skyblue;
            border-bottom: 1px solid #edeef0;
            border-left: 1px solid #edeef0;
            border-right: 1px solid #edeef0;
            background-color: white;
            padding: 20px;
            margin-top: 20px;
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>


<body>

<!-- 导航栏 -->
<button onclick="topFunction()" id="myBtn" title="回顶部">返回顶部</button>

<script>
    // 当网页向下滑动 20px 出现"返回顶部" 按钮
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        // console.log(121);
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
                                
                            </a>
                            <li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- 横向布局 -->
<div class="container">
    <div class="row">

        <!-- 左侧导航栏 -->
        <div class="col-sm-2">
            <ul id="myTab" class="nav nav-pills nav-stacked ">
                <li class="active"><a href="#Tab1" data-toggle="tab">Information</a></li>
                <li><a href="#Tab3" data-toggle="tab">Management</a></li>
                <li><a href="#Tab4" data-toggle="tab">Collections</a></li>
            </ul>
            <hr class="hidden-sm hidden-md hidden-lg">
        </div>

        <!-- 留白 -->
        <div class="col-sm-2"></div>

        <!-- 主体部分 -->
        <div class="col-sm-6">
            <div id="myTabContent" class="tab-content">

                <!-- 个人资料 -->
                <div class="tab-pane fade in active" id="Tab1">
                    <div class="text-center">
                        <?php echo "<img src=\"https://v1.alapi.cn/api/avatar?email=$email&size=200\"
                             class=\"img-circle text-center\" width=\"200\" height=\"200\">";
                        ?>
                    </div>
                    <div class="text-center">
                        <h2><?php echo $author_info->user_login ?></h2>
                    </div>
                    <div id="personal-information">
                        <p>User: <?php echo $author_info->user_login; ?></p>
                        <?php if (!empty(get_user_meta($user_id, 'sex', true))) { ?>
                            <p id='sex'>性别: <?php echo get_user_meta($user_id, 'sex', true); ?></p> <? } ?>
                        <?php if (!empty(get_user_meta($user_id, 'birthday', true))) { ?>
                            <p id='sex'>生日: <?php echo get_user_meta($user_id, 'birthday', true); ?></p> <? } ?>
                        <?php if (!empty(get_user_meta($user_id, 'qq_num', true))) { ?>
                            <p id='qq_num'>qq: <?php echo get_user_meta($user_id, 'qq_num', true); ?></p> <? } ?>
                        <?php if (!empty(get_user_meta($user_id, 'wechat_num', true))) { ?>
                            <p id='wechat_num'>
                                微信: <?php echo get_user_meta($user_id, 'wechat_num', true); ?></p> <? } ?>
                        <p>E-mail: <?php echo $author_info->user_email; ?></p>
                        <?php if (!empty(get_user_meta($user_id, 'phone', true))) { ?>
                            <p id='phone'>手机号码：<?php echo get_user_meta($user_id, 'phone', true); ?></p> <? } ?>
                        <?php if (!empty(get_user_meta($user_id, 'interests', true))) { ?>
                            <p id='interests'>
                                兴趣标签: <?php echo get_user_meta($user_id, 'interests', true); ?></p> <? } ?>
                        <?php if (!empty(get_user_meta($user_id, 'introduction', true))) { ?>
                            <p id='introduction'>
                                个人简介：<?php echo get_user_meta($user_id, 'introduction', true); ?></p> <? } ?>
                        <p>文章: <?php echo count_user_posts($user_id); ?></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-default" id="edit-info" type="submit">Edit</button>
                    </div>

                    <script>
                        $("#edit-info").click(function () {
                            if ($(this).text() == 'Edit') {
                                $(this).text('Save');
                                $('#personal-information').html("\
                                <form id='information-form' method='post' action='<?php echo $road . "/functions/updateUserInfo.php";  ?>'>\
                                <input style='display:none' name='user_id' value='<?php echo $user_id;?>'>\
                                <label>User: </label><input name='user' value='<?php echo $author_info->user_login;?>'><br><br>\
                                <label>性别</label><input name='sex'><br><br>\
                                <label>生日</label><input name='birthday'><br><br>\
                                <label>qq</label><input name='qq_num'><br><br>\
                                <label>微信:</label><input name='wechat_num'><br><br>\
                                <label>E-mail: </label><input name='e-mail' value='<?php echo $author_info->user_email; ?>'><br><br>\
                                <label>手机号码</label> <input name='phone'><br><br>\
                                <label>兴趣标签:</label>\
                                <textarea name='interests'></textarea><br>\
                                <label>个人简介：</label>\
                                <textarea name='introduction'></textarea>\
                                </form>");
                            } else {
                                $(this).text('Edit');
                                $('#information-form').submit();
                                //$('#personal-information').html("<p>User: <?php //echo $author_info->user_login; ?>//</p>\
                                //<p id='sex'>性别: 3</p>\
                                //<p id='birthday'>生日: 2</p>\
                                //<p id='qq_num'>qq: 6</p>\
                                //<p id='wechat_num'>微信: 7</p>\
                                //<p>E-mail: <?php //echo $author_info->user_email; ?>//</p>\
                                //<p id='phone'>手机号码：5</p>\
                                //<p id='interests'>兴趣标签: 4</p>\
                                //<p id='introduction'>个人简介：1</p>");
                            }
                        })
                    </script>
                </div>
                <!-- 博客管理 -->
                <div class="tab-pane fade" id="Tab3">

                    <a href="page-editor.php" class="glyphicon glyphicon-plus" style="position: absolute;right: 3%;">
                        upload blog
                    </a>
                    <br>
                    <?php
                    query_posts(array('post_status' => 'publish', 'author' => $user_id));
                    if (have_posts()) {
                        while (have_posts()) {
                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();

                            ?>
                            <div class="card">
                                <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                <span class="dropdown" style="position: absolute;right: 3%;">
                                                <button type="button" class="btn" id="dropdownMenu1"
                                                        data-toggle="dropdown">edit
                                                <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation">
                                                        <a class="delete-article"
                                                           href="<?php echo $road . '/functions/deleteBlog.php?id=' . get_the_ID(); ?>">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            <span>
                                                                delete
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="modify-article"
                                                           href=<?php echo $road . "/page-editor.php?id=" . get_the_ID(); ?>>
                                                            <i class="glyphicon glyphicon-edit"></i>
                                                            <span>
                                                                modify
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </span>
                                <div class="fakeimg"><a href="<? the_permalink(); ?>">
                                        <img src="<? get_random_pic(); ?>"
                                             alt="Yukino" width="400">
                                    </a>
                                </div>
                                <p><? the_author(); ?></p>
                            </div>
                            <?
                        }
                    } else {
                        echo 'No blog here';
                    }
                    ?>

                    <!-- 我的收藏 -->
                </div>
                <!-- 收藏管理-->
                <div class="tab-pane fade" id="Tab4">
                    <?php
                    //                        $ar = explode(",", $author_info->user_favorite);
                    //                        $ar = explode(",", get_user_meta($user_id, 'favorite', true));
                    $ar = get_user_meta($user_id, 'favorite');
                    foreach ($ar as $zz) {
                        if (strlen($zz) == 0) {
                            break;
                        }
                        $zz = (int)$zz;
                        $collect = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE ID=$zz");
                        if (!empty($collect)) {
//                            if (post_exists($collect->post_title) != 0) {
                            ?>
                            <div class="card">
                                <a href=<?php echo $collect->guid; ?>> <?php echo $collect->post_title ?>  </a>
                                <span style="position: absolute;right: 3%;">
                                                                <a class="delete-article"
                                                                   href="
                            <?php echo $road . '/functions/delete_collect.php?uid=' . $user_id . '&pid=' . $zz; ?>">
                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                    <span>
                                                                        delete
                                                                    </span>
                                                                </a>
                                                            </span>
                                <div class="fakeimg"><a href="<? the_permalink(); ?>">
                                        <img src="<? get_random_pic(); ?>"
                                             alt="Azusa" width="400">
                                </div>
                            </div>
                            <?php
                        }
//                        }
                    }
                    ?>
                </div>

            </div>
        </div>
</body>
</html>
