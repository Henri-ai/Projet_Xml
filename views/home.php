<?php 
$url='https://www.lemonde.fr/international/rss_full.xml';
$xml=simplexml_load_file($url);
$items=$xml->channel->item;
foreach ($items as $item) {
    
    echo $item->title;
}
?>

