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
function my_search_form($form)
{
    $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
        <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="' . esc_attr__('Search') . '" />
        </div>
        </form>';
    return $form;

}


add_filter('get_search_form', 'my_search_form');
function bootstrapwp_search_form($form)
{
    $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
        <div class="input-group pull-right" id="search"><label class="hide screen-reader-text" for="s">' . __('Search for:') . '</label>
        <input class="form-control " type="text" value="' . get_search_query() . '" name="s" id="s" /> 
    	<span class="input-group-btn">
    	<input class="btn btn-default" type="submit" id="searchsubmit" value="' . esc_attr__('Search') . '" />
         </span>
        </div>
        </form>';
    return $form;
}

add_filter('get_search_form', 'bootstrapwp_search_form');
