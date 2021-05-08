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
    global $wpdb;
    // $author_info = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$user_id");

    //$author = $wpdb->;
    $email = get_the_author_meta( 'user_email' );
    $uri = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    setcookie("uri",$uri,time() + 30 * 24 *3600,'/');
    session_start();
    ?>

</head>
<body>
<nav>
    <a href="/">首页</a>
</nav>
<div id="main_content">
    <aside>
        <div class="blogger">
            <div class="blogger_head">
<!--                --><?php //echo"<a href=\"$road/otherblog.php\">";?>
<!--                <img class="blogger_head_portrait" src="https://v1.alapi.cn/api/avatar?email=--><?// $email ?><!--&size=100" alt="点击进入博主主页面" class="blogger_head_portrait">-->
<!--                </a>-->
                <div class="blogger_name">
                  博主昵称
                  </div>
            </div>
            <hr class="blogger_line">
            <div class="blogger_introduction">博主的介绍或其他</div>
        </div>
        <!--        <div class="recommend">-->
        <!--            <h3>-->
        <!--                主题推荐-->
        <!--            </h3>-->
        <!--            <div class="recommend_three">-->
        <!--                <ol>-->
        <!--                    <li id="recommed_first">点赞最多</li>-->
        <!--                    <li id="recommed_second">点赞一般</li>-->
        <!--                    <li id="recommed_third">点赞最少</li>-->
        <!--                </ol>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="blogger_other_article">-->
        <!--            <h3>-->
        <!--                博主其他文章推荐-->
        <!--            </h3>-->
        <!--            <div class="blogger_other_article_three">-->
        <!--                <ol>-->
        <!--                    <li id="blogger_other_article_first">点赞最多</li>-->
        <!--                    <li id="blogger_other_article_second">点赞一般</li>-->
        <!--                    <li id="blogger_other_article_third">点赞最少</li>-->
        <!--                </ol>-->
        <!--            </div>-->
        <!--        </div>-->
    </aside>
    <main>
        <div class="main_head">
            <h2 class="article_title"><? the_title(); ?></h2>
            <div class="creat_information">
                <div class="article_information">
                    <a href="index.php" class="blogger_name" target="_blank"><? the_author(); ?></a>
                    <span class="creat_time"><? the_time('Y-m-d H:i:s'); ?></span>
                </div>
                <!--                <div class="article_tag">-->
                <!--                        <span class="article_tag_label">-->
                <!--                            文章标签：-->
                <!--                        </span>-->
                <!--                    <a href="index.php" target="_blank">标签1</a>-->
                <!--                    <a href="index.php" target="_blank">标签2</a>-->
                <!--                    <a href="index.php" target="_blank">标签3</a>-->
                <!--                </div>-->
            </div>
        </div>
        <article>
            <div class="blogs_content">
                <? the_content(); ?>
                <!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae numquam maiores, illo tenetur iste,-->
                <!--                    magni minima quos aspernatur exercitationem, ex aperiam fugiat qui repellat cupiditate perferendis-->
                <!--                    modi explicabo ullam at.</p>-->
                <!--                <p>Soluta officiis aspernatur esse eius incidunt nostrum quos ullam id architecto officia porro, aperiam-->
                <!--                    quam sapiente a optio voluptatibus? Quisquam, ullam et. Omnis, earum. Veniam sequi id ab cupiditate-->
                <!--                    amet!</p>-->
                <!--                <p>Enim dicta optio ea iste architecto quas, qui necessitatibus animi neque? Animi velit, minus illum-->
                <!--                    amet eaque recusandae ducimus odit eveniet nesciunt laborum perspiciatis eligendi impedit.-->
                <!--                    Doloremque minus numquam veniam.</p>-->
                <!--                <p>Optio neque facilis hic nulla odio ut modi molestiae perferendis. Voluptas velit distinctio, maiores-->
                <!--                    odio similique et sunt numquam, voluptates nesciunt quas, cumque doloremque esse cum facilis? Nisi,-->
                <!--                    fugit quam.</p>-->
                <!--                <p>Optio voluptatum doloremque blanditiis! Repellendus nihil vero quo quae distinctio, quasi, magni-->
                <!--                    minima sed nulla dignissimos rerum laudantium, tempora dolore debitis. Dolorem quidem officiis ex-->
                <!--                    eum illum corporis atque praesentium.</p>-->
                <!--                <p>Debitis excepturi nobis id, neque aspernatur dolorem quas in laborum ducimus minus fugit enim rem-->
                <!--                    temporibus hic, quis pariatur culpa reprehenderit aut dolore dolores eius voluptates repellat-->
                <!--                    perspiciatis. Neque, a.</p>-->
                <!--                <p>Non at aut totam architecto debitis voluptatum, iure repellat ratione enim fugit magni ducimus beatae-->
                <!--                    ut iusto quam. Natus unde in explicabo perferendis totam numquam ipsum, praesentium cupiditate-->
                <!--                    veniam repellendus!</p>-->
                <!--                <p>Fuga, debitis. Voluptates quibusdam ipsa odio molestiae enim eum repellat illum nulla tempore?-->
                <!--                    Architecto ipsa, numquam nam dolor debitis nostrum similique doloribus repellat expedita pariatur-->
                <!--                    doloremque unde suscipit odit nobis.</p>-->
            </div>
        </article>
        <!--        <div class="toolbox">-->
        <!--            <ul class="toolbox_one">-->
        <!--                <li class="toolbox_Thumb">-->
        <!--                    <a>-->
        <!--                        <img style="display:inline-block" src="img/tobarThumbUp.png" alt="点赞" class="tobarThumbUp">-->
        <!--                        <img style="display: none;" src="img/tobarThumbUpactive.png" alt="已赞"-->
        <!--                             class="tobarThumbUpactive">-->
        <!--                        <span class="tobarThumbup_text">点赞</span>-->
        <!--                        <span class="count" id="spanCount"></span>-->
        <!--                    </a>-->
        <!--                </li>-->
        <!--                <li class="toolbox_collection">-->
        <!--                    <a>-->
        <!--                        <img style="display:inline-block" src="img/tobarCollect.png" alt="收藏" class="tobarThumbUp">-->
        <!--                        <img style="display: none;" src="img/tobarCollectionActive.png" alt="yishouc"-->
        <!--                             class="tobarThumbUpactive">-->
        <!--                        <span class="tobarCollection_text">收藏</span>-->
        <!--                        <span class="count" id="spanCount"></span>-->
        <!--                    </a>-->
        <!--                </li>-->
        <!--                <li class="toolbox_comment">-->
        <!--                    <a href="#mycomment">-->
        <!--                        <img style="display:inline-block" src="img/tobarComment.png" alt="评论" class="tobarThumbUp">-->
        <!--                        <img style="display: none;" src="img/tobarThumbUpactive.png" alt="已评论"-->
        <!--                             class="tobarThumbUpactive">-->
        <!--                        <span class="tobarComment_text">评论</span>-->
        <!--                        <span class="count" id="spanCount"></span>-->
        <!--                    </a>-->
        <!--点击评论，会定位到评论的位置-->
        <!--                </li>-->
        <!--            </ul>-->
        <!--        </div>-->

        <!--        <div class="commentArea">   -->
        <!--评论区  合并的时候把输入框的id值替换上面的#mycomment-->
        <!--                <textarea name="mycomment" id="mycomment" placeholder="在这里留下你的想法"></textarea>          -->
        <!--            <div class="commentArea_one">-->
        <!--                <tr>-->
        <!--                    <td> 已发布评论</td>-->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!--                    <div align="center">-->
        <!--                        <table>-->
        <!--                            <td><input type="button" value="用户"></td>-->
        <!--                            <br/>-->
        <!--                            <td>-->
        <!--                                <textarea cols="300" rows="4" id="txt"></textarea>-->
        <!--                            </td>-->
        <!--                            </tr>-->
        <!---->
        <!--                        </table>-->
        <!--                    </div>-->
        <!--                    <div align="right">-->
        <!--                        <input type="button" value="评论">-->
        <!--                        <input type="button" value="点赞">-->
        <!--                    </div>-->
        <!---->
        <!---->
        <!--                    <div align="center">-->
        <!--                        <table>-->
        <!--                            <td><input type="button" value="用户"></td>-->
        <!--                            <br/>-->
        <!--                            <td>-->
        <!--                                <textarea cols="300" rows="4" id="txt"></textarea>-->
        <!--                            </td>-->
        <!--                            </tr>-->
        <!--                        </table>-->
        <!---->
        <!--                    </div>-->
        <!--                    <div align="right">-->
        <!--                        <input type="button" value="评论">-->
        <!--                        <input type="button" value="点赞">-->
        <!--                    </div>-->
        <!---->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!--                    <br/>-->
        <!---->
        <!---->
        <!--            </div>-->
        <!--            <br/>-->
        <!--            <br/>-->
        <!---->
        <!--            <td> 个人评论</td>-->
        <!--            <div align="center">-->
        <!--                </form>-->
        <!--                <br/>-->
        <!--                <form action="#" method="post">-->
        <!--                                -->
        <!--                                <textarea id="mycomment" cols="300" rows="8" placeholder="留下你的想法"> -->
        <!--                                    </textarea>-->
        <!--                    <br/>-->
        <!--                    <div align="right">-->
        <!--                        <input type="submit" value="发布"/>-->
        <!--                    </div>-->
        <!--            </div>-->
        <!--            </form>-->
        <!--        </div>-->
        <?php 
            comments_template(); ?>
</div>
</div>
</main>
</div>
</body>
</html>
