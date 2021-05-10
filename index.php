<!DOCTYPE html>
<html lang="en">

<head>
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
    setcookie("uri", ' ', time() - 1, '/');
    ?>
    <title>CLBlogs</title>
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
                        <li><a id="shouye" href="/">Home</a></li>
                        <!--                        <li><a id="guidang" href="#">归档</a></li>-->
                        <!--                        <li><a id="liuyan" href="#">留言</a></li>-->
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
            if (empty($_COOKIE['user_login'])) {
                echo "<li><a id='denglu' href=\"$road/login.php\">sign in / sign up</a></li>";
            } else {
                echo "<li><a id='denglu' href='$road/mineblog.php'>Personal Center</a></li>";
            }
            ?>
        </ul>
    </div>
    <div id="main-contain" class="hero">
        <div id="main" class="main">
            <div id="side_left" class="side-left card-list side-bar">
                <div id="cnblog_b1" class="sidebar-image"></div>
                <div id="sidebar_bh" class="sidebar-bh"></div>
                <div class="card">
                    <h4 class="card-title"><a href="#">Recommendations</a></h4>
                    <ul>
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
                    </ul>
                </div>
            </div>
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
                                        <a class="post-item-title"
                                           href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                        <p class="post-item-summary">
                                            <a href="<?php echo the_permalink()/*."?author=".the_author()*/
                                            ; ?>"><?php echo "<img class=\"avatar\" src=\"$road/img/photo_test.png\">"; ?>
                                                <? the_excerpt(); ?>
                                                <br>
                                            </a>
                                        </p>
                                    </div>
                                    <footer id="post-item-foot-1" class="post-item-foot">
                                        <span class="post-meta-item"><? the_date(); ?>
                                        </span>
                                        <a class="post-meta-iten" href="#">
                                            <i class="glyphicon glyphicon-glyphicon-user"></i>
                                            <span>author：<? the_author(); ?></span>

                                        </a>
                                        <a class="post-meta-iten" href="">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <span>time：<? the_time('Y-m-d'); ?></span></a>

<!--                                        <a class="post-meta-iten" href="#">-->
<!--                                            <i class="glyphicon glyphicon-eye-open"></i>-->
<!--                                            <span>--><?// edit_post_link(__('Edit', 'zhangchongen'), ' <span>|</span> ', ''); ?><!--</span>-->
<!--                                        </a>-->
                                        <a class="post-meta-iten" href="">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                            <span>
                                                <?php
                                                echo ' views';
                                                echo number_format(getPostViews(get_the_ID()));
                                                ?>
                                            </span>
                                        </a>
                                        <a class="post-meta-iten">
                                            <i class="glyphicon glyphicon-thumbs-up"></i>
                                            <span>approvals: <?php
                                                global $post;
                                                $like_num = get_user_meta($post->post_author, 'likes', true);
                                                echo empty($like_num)?0:$like_num;
                                                ?>
                                            </span>
                                        </a>
                                    </footer>
                                </section>
                            </article>
                            <?
                        }
                    } else {
                        echo 'No blog here';
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