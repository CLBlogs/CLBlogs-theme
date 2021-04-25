<?php
<<<<<<< HEAD
=======
    //连接blog数据库
>>>>>>> d582b7c (comments)
    $conn=mysqli_connect("localhost","root","123456");
    if(!$conn){
        die("数据库连接失败！");
    }
    mysqli_select_db($conn,"blog");
    mysqli_query($conn,"set names utf8");
<<<<<<< HEAD
    $arr=$_POST;
    $pro=substr($arr['comment'] , 0 , 2);
    if(is_numeric($pro)){
        $subComment=substr($arr['comment'],2);
        $sql="insert into jc_replication set foreignId='".$pro."',name='jiangchen',content='".$subComment."',time='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);
        if($rst){
            echo "<script>location.href='index.php';</script>";
=======

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
>>>>>>> d582b7c (comments)
        }else{
            echo "留言失败";
        }
    }else{
<<<<<<< HEAD
        $sql="insert into jc_comment set name='jiangchen',content='".$arr['comment']."',time='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);
        if($rst){
            echo "<script>location.href='index.php';</script>";
        }else{
            echo "留言失败";
    }
}      
=======
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
>>>>>>> d582b7c (comments)
?>