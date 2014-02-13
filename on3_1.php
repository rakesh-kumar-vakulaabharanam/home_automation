<?php

session_start();

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

<body background="pattern.jpg">
<table border="0" id="h1" align="center">
<tr>
<td>                                                                          
                                                                              
<h1 align="center"><b>Welcome to Target1 of Room number 3</h2>                           
</td>                                                                         
</tr>                                                                         
</table>                                                                      
<style>                                                                       
                                                   
h1 {font-family: comic sans ms; font-size: 26pt; color: aquamarine};
                                                                    
</style>                                                            
<p>                                                                 
                                                                    
</p>                                                                
                                                                    
<table border="0" align="center" id="h2">                           
<tr>                                                                
<td>                                                                
                                                                    
<h2 align="center"><b><i>The Target1 of Room number 
3 is now turned ON
</h2>           
</td>                                                               
</tr>              
</table>                                                                      
                                                                              
                                                                              
<style>                                                                       
                                                                              
h2 {font-family: comic sans ms; font-size:20pt; color:blue;};                 
                                                                              
</style>                                                            
                                                                    
<style type="text/css" rel="stylesheet">                            
#h2{ background-color:lightslategrey; font-size: 20pt;              
     height:100px; width:600px;border: 0;                           
   color: ghostwhite; font-family: comic sans ms;                   
    -webkit-border-radius: 15px;                                    
 font-weight: bold;"}                                               
</style>                                                            
                                                                    
<style type="text/css" rel="stylesheet">                            
#other1 { background-color: midnightblue; font-size: 20pt;          
     height:50px; width:200px;border:0; cursor: hand;               
   color: ghostwhite; font-family: comic sans ms;                   
    -webkit-border-radius: 15px;                                    
 font-weight: bold;"} 
 
 </style>                                                                      
                                                                              
                                                                    
<style type="text/css" rel="stylesheet">                            
                                                                    
#h1 { background-color: darkslategrey; font-size: 20pt;             
     height:150px; width:800px;border: 0;                           
   color: ghostwhite; font-family: comic sans ms; 
   
   
      -webkit-border-radius: 15px;                                              
 font-weight: bold;"}                                                         
</style>                                                                      
                                                                              

<?php
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat3");

system("echo 135 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio135/direction");                       
system("echo 1 > /sys/class/gpio/gpio135/value");                             
?>                                                                            
<form action= target3_1.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back" id="other1">                            
</p>      
</form>                
</body>                                                          
</html>                                              


