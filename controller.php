<?php
require '../../../wp-blog-header.php';
global $wpdb;
session_start();
if(!empty($_SESSION['user_id'])){
    echo "<script>location.href='login.php';</script>";
}
else{
    $arr = $_POST;
    $nextUrl = $arr['cUrl'];
    if (!$arr['comment']) {
        echo "<script>location.href='$nextUrl';</script>";
    } else {
        if (is_numeric($arr['hfId'])) {
            $rst = $wpdb->insert("wp_comments", array(
                "comment_post_ID" => $arr['aId'],
                "comment_parent" => $arr['hfId'],
                "comment_author" => "jiangchen",
                "comment_content" => $arr['comment'],
                "comment_date" => date("Y-m-d H:i:s")
            ));
            if ($rst) {
                echo "<script>location.href='$nextUrl';</script>";
            } else {
                echo "留言失败";
            }
        } else {
        
            $rst = $wpdb->insert("wp_comments", array(
                "comment_post_ID" => $arr['aId'],
                "comment_parent" => 0,
                "comment_author" => "jiangchen",
                "comment_content" => $arr['comment'],
                "comment_date" => date("Y-m-d H:i:s")
            ));
    
            if ($rst) {
                echo "<script>location.href='$nextUrl';</script>";
            } else {
                echo "留言";
            }
        }
    }
}
?>