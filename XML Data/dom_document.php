<?php
$doc = new DOMDocument('5','utf-8');
$root=$doc->createElement('html');
$doc->appendChild($root);

$head=$doc->createElement('head');
$root->appendChild($head);

$title=$doc->createElement('title');
$head->appendChild($title);

$body=$doc->createElement('body');
$root->appendChild($body);

$section=$doc->createElement('section');
$body->appendChild($section);
$section->setAttribute('class','header-area');



echo $doc->saveHTMLFile("students.html");