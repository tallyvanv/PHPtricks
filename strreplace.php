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

//echo $strings[0]."<br>".$strings[1];
echo $replaced[0]."<br>".$replaced[1];