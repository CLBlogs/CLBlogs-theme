<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' id='skeleton-css'
          href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/skeleton.css?ver=5.7'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='base-css'
          href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/base.css?ver=5.7' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='theme-style-css'
          href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/theme-style.css?ver=5.7'
          type='text/css' media='all'/>
    <?php
    // require '../../../wp-blog-header.php';
    global $wpdb;
    $road = get_template_directory_uri();
    $emotion = $road . "/img/emotion/";
    //echo $road;
    $articleId = get_the_ID();
    //echo $id;

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
                    //连接blog数据库
                    $conn = mysqli_connect("localhost", "test3_fnsflm_xy", "65ksKYZxKX");
                    if (!$conn) {
                        die("数据库连接失败！");
                    }
                    mysqli_select_db($conn, "test3_fnsflm_xy");
                    mysqli_query($conn, "set names utf8");
                    //查询获取wp_comments表中所有评论数据
                    $sql = "select * from wp_comments where comment_post_ID=" . $articleId;
                    $rst = mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($rst);

                    ?>
                    <h2 class="comments-title">
                        <span>有<?php echo $rows ?>条评论</span>
                    </h2>
                    <?php
                    //动态加载所有0级评论
                    while ($arr = mysqli_fetch_assoc($rst)) {
                        if ($arr['comment_parent'] == 0) {
                            ?>

                            <!-- 评论列表 -->
                            <ol class="comment-list">
                                <li id="comment-1" class="comment even thread-even depth-1">
                                    <article id="div-comment-1" class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <b class="fn"><a href='#' rel='external nofollow ugc'
                                                                 class='url'><?php echo $arr['comment_author']; ?></a></b><span
                                                        class="says">说道：</span>
                                            </div><!-- .comment-author -->
                                            <div class="comment-metadata">
                                                <time datetime="2021-03-07T15:48:41+00:00"><?php echo $arr['comment_date']; ?></time>
                                            </div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <?php
                                            $comment_content = $arr['comment_content'];
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
                                                              onclick="replication(<?php echo $arr['comment_ID']; ?>,'<?php echo $arr['comment_author']; ?>')">回复</a>
                                        </div>

                                        <!-- 动态加载回复 -->
                                        <?php
                                        //动态加载所有子评论
                                        $subRst = mysqli_query($conn, $sql);
                                        while ($subArr = mysqli_fetch_assoc($subRst)) {
                                            if ($subArr['comment_parent'] == $arr['comment_ID']) {
                                                ?>
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <b class="fn"><a href='#' rel='external nofollow ugc'
                                                                         class='url'>&nbsp;&nbsp;&nbsp;<?php echo $subArr['comment_author']; ?></a></b><span
                                                                class="says">说道：</span>
                                                    </div><!-- .comment-author -->
                                                    <div class="comment-metadata">
                                                        <time datetime="2021-03-07T15:48:41+00:00">
                                                            &nbsp;&nbsp;&nbsp;<?php echo $subArr['comment_date']; ?></time>
                                                    </div><!-- .comment-metadata -->
                                                </footer><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    &nbsp;&nbsp;&nbsp; <?php
                                                    $sub_comment_content = $subArr['comment_content'];
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
                        <?php }
                    } ?>

                    <!-- 发表评论/回复 -->
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">发表评论</h3>
                        <p class="logged-in-as"><a href="#" aria-label="已登录为test2。编辑您的个人资料。">已登录为jiangchen</a>。<a
                                    href="#">注销？</a></p>
                        <form action=<?php echo $road . "/controller.php" ?> method="post" id="commentform"
                              class="comment-form" novalidate>
                            <p class="logged-in-as"></p>
                            <p class="comment-form-comment">
                                <label for="comment" style="float: left">评论</label><a id="quxiaohuifu" rel='nofollow'
                                                                                      class='comment-reply-link'
                                                                                      href='#reply-title'
                                                                                      style="display:none"
                                                                                      onclick="noReplication()">&nbsp;取消回复</a>
                                <input id="huifuid" type="text" name="hfId" value="pinglun" style="display: none"/>

                                <input id="currentUrl" type="text" name="cUrl" value="currentUrl" style="display:none" />
                                <input id="artilcId" type="text" name="aId" value=<?php echo $articleId; ?> style="display:none" />
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
    document.getElementById("currentUrl").value=$test;
    document.getElementById("articleId").value=
    function replication(id, name) {
        document.getElementById("reply-title").innerHTML = "回复给" + name;
        document.getElementById("huifuid").value = id;
        document.getElementById("quxiaohuifu").style.display = "block";
    }

    function noReplication() {
        document.getElementById("reply-title").innerHTML = "发表评论";
        document.getElementById("huifuid").value = "pinglun";
        document.getElementById("quxiaohuifu").style.display = "none";
    }

    function insertImg(id) {
        document.getElementById("comment").value += "&" + id + ".gif";

    }
</script>
</html>
				
				