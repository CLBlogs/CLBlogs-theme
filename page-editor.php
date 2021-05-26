<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8"/>
    <title>Edit Blog</title>
    <link rel="stylesheet" href="css/editor.css"/>
    <link rel="stylesheet" href="css/editormd.min.css"/>
    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="layout">
    <form method="post" action="functions/postBlog.php">
        <div style="width: 40%;padding-left: 2.5%">
            <label>Title: </label>
            <div><input type="text" name="post_title" style="width: 100%"></div>
            <br>
            <label>Abstruct: </label>
            <div><input type="text" name="post_excerpt" style="width: 100%"></div>
            <br>
        </div>
        <div id="test-editormd">
            <textarea style="display:none;">#### Get value

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
```
</textarea>
        </div>
        <div class="pull-right" style="margin: 10px auto;padding-right: 2.5%">
            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Post">
        </div>
    </form>
</div>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/editormd.js"></script>
<script type="text/javascript">
    $(function () {
        var testEditor = editormd("test-editormd", {
            width: "95%",
            height: 960,
            path: "https://cdn.jsdelivr.net/gh/fnsflm/myPicbed@master/clblogs/lib/",
            saveHTMLToTextarea: true
        });
    });
</script>
</body>
</html>