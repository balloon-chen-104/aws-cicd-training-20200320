<?php

$a = 0;

for ($i = 0; $i < 1000000000; $i++) {
    $GLOBALS['a'] += $i;
    echo $GLOBALS['a'];
}
