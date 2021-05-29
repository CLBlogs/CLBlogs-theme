<?php
require '../../../wp-blog-header.php';
global $wpdb;
$theID=$_GET['id'];
$wpdb->query("DELETE FROM wp_posts WHERE id =  '" . $theID . "'");
$arr = $_POST;
$nextUrl = $arr['cUrl'];
if ($arr['cState'] == "游客") {
    echo "<script>alert('评论前请先登录！');location.href='login.php';</script>";
} else {
    if (!$arr['comment']) {
        echo "<script>location.href='$nextUrl';</script>";
    } else {
        if (is_numeric($arr['hfId'])) {
            $rst = $wpdb->insert("wp_comments", array(
                "comment_post_ID" => $arr['aId'],
                "comment_parent" => $arr['hfId'],
                "comment_author" => $arr['cState'],
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
                "comment_author" => $arr['cState'],
                "comment_content" => $arr['comment'],
                "comment_date" => date("Y-m-d H:i:s")
            ));
            if ($rst) {
                echo "<script>location.href='$nextUrl';</script>";
            } else {
                echo "留言失败";
            }
        }
    }
}