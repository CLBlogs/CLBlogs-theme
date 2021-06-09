<?php
require '../../../../wp-blog-header.php';
$wp = array('judge' => 0, 'num' => 0);
global $wpdb;
$post_id = $_POST['post_id'];
$author_id = $_POST['author_id'];
$wpdb->query("select * from $wpdb->usermeta where user_id=$author_id and meta_key='favorite' and meta_value='$post_id'");
// 除bug
if(get_post_meta($post_id, 'favorite', true)==0){
    delete_post_meta($post_id, 'favorite');
}
if ($wpdb->num_rows == 0) {
    // 未收藏
    $wp['judge'] = 0;
    add_user_meta($author_id, 'favorite', $post_id);
    $count = get_post_meta($post_id, 'favorite', true);
    if($count==''){
        // 没有人收藏
        add_post_meta($post_id, 'favorite', 1);
    }else{
        // 已经有人收藏
        $count++;
        update_post_meta($post_id, 'favorite', $count);
    }
} else {
    // 已经收藏, 取消收藏
    $wp['judge'] = 1;
    delete_user_meta($author_id, 'favorite', $post_id);
    $count = get_post_meta($post_id, 'favorite', true);
    $count--;
    update_post_meta($post_id, 'favorite', $count);
}
$wpdb->query("select * from $wpdb->usermeta where meta_key='favorite' and meta_value='$post_id'");
$wp['num'] = $wpdb->num_rows;

echo json_encode($wp);
