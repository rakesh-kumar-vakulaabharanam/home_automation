The led is now turned off
<?php
$filename = '/sys/class/leds/beagleboard::usr0/brightness';
system("echo 0 > $filename");
?>


