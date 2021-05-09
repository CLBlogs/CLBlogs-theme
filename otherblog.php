<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页</title>
    <?php
    require '../../../wp-blog-header.php';
    $road = get_template_directory_uri();
    echo "<link href=\"$road/css/bootstrap.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery-3.5.1.js\"></script>";
    echo "<script src=\"$road/js/bootstrap.js\"></script>";
    $user_id = $_GET['user_id'];
    $user_data = get_userdata($user_id);
    $email = $user_data->user_email;
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

<!-- 导航栏 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CLBLOGS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">主页</a></li>
                <li><a href="#">管理</a></li>
                <li><a href="#">留言</a></li>
            </ul>
            <div class="pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="#">登录</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- 个人资料区 -->
<div class="container">
    <div class="row">

        <div class="col-sm-2">
            <div class="text-center">
                <img src="https://v1.alapi.cn/api/avatar?email=<?php echo $email; ?>&size=200"
                     class="img-circle text-center" width="200" height="200">
            </div>
            <div class="text-center">
                <h2><?php echo $user_data->user_login;?></h2>
                <p>User: <?php echo $user_data->user_login; ?></p>
                <p id='sex'>性别: <?php echo get_user_meta($user_id, 'sex', true); ?></p>
                <p id='birthday'>生日: <?php echo get_user_meta($user_id, 'birthday', true); ?></p>
                <p id='qq_num'>qq: <?php echo get_user_meta($user_id, 'qq_num', true); ?></p>
                <p id='wechat_num'>微信: <?php echo get_user_meta($user_id, 'wechat_num', true); ?></p>
                <p>E-mail: <?php echo $user_data->user_email; ?></p>
                <p id='phone'>手机号码：<?php echo get_user_meta($user_id, 'phone', true); ?></p>
                <p id='interests'>兴趣标签: <?php echo get_user_meta($user_id, 'interests', true); ?></p>
                <p id='introduction'>个人简介：<?php echo get_user_meta($user_id, 'introduction', true); ?></p>
            </div>
        </div>

        <div class="col-sm-2">

        </div>

        <!-- 博客展示区 -->
        <div class="col-sm-6">
            <?php
            query_posts(array('post_status' => 'publish', 'author' => $user_id));
            if (have_posts()) {
                while (have_posts()) {
                    //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                    the_post();
                    ?>
                    <div class="card">
                        <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                        <h5>副标题</h5>

                        <div class="fakeimg">
                            <img src="https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/images/Azusa.jpg" alt="Azusa"
                                 width="400">
                        </div>
                        <p><? the_author(); ?></p>
                    </div>
                    <?
                }
            } else {
                echo '没有文章可以显示';
            }
            ?>
        </div>
    </div>
</div>
</body>