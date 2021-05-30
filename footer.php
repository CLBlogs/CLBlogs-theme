<?php
$road = get_template_directory_uri();
echo '<link type="text/css" href="' . $road . '/css/bootstrap.min.css">';
echo '<script type="text/javascript" src="' . $road . '/js/jquery.min.js"></script>';
//echo '<script type="text/javascript" src="' . $road . '/js/bootstrap.min.js"></script>';
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<style>
    .footer-basic {
        padding: 40px 0;
        background-color: #f7f5f5;
        color: #4b4c4d;
    }

    .footer-basic ul {
        padding: 0;
        list-style: none;
        text-align: center;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 0;
        background-color: #f7f5f5;
    }

    .footer-basic li {
        padding: 0 10px;
    }

    .footer-basic ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
    }

    .footer-basic ul a:hover {
        opacity: 1;
    }

    .footer-basic .social {
        text-align: center;
        padding-bottom: 25px;
    }

    .footer-basic .social > a {
        font-size: 24px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        border: 1px solid #ccc;
        margin: 0 8px;
        color: inherit;
        opacity: 0.75;
    }

    .footer-basic .social > a:hover {
        opacity: 0.9;
    }

    .footer-basic .copyright {
        margin-top: 15px;
        text-align: center;
        font-size: 13px;
        color: #aaa;
        margin-bottom: 0;
    }
</style>
<link href="https://cdn.bootcdn.net/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
<footer class="footer-basic">
    <div class="social">
        <a href=mailto:fnsflm@163.com><i class="icon ion-android-mail"></i></a>
        <a href="https://twitter.com/fnsflm"><i class="icon ion-social-twitter"></i></a>
        <a href="https://github.com/CLBlogs"><i class="icon ion-social-github"></i></a>
    </div>
    <ul class="list-inline">
        <li><a href="https://github.com/CLBlogs/CLBlogs-theme">Project</a></li>
        <li><a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0-standalone.html">Terms</a></li>
    </ul>
    <p class="copyright">Copyright © 2021 CLBlogs Powered by <a href="https://wordpress.com/">WordPress</a> Theme
        Powered by
        <a href="https://github.com/CLBlogs">CLBlogs</a><br>陕ICP备2021003793号</p>
</footer>
