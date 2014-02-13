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

<body background="pattern.jpg">
<table border="0" id="h1" align="center">
<tr>
<td>                                                                          
                                                                              
<h1 align="center"><b>Welcome to Room number 2</h2>                           
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
                                                                    
<h2 align="center"><b><i>All the targets in the 
room 2 are now turned OFF
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
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat5");
                                                                              
system("echo 137 > /sys/class/gpio/export");              
                                                                              
system("echo out > /sys/class/gpio/gpio137/direction");   
system("echo 0 > /sys/class/gpio/gpio137/value");

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp3_fsx");                     
                                                                              
system("echo 143 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio143/direction");  
system("echo 0 > /sys/class/gpio/gpio143/value");        

system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat4");                    
                                                                              
system("echo 136 > /sys/class/gpio/export");                                  
                                                          
system("echo out > /sys/class/gpio/gpio136/direction");   
system("echo 0 > /sys/class/gpio/gpio136/value"); 

system("echo 4 > /sys/kernel/debug/omap_mux/uart2_rts");                      
                                                        
system("echo 145 > /sys/class/gpio/export");
                                                        
system("echo out > /sys/class/gpio/gpio145/direction"); 
system("echo 0 > /sys/class/gpio/gpio145/value");      
i
 
                                                
?>                                                                            
<form action= room2.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back" id="other1">                            
</p>      
</form>                                                       
</body>                                                          
</html>     
