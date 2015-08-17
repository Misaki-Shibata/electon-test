<?php
$v = file_get_contents('http://www.pxt.jp/caches/p/theme/css/common.css');
echo $v;
preg_match_all('/@(.*);/i', $v, $result, PREG_PATTERN_ORDER);
var_dump($result);
