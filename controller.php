<?php
//连接blog数据库
// $conn = mysqli_connect("localhost", "test3_fnsflm_xy", "65ksKYZxKX");
//if (!$conn) {
//    die("数据库连接失败！");
//}
//mysqli_select_db($conn, "test3_fnsflm_xy");
//mysqli_query($conn, "set names utf8");
require '../../../wp-blog-header.php';
global $wpdb;
$arr = $_POST;
$nextUrl = $arr['cUrl'];
if (!$arr['comment']) {
    echo "<script>location.href='$nextUrl';</script>";
} else {
    if (is_numeric($arr['hfId'])) {
        //将子评论插入wp_comments数据库
        // $sql = "insert into wp_comments set comment_post_ID='" . $arr['aId'] . "',comment_parent='" . $arr['hfId'] . "',comment_author='jiangchen',comment_content='" . $arr['comment'] . "',comment_date='" . date("Y-m-d H:i:s") . "'";
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
        //将0级评论插入wp_comments数据库
        // $sql = "insert into wp_comments set comment_post_ID='" . $arr['aId'] . "',comment_parent='0',comment_author='jiangchen',comment_content='" . $arr['comment'] . "',comment_date='" . date("Y-m-d H:i:s") . "'";
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