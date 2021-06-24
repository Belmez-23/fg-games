<?php
$ishod = file('data.txt');
$s = explode(' ', $ishod[0]);
$ss = count($s);
$gachi = array('300 bucks', 'Ass', 'boy', 'Fuck you', 'leather man', 'door', 'Deep dark fantasies', 'Dungeon master', 'Cumming', 'slave', 'Stick your finger', 'amazing');
$gg = count($gachi);
foreach ($gachi as $g){
    $rs = rand(0, $ss);
    $rg = rand(0, $gg);
    $s[$rs] = $g;
}
foreach ($s as $ass){
    echo $ass." ";
}
//$vyvod = str_replace($ishod, $gachi);

