<?php
require '../../../../wp-blog-header.php';
global $wpdb;
$user_id = $_GET["uid"];
$post_id = $_GET["pid"];
echo "<script>console.log(\"start delete\")</script>";
delete_user_meta($user_id, 'favorite', $post_id);
echo "<script>console.log(\"delete success\")</script>";
header('location:../mineblog.php');

