<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["text"];
    if (strlen($string) < 10) {
        echo "yay";
    }
    else {
        die("I said keep it brief, you cretin");
    }
}

?>

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
<h1>Keep it brief or die</h1>
<form method="post">
    <input type="text" id="text" name="text" class="form-control" value=""/>
    <button type="submit" class="btn btn-primary">Here goes</button>
    <img src="https://juicebubble.co.za/wp-content/uploads/2018/06/unicorn-dab-white-400x400.jpg" alt="Unicorn">
</form>
</body>
</html>
