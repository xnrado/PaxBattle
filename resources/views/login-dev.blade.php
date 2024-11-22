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
    <?php
    use Illuminate\Support\Facades\Auth;
    if (isset($_GET['id'])) {
        Auth::loginUsingId($_GET['id']);
        echo $_GET['id'];
    }
    else {
        echo "Podaj id w URL: /dev?id=123";
    }
    ?>

</body>
</html>
