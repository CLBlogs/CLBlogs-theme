<?php
// $Id:$ //声明变量
require '../../../wp-blog-header.php';
$road = get_template_directory_uri();
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

if ($password == $re_password) { //建立连接
    $conn = mysqli_connect("localhost", "test7_fnsflm_xy", "yBkS8icDP8", "test7_fnsflm_xy"); //准备SQL语句,查询用户名
    $sql_select = "SELECT username FROM b_user WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);

    $num = mysqli_num_rows($ret);	//统计执行结果影响的行数i
    if($num)	//如果已经存在该用户
    {
        echo "<script>alert('用户名已存在'); history.go(-1);</script>";
    }
    else { //用户名不存在，插入数据 //准备SQL语句
        $sql_insert = "INSERT INTO b_user(id,username,password,email) VALUES(uuid_short(),'$username','$password','$email')"; //执行SQL语句
        mysqli_query($conn, $sql_insert);
        echo "<script>alert('注册成功'); history.go(-1);</script>";
    } //关闭数据库
    mysqli_close($conn);
}
else {
    echo "<script>alert('两次密码不一致'); history.go(-1);</script>";
} ?>
