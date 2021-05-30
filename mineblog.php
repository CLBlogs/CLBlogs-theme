<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页</title>
    <!-- Bootstrap -->
    <?php
    require '../../../wp-blog-header.php';
    global $wpdb;
    $road = get_template_directory_uri();
    echo "<link href=\"$road/css/bootstrap.css\" rel=\"stylesheet\">";
    echo "<script src=\"$road/js/jquery-3.5.1.js\"></script>";
    echo "<script src=\"$road/js/bootstrap.js\"></script>";
    $user_id = $_GET["user_id"];
    $author_info = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE ID=$user_id");
    // echo $author_info->user_email;
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
        #myBtn {
    display: none; /* 默认隐藏 */
    position: fixed; 
    bottom: 20px; 
    right: 30px; 
    z-index: 99; 
    border: none;
    outline: none; 
    background-color: red; /* 设置背景颜色，你可以设置自己想要的颜色或图片 */
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
<!-- <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>我的主页</h1>
  </div> -->

<!-- 导航栏 -->
<button onclick="topFunction()" id="myBtn" title="回顶部">返回顶部</button>

<script>
// 当网页向下滑动 20px 出现"返回顶部" 按钮
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {console.log(121);
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

<!-- 横向布局 -->
<div class="container">
    <div class="row">

        <!-- 左侧导航栏 -->
        <div class="col-sm-2">
            <ul id="myTab" class="nav nav-pills nav-stacked ">
                <li class="active"><a href="#Tab1" data-toggle="tab">个人资料</a></li>
                <li><a href="#Tab2" data-toggle="tab">博客上传</a></li>
                <li><a href="#Tab3" data-toggle="tab">博客管理</a></li>
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
                        <?php echo "<img src=\"images/Rikka.jpg\"
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
                        <p>用户名: <?php echo $author_info->user_login; ?></p>
                        <p>邮箱: <?php echo $author_info->user_email; ?></p>
                    </div>
                    <!--                    <div class="text-center">-->
                    <!--                        <button class="btn btn-default" type="submit">编辑</button>-->
                    <!--                    </div>-->
                </div>

                <!-- 博客上传 -->
                <div class="tab-pane fade" id="Tab2">
                    <form action="mineblog.php?user_id=<?php echo $user_id ?>" method="post">
                        标题: <br><input type="text" name="post_title" size="30"><br>
                        摘要: <br><input type="text" name="post_excerpt" size="30"><br>
                        正文: <br><textarea name="post_content" rows="8" cols="32"></textarea><br>
                        <input type="button" value="转译"
                        onclick="javascrtpt:window.location.href='http://www.baidu.com/'" />
                        <input type="submit" value="提交">
                    </form>
                    <?php
                    $wpdb->query("SELECT * from $wpdb->posts");
                    $posts_id = $wpdb->num_rows + 1;
                    $now_date = date('Y-m-d H:i:s');
                    $APost = array(
                        "ID" => $posts_id,
                        "post_author" => $user_id,
                        "post_date" => $now_date,
                        "post_date_gmt" => $now_date,
                        "post_content" => "<p>".$_POST["post_content"]."</p>",
                        "post_excerpt" => $_POST["post_excerpt"],
                        "post_title" => $_POST["post_title"],
                        "post_status" => "publish",
                        "comment_status" => "open",
                        "post_modified" => $now_date,
                        "post_modified_gmt" => $now_date,
                        "guid" => get_bloginfo('url') . "?p=" . "$posts_id",
                        "post_type" => "post",
                        "post_name" => $_POST["post_title"]
                    );
                    $wpdb->insert($wpdb->posts, $APost);
                    //                    wp_insert_post($APost);
                    ?>
                    <!--                    <div class="card">-->
                    <!--                        <a href="#">标题1</a>-->
                    <!--                        <h5>副标题</h5>-->
                    <!--                        <div class="fakeimg">-->
                    <!--                            <img src="images/Yukino.jpg" alt="Yukino" width="400">-->
                    <!--                        </div>-->
                    <!--                        <p>Yukino</p>-->
                    <!--                        <div class="text-right">-->
                    <!--                            <button class="btn btn-default" type="submit">上传</button>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!-- <link rel="stylesheet" href="editor.md-master/css/editormd.css" />
                <div id="test-editor">
                    <textarea style="display:none;">### 关于 Editor.md

                **Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。
                    </textarea>
                </div>
                <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
                <script src="editor.md-master/editormd.min.js"></script>
                <script type="text/javascript">
                   $(function() {
                       var editor = editormd("test-editor", {
                            width  : "100px",
                            height : "400px",
                         path   : "editor.md-master/lib/"
                      });
                  });
                </script>  -->
                </div> 

                <!-- 博客管理 -->
                <div class="tab-pane fade" id="Tab3">
                    <?php
                    $posts = $wpdb->get_results("SELECT * from $wpdb->posts where post_author=$user_id");
                    foreach ($posts as $post) {
                        echo $post->post_title;
                    }
                    ?>
                    <!-- 博文1 -->
                    <div class="card">
                        <a href="#">标题1</a>
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
                            <img src="images/Yukino.jpg" alt="Yukino" width="400">
                        </div>
                        <p>Yukino</p>
                    </div>
                    <!-- 博文2 -->
                    <!--                    <div class="card">-->
                    <!--                        <a href="#">标题2</a>-->
                    <!--                        <div class="pull-right">-->
                    <!--                            <button type="button" class="btn btn-default" aria-label="Left Align">-->
                    <!--                                <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>-->
                    <!--                            </button>-->
                    <!--                        </div>-->
                    <!--                        <h5>副标题</h5>-->
                    <!---->
                    <!--                        <div class="fakeimg">-->
                    <!--                            <img src="images/Azusa.jpg" alt="Azusa" width="400">-->
                    <!--                        </div>-->
                    <!--                        <p>Azusa</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!-- 我的收藏· -->
                    <!-- <div class="tab-pane fade" id="Tab4">
                      <h2>标题1</h2>
                      <h5>副标题</h5>
                      <div class="fakeimg" >
                          <img src="images/Yukino.jpg" alt="Yukino" width="400">
                      </div>
                      <p>Yukino</p>
                      <br>
                      <h2>标题2</h2>
                      <h5>副标题</h5>
                      <div class="fakeimg">
                          <img src="images/Azusa.jpg" alt="Azusa" width="400">
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