

ession_start();

//check logged in or not!

if(!isset($_SESSION['login_user'])){

header('Location:login.php?pagename='.basename($_SERVER['PHP_SELF'], ".php"));

}

?>


<html>
<head>
<title>
Home Automation
</title>
</head>
<body background="background.png">
<?php
system("echo 4 > /sys/kernel/debug/omap_mux/i2c2_sda");

system("echo 183 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio183/direction");                       
system("echo 1 > /sys/class/gpio/gpio183/value");                             
?>                                                                            
<h1 align="center"><b><i>Welcome to Target1 of External location</h2>             
<style>                                                                       
h1 {font-family: cosmic sans ms,sans-serif;                                   
font-size: 26pt; color: aquamarine};                             
</style>                                                         
<h2 align="center">                                              
<b>                                                              
<i>The Target1 of External location is now turned on</h>             
<style>                                                          
h2 {font-family: cosmic sans ms,sans-serif; font-size:18pt;      
color: cornflowerblue};                                          
                                                                 
</style>                                                         
<form action= targetx1.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back">                            
</p>      
</form>                </body>                                                          
</html>                                              


