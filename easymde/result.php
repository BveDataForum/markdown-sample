<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mde テスト</title>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>
<body>
<article id="markdown-body"></article>
<div id="hidden-content" style="display: none"><?=$_POST["content"]?></div>
<script>
    document.getElementById('markdown-body').innerHTML = marked(document.getElementById("hidden-content").innerHTML);
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/github-markdown-css@3.0.1/github-markdown.min.css">
</body>
</html>