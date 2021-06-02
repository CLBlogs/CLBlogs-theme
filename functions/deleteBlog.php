<?php
require '../../../../wp-blog-header.php';
global $wpdb;
$post_id = $_GET["id"];
echo "<script>console.log(\"start delete\")</script>";
$wpdb->query("DELETE FROM $wpdb->posts WHERE id='$post_id'");
echo "<script>console.log(\"delete success\")</script>";
header('location:../mineblog.php');