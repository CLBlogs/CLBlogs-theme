<?php
require_once('../../../wp-config.php' );
require_once('../../../wp-includes/wp-db.php' );
global $wpdb;

// $Id:$ //声明变量
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if (!empty($username) && !empty($password)) { //建立连接
    $pwd = $wpdb->get_var("select user_pass from wp_users where user_login = '$username'");
    if ($password == $pwd)
    { 
        //header("Location:loginsucc.php"); //关闭数据库,跳转至loginsucc.php
        echo "<script>alert('登陆成功'); history.go(-1);</script>";
        echo "<br/> <a href='login.php'>点击返回</a>";
    }
    else
    {
        echo "<script>alert('用户名或密码错误'); history.go(-1);</script>";
    }
} else {
    echo "<script>alert('用户名或密码为空'); history.go(-1);</script>";
} ?>
