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
    echo "<link href=\"$road/css/bootstrap.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery-3.5.1.js\"></script>";
    echo "<script src=\"$road/js/bootstrap.js\"></script>";
    session_start();
    $user_id = $_SESSION['user_id'];
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
            <a class="navbar-brand" href="#">CLBLOGS</a>
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
                <!-- <li><a href="#Tab4" data-toggle="tab">我的收藏</a></li>  -->
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
                    <div>
                        <!--                        <p>个人简介：</p>-->
                        <!--                        <p>生日:</p>-->
                        <!--                        <p>性别:</p>-->
                        <!--                        <p>兴趣标签:</p>-->
                        <!--                        <p>手机号码：</p>-->
                        <!--                        <p>qq:</p>-->
                        <!--                        <p>微信:</p>-->
                        <!--                        <p>Email:</p>-->
                        <p>User: <?php echo $author_info->user_login; ?></p>
                        <p>E-mail: <?php echo $author_info->user_email; ?></p>
                    </div>
                    <!--                    <div class="text-center">-->
                    <!--                        <button class="btn btn-default" type="submit">编辑</button>-->
                    <!--                    </div>-->
                </div>

                <!-- 博客管理 -->
                <div class="tab-pane fade" id="Tab3">
                    <a href="page-editor.php?user_id=<? $user_id ?>">upload blog</a>
                    <!--                    --><?php
                    //                    $posts = $wpdb->get_results("SELECT * from $wpdb->posts where post_author=$user_id");
                    //                    foreach ($posts as $post) {
                    //                        echo $post->post_title;
                    //                    }
                    //                    ?>
                    <!-- 博文1 -->

                    <?php
                    if (have_posts()) {
                        while (have_posts()) {

                            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
                            the_post();

                            ?>
                            <div class="card">
                                <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                <div class="pull-right dropdown">
                                    <button type="button" class="btn dropdown-toggle btn-default" id="menu"
                                            data-toggle="dropdown" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">删除</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">修改</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5>副标题</h5>
                                <div class="fakeimg">
                                    <img src="https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/images/Yukino.jpg"
                                         alt="Yukino" width="400">
                                </div>
                                <p><? the_author(); ?></p>
                            </div>
                            <?
                        }
                    } else {
                        echo '没有文章可以显示';
                    }
                    ?>


                    <!-- 我的收藏· -->
                    <!-- <div class="tab-pane fade" id="Tab4">
                      <h2>标题1</h2>
                      <h5>副标题</h5>
                      <div class="fakeimg" >
                          <img src="https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/images/Yukino.jpg" alt="Yukino" width="400">
                      </div>
                      <p>Yukino</p>
                      <br>
                      <h2>标题2</h2>
                      <h5>副标题</h5>
                      <div class="fakeimg">
                          <img src="https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/images/Azusa.jpg" alt="Azusa" width="400">
                      </div>
                      <p>Azusa</p>
                    </div> -->
                </div>

            </div>


            <!-- 右侧部分 -->
        </div>
    </div>

    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
      <p>Powered by zzz</p>
    </div> -->

</body>
</html>