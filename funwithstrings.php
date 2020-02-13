<?php
$strings = array (
    'Wolf is nen dikken os',
    'Thibaut is a pleasant-smelling man',
);

$search = array (
    'dikken',
    'pleasant-smelling',
);
$replace = array (
    'achterlijken',
    'shtanky',
);

$replaced = str_replace ( $search, $replace, $strings );

echo $strings[0]."<br>".$strings[1]."<br>";
echo $replaced[0]."<br>".$replaced[1]."<br>";

$arr = array('Stief', 'is', 'a', 'cringe', 'icon!');
$string = implode(" ", $arr);
echo $string;
$newArr = explode(" ", $string);
var_dump($newArr);
echo $newArr[0];

$capitaliseFirst = "";
$jumble = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"])) {
        $capitaliseFirst = ucwords($_POST["username"]);
    }
    if (isset($_POST["string"])) {
        $jumble = str_shuffle($_POST["string"]);
    }
}

/*$a = array
(
    "sicco",
    "giertz",
    "diamonds",
    "pingpong",
);

var_dump($a);

shuffle($a);

print_r($a);*/
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

<form method="post">
    write down lowercase name:<input type="text" id="username" name="username" class="form-control" value=""/><br>
    <?php echo $capitaliseFirst."<br>"?>
    put in a word: <input type="text" id="string" name="string" class="form-control" value=""/>
    <?php echo $jumble."<br>" ?>
    <button type="submit" class="btn btn-primary">Test!</button>
</form>

</body>
</html>
