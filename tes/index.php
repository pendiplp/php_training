<?php

require "vendor/autoload.php";

use Carbon\Carbon;

$date = Carbon::now();
echo "<pre>".print_r($date, 1)."</pre>";

?>