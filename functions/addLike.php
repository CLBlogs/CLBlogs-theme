<?php
require '../../../../wp-blog-header.php';
function setPostLikes($postID)
{
    $count = get_post_meta($postID, 'likes', true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, 'likes');
        add_post_meta($postID, 'likes', $count);
    } else {
        $count++;
        update_post_meta($postID, 'likes', $count);
    }
}
$post_id = $_POST['post_id'];
setPostLikes($post_id);

