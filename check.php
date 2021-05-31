<?php
//用来检查是否登录，用$_SESSION['user_id']来记录该网页是否登录
require '../../../wp-blog-header.php';
global $wpdb;
$road = get_template_directory_uri();
session_start();
//假设之前没有登录...
//unset ($_SESSION['user_id']);
if (empty($_SESSION['user_id']))//没有登陆
{
    //echo "您还未登录!";
    if (empty($_COOKIE['user_login']) || empty($_COOKIE['user_pass'])) {//在该网址未保存过密码
        $_SESSION['user_id'] = ' ';
//        echo "您从未登陆过。";
    } else {//保存过密码，使用该密码登录，记录session
//        echo "您之前登陆过，已自动为您登录~";
        $user_login = $_COOKIE['user_login'];
        $user_id = $wpdb->get_var("select ID from wp_users where user_login = '$user_login'");
        $_SESSION['user_id'] = $user_id;//记录是否登录
    }
} else {
    //登陆了，继续访问
//    echo "已登录,正在为您加载页面~";
}