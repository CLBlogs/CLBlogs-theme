<?php
function getPostViews($postID)
{
    $count = get_post_meta($postID, 'views', true);
    if ($count == '') {
        delete_post_meta($postID, 'views');
        add_post_meta($postID, 'views', '0');
        return "0";
    }
    return $count . '';
}

function setPostViews($postID)
{
    $count = get_post_meta($postID, 'views', true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, 'views');
        add_post_meta($postID, 'views', $count);
    } else {
        $count++;
        update_post_meta($postID, 'views', $count);
    }
}

function getPostLikes($postID)
{
    $count = get_post_meta($postID, 'likes', true);
    if ($count == '') {
        delete_post_meta($postID, 'likes');
        add_post_meta($postID, 'likes', '0');
        return "0";
    }
    return $count . '';
}

