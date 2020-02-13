<?php
$a = "hello";
$$a = "world";

echo "$a ${$a}<br>";
echo "$a $hello</br>";

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a."</br>"; //Returns Hello
echo $$a."</br>"; //Returns World
echo $$$a."</br>"; //Returns Foo
echo $$$$a."</br>"; //Returns Bar
echo $$$$$a."</br>"; //Returns a

echo $$$$$$a."</br>"; //Returns Hello
echo $$$$$$$a."</br>"; //Returns World*/