<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mde テスト</title>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>
<body>
<div id="content"></div>
<div id="hidden-content" style="display: none"><?=$_POST["content"]?></div>
<script>
    document.getElementById('content').innerHTML = marked(document.getElementById("hidden-content").innerHTML);
</script>
</body>
</html>