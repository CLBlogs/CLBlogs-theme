<?php
// $Id:$ //声明变量
require '../../../wp-blog-header.php';
global $wpdb;
$road = get_template_directory_uri();
$user_login = isset($_POST['user_login']) ? $_POST['user_login'] : "";
$user_pass = isset($_POST['user_pass']) ? $_POST['user_pass'] : "";
$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

if ($user_pass == $re_password) {
    $sql_select = "SELECT user_login FROM wp_users WHERE user_login = '$user_login'";
    $wpdb->query($sql_select);
    $num = $wpdb->num_rows;    //统计执行结果影响的行数i
    if ($num)    //如果已经存在该用户
    {
        echo "<script>alert('用户名已存在'); history.go(-1);</script>";
    } else { //用户名不存在，插入数据 //准备SQL语句
        $wpdb->query("SELECT * FROM wp_users;");
        $nextid = $wpdb->num_rows + 1;
        $wpdb->insert("wp_users", array('ID' => $nextid,
            'user_login' => $user_login,
            'user_pass' => $user_pass,
            'user_nicename' => $user_login,
            'user_email' => $email,
            'user_registered' => date('Y-m-d H:i:s')
        ));
        echo "<script>alert('注册成功'); history.go(-1);</script>";
    }
} else {
    echo "<script>alert('两次密码不一致'); history.go(-1);</script>";
} ?>
