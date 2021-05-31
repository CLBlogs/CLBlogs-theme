<?php
    require '../../../../wp-blog-header.php';
    global $wpdb;
    $now_date = date('Y-m-d H:i:s');
    $APost = array(
        "post_content" => $_POST["test-editormd-html-code"],
        "post_excerpt" => $_POST["post_excerpt"],
        "post_title" => $_POST["post_title"],
        "post_modified" => $now_date,
        "post_modified_gmt" => $now_date
    );
    $wpdb->update($wpdb->posts,$APost,array("ID"=>$_POST["post_id"]));
    header('location:../mineblog.php');