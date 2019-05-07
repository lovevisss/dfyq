<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/formpost">
            {{csrf_token()}}
            <textarea name="body" id="" cols="30" rows="10"></textarea>
            <button type="submit">Add post</button>
        </form>
    </div>
</body>
</html>