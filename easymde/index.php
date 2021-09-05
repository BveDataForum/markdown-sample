<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mde-sample</title>
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
</head>

<body>
<form action="result.php" method="post">
    <textarea name="content"></textarea>
    <input type="submit" value="Subscribe!">
</form>
<script>
    var easyMDE = new EasyMDE({
        spellChecker: false
        }
    );
</script>
</body>

</html>