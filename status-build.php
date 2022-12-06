<?php
echo '<pre>';
$_ = json_decode(file_get_contents('tlink2.txt'));
$p = json_decode(file_get_contents('tlink3.txt'));
foreach($p as $c){
    $_[] = $c;
}
echo count($_);
print_r($_);

file_put_contents("master-twitter-ids.json", json_encode($_));

