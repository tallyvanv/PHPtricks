<?php

$doc = new DOMDocument();
$doc->loadHTMLFile('images.html');
$tags = $doc->getElementsByTagName('img');

foreach ($tags as $tag) {

    $filename = basename($tag->getAttribute('src'));
    $url = $tag->getAttribute('src');
    var_dump($url);
    file_put_contents($filename, file_get_contents($url));

}