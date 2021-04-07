<?php
require_once('../../../wp-config.php' );
require_once('../../../wp-includes/wp-db.php' );
global $wpdb;

// $Id:$ //声明变量
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

if ($password == $re_password) { //建立连接
    $un = $wpdb->get_var( "SELECT user_login FROM wp_users WHERE user_login = '$username'"); //执行SQL语句
    
    if($un)	//如果已经存在该用户
    {
        echo "<script>alert('用户名已存在'); history.go(-1);</script>";
    }
    else { //用户名不存在，插入数据 //准备SQL语句
        $wpdb->insert('wp_users',array('ID' => uniqid(rand(1000,9999),true), 'user_login' => $username , 'user_pass' => $password , 'user_email' => $email));
        echo "<script>alert('注册成功'); history.go(-1);</script>";
    } 
}
else {
    echo "<script>alert('两次密码不一致'); history.go(-1);</script>";
} ?>
