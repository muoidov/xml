<?php
$xml=new DOMDocument('1.0','UTF-8');
$book	=$xml->createElement('book','Lap trinh PHP');

$xml->appendChild($book);
$xml->save('mybook-02.xml')or die('Error');

print_r($xml);
?>