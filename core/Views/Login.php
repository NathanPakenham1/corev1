<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cms Login</title>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="login">
    <section>
        <div class="container">
            <form method="POST" action="/cms/login">
                <input type="hidden" name="csrf_name" value="<?= $csrf_name ?>">
                <input type="hidden" name="csrf_value" value="<?= $csrf_value ?>">
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="password" placeholder="Your Password">
                <button type="submit" class="btn-main">Login</button>
            </form>
        </div>
    </section>
</body>
</html>