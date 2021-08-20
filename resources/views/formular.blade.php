<!doctype html>
<html lang="en" TAB="">
<head>
    <meta charset="UTF-8">
    <title>Rumbular</title>
</head>
<body>
    <form method="POST" action="/data">
        {{ csrf_field() }}
        <input type="text" name="input">
        <input type="submit" name="Send">
    </form>

</body>
</html>
