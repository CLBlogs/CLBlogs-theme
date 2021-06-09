<?php
ob_start();
require '../../../../wp-blog-header.php';
global $wpdb;

$road = get_template_directory_uri();
setcookie("user_login","", time() + 3600, '/');
setcookie("user_pass","", time() + 3600, '/');
setcookie("PHPSESSID","", time() + 3600, '/');
setcookie("user_id","", time() + 3600, '/');
echo "<script>
            window.location.href=\"http://www.clblogs.xyz/#\";
      </script>";
