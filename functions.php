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

// 自定义搜索
function bootstrapwp_search_form($form)
{
    $form = '<form class="navbar-form" action="' . home_url('/') . '">
                <input class="form-control" type="text" id="top-input"  value="' . get_search_query() . '" name="s" >
                <button class="btn btn-default" id="search-botton" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
             </form>';
    return $form;
}
add_filter('get_search_form', 'bootstrapwp_search_form');

// 获取随机图片
function get_random_pic(){
    $pic_array = array(
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/71822775_p0(1).png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/84049481_p0(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/84311628_p0.jpeg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/Azusa.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/Rikka.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/Sakura.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/Yukino.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_67342794_20200902_190102(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_69032613_20200510_171900(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_69608990_20200530_153754.png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_70977325_20200510_171844(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_76016804_20200830_182232(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_78828319_20200503_193429.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_79646944_20200614_202117.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_80386740_20200509_174738(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_80517458_20200704_153749.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/illust_83081665_20200809_220845(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/★_83736901_p0.png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/女の子なんだぞ_69759618_p0.png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/存档-小天鹅_82410276_p0.jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/弱光_82586629_p0(1).jpg',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/比叡ちゃんと赤城ちゃん！_74661736_p0.png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/無題_78208005_p0.png',
        'https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/images/ｶｾﾝﾁｬﾝ_59738620_p0.png'
    );
    echo $pic_array[array_rand($pic_array, 1)];
}