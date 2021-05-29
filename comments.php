<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' id='skeleton-css'
          href='https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/css/skeleton.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='base-css'
          href='https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/css/base.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='theme-style-css'
          href='https://cdn.jsdelivr.net/gh/fnsflm/myPicbed/clblogs/css/theme-style.css'
          type='text/css' media='all'/>
    <?php
    //     require 'wp-blog-header.php';
    global $wpdb;
    $road = get_template_directory_uri();
    $emotion = $road . "/img/emotion/";
    $articleId = get_the_ID();
    // echo $_COOKIE['uri'];
    //    session_start();
    ?>

</head>
<body>
<div class="content">
    <div class="content-container">
        <div class="container">
            <div id="primary" class="content-area article">
                <div id="comments" class="comments-area">

                    <!-- 连接数据库，动态加载评论 -->
                    <?php
                    //查询获取wp_comments表中所有评论数据
                    $sql = "select * from wp_comments where comment_post_ID=" . $articleId;
                    $rst = $wpdb->get_results($sql);
                    $rows = $wpdb->num_rows;
                    ?>
                    <h2 class="comments-title">
                        <span>There are <?php echo $rows ?> comments !</span>
                    </h2>
                    <?php
                    //动态加载所有0级评论
                    foreach ($rst as $arr) {
                        if ($arr->comment_parent == 0) {
                            ?>

                            <!-- 评论列表 -->
                            <ol class="comment-list">
                                <li id="comment-1" class="comment even thread-even depth-1">
                                    <article id="div-comment-1" class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <b class="fn"><a href='#' rel='external nofollow ugc'
                                                                 class='url'><?php echo $arr->comment_author ?></a></b><span
                                                        class="says">said：</span>
                                            </div><!-- .comment-author -->
                                            <div class="comment-metadata">
                                                <time datetime="2021-03-07T15:48:41+00:00"><?php echo $arr->comment_date ?></time>
                                            </div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <?php
                                            $comment_content = $arr->comment_content;
                                            while ($comment_content) {
                                                if ($i = strpos($comment_content, ".gif")) {
                                                    $l = strpos($comment_content, "&");
                                                    echo substr($comment_content, 0, $l);
                                                    $number = substr($comment_content, $l + 1, $i - $l - 1);
                                                    $commentSrc = $emotion . $number . ".gif";
                                                    ?>
                                                    <img src="<?php echo $commentSrc; ?>"/>
                                                    <?php
                                                    $comment_content = substr($comment_content, $i + 4);
                                                } else {
                                                    echo $comment_content;
                                                    break;
                                                }
                                            }
                                            ?>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a rel='nofollow' class='comment-reply-link'
                                                              href='#reply-title'
                                                              onclick="replication(<?php echo $arr->comment_ID; ?>,'<?php echo $arr->comment_author; ?>')">回复</a>
                                        </div>

                                        <!-- 动态加载回复 -->
                                        <?php
                                        //动态加载所有子评论
                                        // $subRst = mysqli_query($conn, $sql);
                                        $subRst = $wpdb->get_results($sql);
                                        foreach ($subRst as $subArr) {
                                            if ($subArr->comment_parent == $arr->comment_ID) {
                                                ?>
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <b class="fn"><a href='#' rel='external nofollow ugc'
                                                                         class='url'>&nbsp;&nbsp;&nbsp;<?php echo $subArr->comment_author; ?></a></b><span
                                                                class="says">said：</span>
                                                    </div><!-- .comment-author -->
                                                    <div class="comment-metadata">
                                                        <time datetime="2021-03-07T15:48:41+00:00">
                                                            &nbsp;&nbsp;&nbsp;<?php echo $subArr->comment_date; ?></time>
                                                    </div><!-- .comment-metadata -->
                                                </footer><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    &nbsp;&nbsp;&nbsp; <?php
                                                    $sub_comment_content = $subArr->comment_content;
                                                    while ($sub_comment_content) {
                                                        if ($m = strpos($sub_comment_content, ".gif")) {
                                                            $n = strpos($sub_comment_content, "&");
                                                            echo substr($sub_comment_content, 0, $n);
                                                            $sub_number = substr($sub_comment_content, $n + 1, $m - $n - 1);
                                                            $sub_commentSrc = $emotion . $sub_number . ".gif";
                                                            ?>
                                                            <img src="<?php echo $sub_commentSrc; ?>"/>
                                                            <?php
                                                            $sub_comment_content = substr($sub_comment_content, $m + 4);
                                                        } else {
                                                            echo $sub_comment_content;
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </div><!-- .comment-content -->
                                            <?php }
                                        } ?>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                            </ol><!-- .comment-list -->
                        <? }
                    } ?>

                    <!-- 发表评论/回复 -->
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Post A Comment</h3>
                        <p class="logged-in-as">
                            <?php
                            if (empty($_SESSION['user_id']))//没有登陆
                            {
                                echo "<a href=\"$road/login.php\" id=\"statement\">。</a>";
                            } else {
                                $sql = "select * from wp_users where ID=" . $_SESSION['user_id'];
                                $rst = $wpdb->get_results($sql);
                                foreach ($rst as $arr) {
                                    echo "<a href=\"$road/mineblog.php\" id=\"statement\">Hello " . $arr->user_login . "。</a>";
                                }
                            }
                            ?>
                            <?php
                            if (empty($_SESSION['user_id'])) {  //没有登陆
                                echo "<a id='stateAction' href='$road/login.php'>Login?</a>";
                            } else {
                                echo "<a id='stateAction' href='' onclick='cancellation()'>Logout?</a>";
                            }
                            ?>
                        </p>
                        <form action=<?php echo $road . "/controller.php" ?> method="post" id="commentform"
                              class="comment-form" novalidate>
                            <p class="logged-in-as"></p>
                            <p class="comment-form-comment">
                                <label for="comment" style="float: left">Comment</label><a id="quxiaohuifu" rel='nofollow'
                                                                                      class='comment-reply-link'
                                                                                      href='#reply-title'
                                                                                      style="display:none"
                                                                                      onclick="noReplication()">&nbsp;Cancel Reply</a>
                                <input id="huifuid" type="text" name="hfId" value="pinglun" style="display: none"/>

                                <input id="currentUrl" type="text" name="cUrl" value="currentUrl" style="display:none"/>
                                <input id="currentStatement" type="text" name="cState" value=
                                <?php
                                if (empty($_SESSION['user_id']))//没有登陆
                                {
                                    echo "游客";
                                } else {
                                    $sql = "select * from wp_users where ID=" . $_SESSION['user_id'];
                                    $rst = $wpdb->get_results($sql);
                                    foreach ($rst as $arr) {
                                        echo $arr->user_login;
                                    }
                                }
                                ?>
                                style="display:none"/>
                                <input id="artilcId" type="text" name="aId"
                                       value=<?php echo $articleId; ?> style="display:none"/>
                                <textarea id="comment" name="comment" placeholder="来说点什么吧~" cols="45" rows="8"
                                          maxlength="65525" required="required"></textarea>
                                <?php
                                for ($i = 1; $i <= 112; $i++) {
                                    $strI = (string)$i;
                                    $strSrc = $emotion . $strI . ".gif";
                                    ?>
                                    <img src="<?php echo $strSrc; ?>" onclick="insertImg(<?php echo $strI; ?>)"/>
                                <?php } ?>
                            </p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                                          value="发表评论" style="float: right"/></p>
                        </form>
                    </div><!-- #respond -->
                </div><!-- #comments -->
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    var $test = window.location.href;
    document.getElementById("currentUrl").value = $test;

    function replication(id, name) {
        document.getElementById("reply-title").innerHTML = "Reply to " + name;
        document.getElementById("huifuid").value = id;
        document.getElementById("quxiaohuifu").style.display = "block";
    }

    function noReplication() {
        document.getElementById("reply-title").innerHTML = "Post A Comment";
        document.getElementById("huifuid").value = "pinglun";
        document.getElementById("quxiaohuifu").style.display = "none";
    }

    function insertImg(id) {
        document.getElementById("comment").value += "&" + id + ".gif";
    }

    //读取cookies
    function getCookie(name) {
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

        if (arr = document.cookie.match(reg))

            return (arr[2]);
        else
            return null;
    }

    function cancellation() {
        // if (document.getElementById("stateAction").innerHTML == "注销？") {
        //     alert("注销成功！");
        //     document.getElementById("statement").innerHTML = "当前为游客状态。";
        //     document.getElementById("stateAction").innerHTML = "登录？";
        //     document.getElementById("currentStatement").value = "游客";
        //     document.getElementById("stateAction").href = "#";
        // } else {
        //     document.getElementById("stateAction").href = "/wp-content/themes/CLBlogs-theme/login.php";
        //     //document.
        // }
        var user_login_val = getCookie("user_login");
        var user_pass_val = getCookie("user_pass");
        var exp = new Date();
        exp.setTime(exp.getTime() - 1);
        document.cookie = "user_login="+user_login_val+";expires=" + exp.toUTCString();
        document.cookie = "user_pass="+user_pass_val+";expires=" + exp.toUTCString();
        console.log(user_login_val);
        console.log(user_pass_val);
        console.log(exp.toUTCString());
        alert("Logout Successfully");
        location.reload();
    }
</script>
</html>
				
				