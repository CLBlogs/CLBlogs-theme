<?php
// $Id:$ //声明变量
require '../../../wp-blog-header.php';
global $wpdb;
$road = get_template_directory_uri();
$user_login = isset($_POST['user_login']) ? $_POST['user_login'] : "";
$user_pass = isset($_POST['user_pass']) ? $_POST['user_pass'] : "";
$remember = isset($_POST['remember']) ? $_POST['remember'] : ""; //判断用户名和密码是否为空
if (!empty($user_login)) {
    if (!empty($user_pass)) {
        $pwd = $wpdb->get_var("select user_pass from wp_users where user_login = '$user_login'");
        if ($pwd == $user_pass) {
            if (!empty($remember)) {//记住密码
                setcookie("user_login", $user_login, time() + 30 * 24 * 3600, '/');
                setcookie("user_pass", $user_pass, time() + 30 * 24 * 3600, '/');

            } else {//不记住密码~
                setcookie("user_login", $user_login, time() + 3600, '/');
                setcookie("user_pass", $user_pass, time() + 3600, '/');
            }
            $uri = $_COOKIE['uri'];
            $user_id = $wpdb->get_var("select ID from wp_users where user_login = '$user_login'");
            //setcookie("user_id",$user_id,time() + 30 * 24 *3600);
            session_start();
            $_SESSION['user_id'] = $user_id;//记录是否登录

            //echo $uri;
            if (empty($uri)) {//就是从首页来的进入个人主页。
                echo "<script>
                window.location.href=\"$road/mineblog.php\";
                </script>";
            } else {//如果是从其他页面进入那就跳转，还没有测试，else这里进不来，因为$_COOKIE['uri']一直都是空的
                echo $uri;
                echo "<script>
                    window.location.href=\"$uri\";
                </script>";
            }
        } else
            echo "<script>alert('用户名或密码错误'); history.go(-1);</script>";
    } else
        echo "<script>alert('密码不能为空！'); history.go(-1);</script>";
} else
    echo "<script>alert('用户名不能为空！'); history.go(-1);</script>";
    