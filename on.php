The led is now turned on
<?php
$filename = '/sys/class/leds/beagleboard::usr0/brightness';
system("echo 1 > $filename");
?>
<html>
<form action="hello.php">
<input type= "submit" value="GO BACK">
</form>
<html>


