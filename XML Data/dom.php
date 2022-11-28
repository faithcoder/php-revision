<?php

$doc = new DOMDocument();
$doc->loadHTMLFile("test.html");

#$content=$doc->getElementsByTagName("p");

echo $doc->getElementById("x");

// foreach($content as $val){
//      echo $val->nodeValue,"<br>";
// }

// echo "<pre>";
//     print_r($content);
// echo "</pre>";
