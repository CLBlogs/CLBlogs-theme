<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <?php
    require '../../../wp-blog-header.php';
    require_once 'check.php';
    global $wpdb;
    $road = get_template_directory_uri();
    echo "<link href=\"$road/css/bootstrap.min.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery.min.js\"></script>";
    echo "<script src=\"$road/js/bootstrap.min.js\"></script>";
    session_start();
    $user_id = $_SESSION['user_id'];
    setcookie("user_id", $user_id, time() + 3600, '/');
    $author_info = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$user_id");
    // echo $author_info->user_email;
    $user_name = $_COOKIE['user_login'];
    echo "<title>$user_name's Personal Center</title>";
    ?>

    <style>
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
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>


<body>
<!-- <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>我的主页</h1>
  </div> -->

<!-- 导航栏 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">CLBLOGS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <!--                <li><a href="#">管理</a></li>-->
                <!--                <li><a href="#">留言</a></li>-->
            </ul>
            <!--            <div class="pull-right">-->
            <!--                <ul class="nav navbar-nav">-->
            <!--                    <li><a href="#">登录</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
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
                        <?php echo "<img src=\"https://v1.alapi.cn/api/avatar?email=$author_info->user_email&size=200\"
                             class=\"img-circle text-center\" width=\"200\" height=\"200\">";
                        ?>
                    </div>
                    <div class="text-center">
                        <h2><?php echo $author_info->user_login ?></h2>
                    </div>
                    <div id="personal-information">
                        <p>User: <?php echo $author_info->user_login; ?></p>
                        <p id='sex'>性别: <?php echo get_user_meta($user_id, 'sex', true); ?></p>
                        <p id='birthday'>生日: <?php echo get_user_meta($user_id, 'birthday', true); ?></p>
                        <p id='qq_num'>qq: <?php echo get_user_meta($user_id, 'qq_num', true); ?></p>
                        <p id='wechat_num'>微信: <?php echo get_user_meta($user_id, 'wechat_num', true); ?></p>
                        <p>E-mail: <?php echo $author_info->user_email; ?></p>
                        <p id='phone'>手机号码：<?php echo get_user_meta($user_id, 'phone', true); ?></p>
                        <p id='interests'>兴趣标签: <?php echo get_user_meta($user_id, 'interests', true); ?></p>
                        <p id='introduction'>个人简介：<?php echo get_user_meta($user_id, 'introduction', true); ?></p>
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
                    <a href="page-editor.php" class="btn btn-primary btn-lg">upload blog</a>
                    <?php
                    query_posts(array('post_status' => 'publish', 'author' => $user_id));
                    if (have_posts()) {
                        while (have_posts()) {
                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();

                            ?>
                            <div class="card">
                                <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                <!--                                删除/修改功能待完善-->
                                <!--                                <div class="pull-right dropdown">-->
                                <!--                                    <button type="button" class="btn dropdown-toggle btn-default" id="menu"-->
                                <!--                                            data-toggle="dropdown" aria-label="Left Align">-->
                                <!--                                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>-->
                                <!--                                    </button>-->
                                <!--                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu">-->
                                <!--                                        <li role="presentation">-->
                                <!--                                            <a role="menuitem" tabindex="-1" href="#">删除</a>-->
                                <!--                                        </li>-->
                                <!--                                        <li role="presentation">-->
                                <!--                                            <a role="menuitem" tabindex="-1" href="#">修改</a>-->
                                <!--                                        </li>-->
                                <!--                                    </ul>-->
                                <!--                                </div>-->
                                <!--                                <h5>副标题</h5>-->
                                <div class="fakeimg">
                                    <img src="<? get_random_pic(); ?>"
                                         alt="Yukino" width="400">
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
                        ?>

                        <div class="card">
                            <a href=<?php echo $collect->guid; ?>> <?php echo $collect->post_title ?>  </a>
                            <!--                            <div class="pull-right dropdown">-->
                            <!--                                <button type="button" class="btn dropdown-toggle btn-default" id="menu"-->
                            <!--                                        data-toggle="dropdown" aria-label="Left Align">-->
                            <!--                                    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>-->
                            <!--                                </button>-->
                            <!--                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu">-->
                            <!--                                    <li role="presentation">-->
                            <!--                                        <a role="menuitem" tabindex="-1" href="#">取消收藏</a>-->
                            <!--                                    </li>-->
                            <!--                                </ul>-->
                            <!--                            </div>-->
                            <!--                            <h5>副标题</h5>-->
                            <div class="fakeimg">
                                <img src="<? get_random_pic(); ?>"
                                     alt="Azusa" width="400">
                            </div>
                            <p>Azusa</p>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <!-- 右侧部分 -->
            </div>
        </div>

        <!-- <div class="jumbotron text-center" style="margin-bottom:0">
          <p>Powered by zzz</p>
        </div> -->

</body>
</html>