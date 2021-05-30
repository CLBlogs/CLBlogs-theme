<?php
require '../../../../wp-blog-header.php';
global $wpdb;
$user_id = -1;
foreach ($_POST as $key => $value) {
    echo $key . ": " . $value . "<br>";
    if ($key == 'user_id') {
        $user_id = $value;
    } elseif ($key == 'user') {
        if (strlen($value) > 0) {
            // 没有考虑重复
            $wpdb->query('select wp_users set user_login=' . $value . 'where ID=' . $user_id);
        }
    } else {
        delete_user_meta($user_id, $key);
        if (strlen($value) > 0) {
            add_user_meta($user_id, $key, $value);
        }
    }
    header('location:../mineblog.php');
}
