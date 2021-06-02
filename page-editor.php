<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8"/>
    <title>Edit Blog</title>
    <link rel="stylesheet" href="css/editor.css"/>
    <link rel="stylesheet" href="css/editormd.min.css"/>
    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div id="layout">
    <form method="post"
          action=<?php if (strpos($_SERVER['REQUEST_URI'], '?')) echo "functions/modifyBlog.php"; else echo "functions/postBlog.php"; ?>>
        <div style="width: 40%;padding-left: 2.5%">
            <div><input type="text" name="post_id" style="width: 100%;display:none" value=<?php
                if (strpos($_SERVER['REQUEST_URI'], '?')) {
                    echo substr(strstr($_SERVER['REQUEST_URI'], "?"), 4);
                }
                ?>
                ></div>
            <label>Title: </label>
            <div><input type="text" name="post_title" style="width: 100%" value=<?php
                if (strpos($_SERVER['REQUEST_URI'], '?')) {
                    require '../../../wp-blog-header.php';
                    global $wpdb;
                    $rows = $wpdb->get_results("SELECT * FROM wp_posts WHERE id = '" . substr(strstr($_SERVER['REQUEST_URI'], "?"), 4) . "'");
                    foreach ($rows as $arrArticle) {
                        echo $arrArticle->post_title;
                    }
                }
                ?>></div>
            <br>
            <label>Abstruct: </label>
            <div><input type="text" name="post_excerpt" style="width: 100%" value=<?php
                if (strpos($_SERVER['REQUEST_URI'], '?')) {
                    foreach ($rows as $arrArticle) {
                        echo $arrArticle->post_excerpt;
                    }
                }
                ?>></div>
            <br>
        </div>
        <div id="test-editormd">
            <textarea style="display:none;"><?php

                $text_content = '
#### Get value
每个 Editor.md 的 ID 元素下都有一个保存 Markdown 源码的 Textarea，你也可以通过设置开启另一个保存 HTML 源码的 Textarea，可以按需要获取相应的值，如下：

```html
&lt;div class="editormd" id="$id"&gt;
    &lt;textarea class="editormd-markdown-textarea" name="$id-markdown-doc"&gt;&lt;/textarea&gt;

    &lt;!-- html textarea 需要开启配置项 saveHTMLToTextarea == true --&gt;
    &lt;textarea class="editormd-html-textarea" name="$id-html-code"&gt;&lt;/textarea&gt;
&lt;/div&gt;
```

#### Example

```javascript
var testEditor = editormd("test-editormd", {
    width  : "90%",
    height : 640,
    path   : "../lib/",
    saveHTMLToTextarea : true
});

testEditor.getMarkdown();       // 获取 Markdown 源码
testEditor.getHTML();           // 获取 Textarea 保存的 HTML 源码
testEditor.getPreviewedHTML();  // 获取预览窗口里的 HTML，在开启 watch 且没有开启 saveHTMLToTextarea 时使用
```';
                if (strpos($_SERVER['REQUEST_URI'], '?')) {
                    $articleMd = get_post_meta(substr(strstr($_SERVER['REQUEST_URI'], "?"), 4), "articleMd", true);
                    echo $articleMd;
                } else
                    echo $text_content;
                ?>
</textarea>
        </div>
        <div class="pull-right" style="margin: 10px auto;padding-right: 2.5%">
            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Post">
        </div>
    </form>
</div>
<script src="js/uploadImg.js" type="text/javascript"></script>
<script src="js/jquery.min.js"></script>
<script src="js/editormd.js"></script>
<script type="text/javascript">
    $(function () {
        var testEditor = editormd("test-editormd", {
            width: "95%",
            height: 960,
            path: "https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/lib/",
            imageUpload: true,
            imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL: "./functions/upload.php",
            saveHTMLToTextarea: true,
            onload: function () {
                initPasteDragImg(this);
            }
        });
    });
</script>
</body>
</html>