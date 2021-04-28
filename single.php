<!--<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>-->
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>博客内容</title>
    <?php
    $road = get_template_directory_uri();
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$road/css/article.css\">";
    echo "<link href=\"$road/css/bootstrap.css\" rel=\"stylesheet\">";
    global $wpdb;
    // $author_info = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$user_id");

    //$author = $wpdb->;
    $email = get_the_author_meta( 'user_email' );
    ?>
    <script>
        function displayThump()
        {   const Thumb=document.querySelector('#Thumb_visible');
            const ThumbActive=document.querySelector('#Thumb_invisible');
            const dis=Thumb.style.display;
            if(dis=='none')
            {
                Thumb.style.display='inline';
                ThumbActive.style.display='none';
            }
            else{
                Thumb.style.display='none';
                ThumbActive.style.display='inline';
            }

        }
        function displayCollect()
        {   const Collect=document.querySelector('#Collect_visible');
            const CollectActive=document.querySelector('#Collect_invisible');
            const dis=Collect.style.display;
            if(dis=='none')
            {
                Collect.style.display='inline';
                CollectActive.style.display='none';
            }
            else{
                Collect.style.display='none';
                CollectActive.style.display='inline';
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
            <a class="navbar-brand" href="#">CLBLOGS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">主页</a></li>
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
<!--                --><?php //echo"<a href=\"$road/otherblog.php\">";?>
<!--                <img class="blogger_head_portrait" src="https://v1.alapi.cn/api/avatar?email=--><?// $email ?><!--&size=100" alt="点击进入博主主页面" class="blogger_head_portrait">-->
<!--                </a>-->
                <div class="blogger_name">
                    博主名
                  </div>
            </div>
            <hr class="blogger_line">
            <div class="blogger_introduction">博主的介绍或其他
                <p>文章: <?php the_author_posts(); ?></p>
            </div>
        </div>
        <?get_sidebar()?>
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
                    <? the_tags();?>
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
                            <a onclick="displayThump()" >
                                <?php echo "<img  class='visible'  id= \"Thumb_visible\" alt='点赞'   src=\"$road/img/tobarThumbUp.png\">";?>
                                <?php echo "<img  class='invisible' id= \"Thumb_invisible\" alt='已点赞' src=\"$road/img/tobarThumbUpactive.png\">";?>
                                <span >点赞</span>
                                <span >0
<!--                                    点赞数-->
                                </span>
                            </a>
                        </li>
                        <li class="toolbox_collection">
                            <a onclick="displayCollect()">
                                <?php echo "<img  class='visible'  id= \"Collect_visible\" alt=\"收藏\" src=\"$road/img/tobarCollect.png\">";?>
                                <?php echo "<img  class='invisible' id= \"Collect_invisible\" alt=\"已收藏\" src=\"$road/img/tobarCollectionActive.png\">";?>
                                <span >收藏</span>
                                <span >0
<!--                                    收藏数-->
                                </span>
                            </a>
                        </li>
                        <li class="toolbox_comment">
                            <a >
                                <?php echo "<img  class='visible' id= \"Comment_visible\" alt=\"评论\" src=\"$road/img/tobarComment.png\">";?>
                                <?php echo "<img  class='invisible' id= \"Comment_invisible\" alt=\"已评论\" src=\"$road/img/tobarCommentactive.png\">";?>
                                <span >评论</span>
                                <span ><?php  $id = get_the_ID();
                                   echo $number = get_comments_number( $id );?>

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
