<?php

use lyhiving\Phone\Mobile2Location;

include './src/Mobile2Location.php';

$pl = new Mobile2Location();
$info = $pl->find(13800138000);
print_r($info);
