<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PostPage</title>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
</head>
<body>
    <div id="editor"></div>
    <form method="post" action="result.php" onsubmit="return check()">
        <input type="hidden" name="contents" id="contents">
        <input type="submit" value="送信">
    </form>
    <!--Editor js plugins-->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script>
    /*Editor.js init*/
    const editor = new EditorJS({
        holder: 'editor',
        tools: {
            header: Header,
            list: List,
            checklist: Checklist,
            quote: Quote,
            code: CodeTool,
            image: SimpleImage,
        }
    });

    function check(){
        if(window.confirm('投稿しよろしいでしょうか?')){
            editor.save()
                .then((savedData) => {
                    const hiddenField = document.getElementById('contents');
                    hiddenField.value = JSON.stringify(savedData);
                });
            return true; // 「OK」時は送信を実行
        }
        else{
            window.alert('キャンセルされました');
            editor.save()
                .then((savedData) => {
                console.log(savedData);
                    const hiddenField = document.getElementById('contents');
                    hiddenField.value = JSON.stringify(savedData);
            });
            return false; // 送信を中止
        }
    }
</script>
</body>
</html>
