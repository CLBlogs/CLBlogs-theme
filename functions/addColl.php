<?php
require '../../../../wp-blog-header.php';
$wp=array('judge'=>0,'num'=>0);
global $wpdb;
$post_id = $_POST['post_id'];
$author_id = $_POST['author_id'];
$wpdb->query("select * from $wpdb->usermeta where user_id=$author_id and meta_key='favorite' and meta_value='$post_id'");
if($wpdb->num_rows == 0){
    $wp['judge']=0;
    add_user_meta($author_id, 'favorite', $post_id);
}else{
    $wp['judge']=1;
    delete_user_meta($author_id, 'favorite', $post_id);
}
$wpdb->query("select * from $wpdb->usermeta where meta_key='favorite' and meta_value='$post_id'");
$wp['num']=$wpdb->num_rows;

echo json_encode($wp);


