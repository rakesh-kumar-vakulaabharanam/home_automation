<?php session_start();              
                                                                              
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
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat2");       
system("echo 133 > /sys/class/gpio/export");   

system("echo out > /sys/class/gpio/gpio133/direction");                       
system("echo 0 > /sys/class/gpio/gpio133/value");                             
?>                                                                            
<h1 align="center"><b><i>Welcome to Target1 of Room number 4</h2>
<style>                                                          
h1 {font-family: cosmic sans ms,sans-serif;                      
font-size: 26pt; color: aquamarine};                             
</style>                                                         
<h2 align="center">                                              
<b>                                                              
<i>The Target1 of Room number 4 is now turned OFF</h>             
<style>                                                          
h2 {font-family: cosmic sans ms,sans-serif; font-size:18pt;      
color: cornflowerblue};                                          
                                                                 
</style>     
<form action= target4_1.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back">                            
</p>      
</form>                                                       
</body>                                                          
</html>     
