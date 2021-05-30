<!DOCTYPE html>
<html lang="en">

<body>
<link rel="stylesheet" href="css/editormd.css" />
<div id="test-editor">
    <textarea style="display:none;">### 关于 Editor.md

**Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。
    </textarea>
</div>
<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="editormd.min.js"></script>
<script type="text/javascript">
    $(function() {
        var editor = editormd("test-editor", {
             width  : "100%",
             height : "400px",
        path   : "lib/"
        });
    });
console.log(editor.getHTML());
</script>

</body>
</html>