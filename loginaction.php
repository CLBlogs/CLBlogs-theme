<?php
// $Id:$ //声明变量
require '../../../wp-blog-header.php';
$road = get_template_directory_uri();
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$remember = isset($_POST['remember']) ? $_POST['remember'] : ""; //判断用户名和密码是否为空
if (!empty($username) && !empty($password)) { //建立连接
    $conn = mysqli_connect('localhost', 'test7_fnsflm_xy', 'yBkS8icDP8', 'test7_fnsflm_xy'); //准备SQL语句
    $sql_select = "SELECT username,password FROM b_user WHERE username = '$username' AND password = '$password'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
    if ($username == $row['username'] && $password == $row['password']) { //选中“记住我”
        /*if ($remember == "on")
        { //创建cookie
            setcookie("", $username, time() + 7 * 24 * 3600);
        } //开启session
        session_start(); //创建session
        $_SESSION['user'] = $username; //写入日志
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d H:m:s');
        $info = sprintf("当前访问用户：%s,IP地址：%s,时间：%s /n", $username, $ip, $date);
        $sql_logs = "INSERT INTO logs(username,ip,date) VALUES('$username','$ip','$date')";
        //日志写入文件，如实现此功能，需要创建文件目录logs
        $f = fopen('./logs/' . date('Ymd') . '.log', 'a+');
        fwrite($f, $info);
        fclose($f);*/
        //跳转到loginsucc.php页面
        //header("Location:loginsucc.php"); //关闭数据库,跳转至loginsucc.php
        echo "<script>alert('登陆成功'); history.go(-1);</script>";
        echo "<br/> <a href=\"$road/login.php\">点击返回</a>";
        mysqli_close($conn);
    } else {

        echo "<script>alert('用户名或密码错误'); history.go(-1);</script>";
    }
} else {
    echo "<script>alert('用户名或密码为空'); history.go(-1);</script>";
} ?>

