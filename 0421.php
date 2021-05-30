<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body >
<script type="text/javascript">
      //初始化鼠标形状
      function initMouse(){
        //通过标签名得到目标DOM，如果是全网页则这里可以用body
        var pDom = document.getElementsByTagName("p")[0];
        //修改样式的鼠标指针形状，pointer为手的形状
        pDom.style.cursor = 'move';
      }      
    </script>
<link rel="stylesheet" href="editor.md-master/css/editormd.css" />
<div id="test-editor">
    <textarea style="display:none;">### 关于 Editor.md

**Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。
    </textarea>
</div>
<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="editor.md-master/editormd.min.js"></script>
<script type="text/javascript">
    //$(function() {
        var editor = editormd("test-editor", {
             width  : "100%",
             height : "400px",
        path   : "editor.md-master/lib/",
        saveHTMLToTextarea: true
        });
    //console.log(editor.getHTML());
   // });
//var htmlContent = editormd.getHTML();
//$("#content_id").addClass("markdown-body editormd-html-preview").append(htmlContent)
//console.log (htmlContent)
</script>
<script>
    //var h = document.getElementsByClassName("editormd-preview-container")
    //console.log(h[0]);
</script>
<?php
$aaa="<script>var h = document.getElementsByClassName('editormd-preview-container')[0];document.write(h)</script>";
echo $aaa;
echo 123;
?>
</body>
</html>