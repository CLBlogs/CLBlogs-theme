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
    echo "<link href=\"$road/css/bootstrap.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery-3.5.1.js\"></script>";
    global $wpdb;
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

    <script>
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
            $.ajax({
                url: <? echo "\"" . $road . "/functions/addLike.php\""; ?>,
                type: "post",
                dataType: 'json',
                data: {post_id: <?php echo $post_id; ?>},
            });
            let like_number = parseInt(document.getElementById("like_number").innerText);
            like_number += 1;
            document.getElementById("like_number").innerText = like_number.toString();
        }

        function displayCollect() {
            const Collect = document.querySelector('#Collect_visible');
            const CollectActive = document.querySelector('#Collect_invisible');
            const dis = Collect.style.display;
            if (dis == 'none') {
                Collect.style.display = 'inline';
                CollectActive.style.display = 'none';
            } else {
                Collect.style.display = 'none';
                CollectActive.style.display = 'inline';
            }
        }

    </script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $road; ?>">CLBLOGS</a>
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

<div id="main_content">
    <aside>
        <div class="blogger">
            <div class="blogger_head">
                <?php echo "<a href=\"$road/otherblog.php?user_id=$author_id\">"; ?>
                <img class="blogger_head_portrait" src="https://v1.alapi.cn/api/avatar?email=<?php echo $email; ?>&size=100"
                     alt="点击进入博主主页面" class="blogger_head_portrait">
                </a>
                <div class="blogger_name">
                    <?php echo $author_data->user_login; ?>
                </div>
            </div>
            <hr class="blogger_line">
            <div class="blogger_introduction">
                <p id='sex'>性别: <?php echo get_user_meta($author_id, 'sex', true); ?></p>
                <p id='birthday'>生日: <?php echo get_user_meta($author_id, 'birthday', true); ?></p>
                <p id='qq_num'>qq: <?php echo get_user_meta($author_id, 'qq_num', true); ?></p>
                <p id='wechat_num'>微信: <?php echo get_user_meta($author_id, 'wechat_num', true); ?></p>
                <p>E-mail: <?php echo $email ?></p>
                <p id='phone'>手机号码：<?php echo get_user_meta($author_id, 'phone', true); ?></p>
                <p id='interests'>兴趣标签: <?php echo get_user_meta($author_id, 'interests', true); ?></p>
                <p id='introduction'>个人简介：<?php echo get_user_meta($author_id, 'introduction', true); ?></p>
                <p>文章: <?php the_author_posts(); ?></p>
            </div>
        </div>
        <? get_sidebar() ?>
    </aside>
    <main>
        <div class="main_head">
            <h2 class="article_title"><? the_title(); ?></h2>
            <div class="creat_information">
                <div class="article_information">
                    <a href="index.php" class="blogger_name" target="_blank"><? the_author(); ?></a>
                    <span class="creat_time"><? the_time('Y-m-d H:i:s'); ?></span>
                </div>
                <div class="article_tag">
                    <? the_tags(); ?>
                </div>
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
                        <?php echo "<img  class='tool_visible'  id= \"Thumb_visible\" alt='点赞'   src=\"$road/img/tobarThumbUp.png\">"; ?>
                        <?php echo "<img  class='tool_invisible' id= \"Thumb_invisible\" alt='已点赞' src=\"$road/img/tobarThumbUpactive.png\">"; ?>
                        <span>Approval</span>
                        <span id="like_number">
                        <?php echo number_format(getPostLikes($post_id)); ?>
                        </span>
                    </a>
                </li>
                <li class="toolbox_collection">
                    <a onclick="displayCollect()">
                        <?php echo "<img  class='tool_visible'  id= \"Collect_visible\" alt=\"收藏\" src=\"$road/img/tobarCollect.png\">"; ?>
                        <?php echo "<img  class='tool_invisible' id= \"Collect_invisible\" alt=\"已收藏\" src=\"$road/img/tobarCollectionActive.png\">"; ?>
                        <span>Collected</span>
                        <span>0
                            <!--                                    收藏数-->
                                </span>
                    </a>
                </li>
                <li class="toolbox_comment">
                    <a>
                        <?php echo "<img  class='tool_visible' id= \"Comment_visible\" alt=\"评论\" src=\"$road/img/tobarComment.png\">"; ?>
                        <?php echo "<img  class='tool_invisible' id= \"Comment_invisible\" alt=\"已评论\" src=\"$road/img/tobarCommentactive.png\">"; ?>
                        <span>Comments</span>
                        <span><?php echo $number = get_comments_number($post_id); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <? comments_template(); ?>
</div>
</div>
</main>
</div>
</body>
</html>
