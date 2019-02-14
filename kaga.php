<?php
require('dom.php');
$url = "https://meownime.com/gotoubun-yome-sub-indo/";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);
$dom = new DOMDocument();
$dom2 = new DOMDocument();
$dom3 = new DOMDocument();
@$dom->loadHTML($html);
@$dom2->loadHTML($html);
@$dom3->loadHTML($html);
$nodes2 = $dom2->getElementsByTagName('title');
foreach($nodes2 as $node2) {
}

$nodes3 = $dom3->getElementsByTagName('td');
foreach($nodes3 as $node3) {
}


echo '<center><h2>'.$node2->textContent.'</h2></center>';
$nodes = $dom->getElementsByTagName('a');

foreach($nodes3 as $node3) {
echo $node3->textContent.'<br>';
}

foreach($nodes as $node) {
echo'<center><font face=consolas size=2><a href="';
echo $node->getAttribute('href').'">'.$node->getAttribute('href').'</a></font> ['.$node->textContent.']<br>';
/*    url only   
foreach($dom->getElementsByTagName('a') as $link) {
        # Show the <a href>
        echo $link->getAttribute('href');
        echo "<br />";
}
*/
}
?>
