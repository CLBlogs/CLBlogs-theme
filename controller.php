<?php
    //连接blog数据库
    $conn=mysqli_connect("localhost","root","123456");
    if(!$conn){
        die("数据库连接失败！");
    }
    mysqli_select_db($conn,"blog");
    mysqli_query($conn,"set names utf8");

    $arr=$_POST;
    if(!$arr['comment']){
    echo "<script>location.href='comments.php';</script>";
}else{
    if(is_numeric($arr['hfId'])) {
        //将子评论插入wp_comments数据库
        $sql="insert into wp_comments set comment_parent='".$arr['hfId']."',comment_author='jiangchen',comment_content='".$arr['comment']."',comment_date='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);

        if($rst){
            echo "<script>location.href='comments.php';</script>";
        }else{
            echo "留言失败";
        }
    }else{
        //将0级评论插入wp_comments数据库
        $sql="insert into wp_comments set comment_parent='0',comment_author='jiangchen',comment_content='".$arr['comment']."',comment_date='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);

        if($rst){
            echo "<script>location.href='comments.php';</script>";
        }else{
            echo "留言";
        }
    }
}
?>