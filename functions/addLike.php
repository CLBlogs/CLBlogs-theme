<?php
require '../../../../wp-blog-header.php';
$postID = $_POST['post_id'];
$count = get_post_meta($postID, 'likes', true);
if ($count == '') {
    $count = 0;
    delete_post_meta($postID, 'likes');
    add_post_meta($postID, 'likes', $count);
} else {
    $count++;
    update_post_meta($postID, 'likes', $count);
}




