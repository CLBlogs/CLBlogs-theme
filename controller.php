<?php
    $conn=mysqli_connect("localhost","root","123456");
    if(!$conn){
        die("数据库连接失败！");
    }
    mysqli_select_db($conn,"blog");
    mysqli_query($conn,"set names utf8");
    $arr=$_POST;
    $pro=substr($arr['comment'] , 0 , 2);
    if(is_numeric($pro)){
        $subComment=substr($arr['comment'],2);
        $sql="insert into jc_replication set foreignId='".$pro."',name='jiangchen',content='".$subComment."',time='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);
        if($rst){
            echo "<script>location.href='index.php';</script>";
        }else{
            echo "留言失败";
        }
    }else{
        $sql="insert into jc_comment set name='jiangchen',content='".$arr['comment']."',time='".date("Y-m-d H:i:s")."'";
        $rst=mysqli_query($conn,$sql);
        if($rst){
            echo "<script>location.href='index.php';</script>";
        }else{
            echo "留言失败";
    }
}      
?>