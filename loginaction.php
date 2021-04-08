<?php
// $Id:$ //声明变量
require '../../../wp-blog-header.php';
global $wpdb;
$road = get_template_directory_uri();
$user_login = isset($_POST['user_login']) ? $_POST['user_login'] : "";
$user_pass = isset($_POST['user_pass']) ? $_POST['user_pass'] : "";
$remember = isset($_POST['remember']) ? $_POST['remember'] : ""; //判断用户名和密码是否为空
if (!empty($user_login) && !empty($user_pass)) { //建立连接
    $pwd = $wpdb->get_var("select user_pass from wp_users where user_login = '$user_login'");

    if ($user_pass == $pwd) {
        $user_id = $wpdb->get_var("select ID from wp_users where user_login = '$user_login'");
        echo "<script>alert('登陆成功'); 
        //        history.go(-1);
        
                window.location.href=\"$road/mineblog.php?user_id=$user_id\";
                </script>";
    } else {
        echo "<script>alert('用户名或密码错误'); history.go(-1);</script>";
    }
} else {
    echo "<script>alert('用户名或密码为空'); history.go(-1);</script>";
}
?>
    