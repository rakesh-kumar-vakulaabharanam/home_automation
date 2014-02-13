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
                                                                              
<h1 align="center"><b>Welcome to your Home</h2>                           
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
                                                                    
<h2 align="center"><b><i>All the targets in your 
Home are now turned ON       
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
#other1 { background-color: midnightblue; font-size: 20pt;                    
     height:50px; width:200px;border:0; cursor: hand;                         
   color: ghostwhite; font-family: comic sans ms;                             
    -webkit-border-radius: 15px;                                              
 font-weight: bold;"}                                               
</style>                                                            
                                                                    
<style type="text/css" rel="stylesheet">                            
#other2 { background-color: maroon; font-size: 20pt;                
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
                                                                              
 <style type="text/css" rel="stylesheet">                                      
#on{ background-color: green; font-size: 20pt;                         
     height:50px; width:200px;border:0; cursor:hand;                          
   color: ghostwhite; font-family: comic sans ms;                      
    -webkit-border-radius: 15px;                                       
 font-weight: bold;"}                                                  
</style>                                                               
                                                                       
<style type="text/css" rel="stylesheet">                               
#off { background-color: #D00000; font-size: 20pt;                     
     height:50px; width:200px;border:0; cursor:hand;                   
   color: ghostwhite; font-family: comic sans ms;                      
    -webkit-border-radius: 15px;                                       
 font-weight: bold;"}                                                  
</style>                                     	                                             
                             

<?php
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat7");
system("echo 139 > /sys/class/gpio/export");              
system("echo out > /sys/class/gpio/gpio139/direction");   
system("echo 1 > /sys/class/gpio/gpio139/value");   
system("echo 4 > /sys/kernel/debug/omap_mux/uart2_cts");
system("echo 144 > /sys/class/gpio/export");            
                                                        
system("echo out > /sys/class/gpio/gpio144/direction"); 
system("echo 1 > /sys/class/gpio/gpio144/value"); 
system("echo 4 > /sys/kernel/debug/omap_mux/uart2_tx");                       
system("echo 146 > /sys/class/gpio/export");                                  
                                            
system("echo out > /sys/class/gpio/gpio146/direction");
system("echo 1 > /sys/class/gpio/gpio146/value");   
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat6");                    
                                                          
system("echo 138 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio138/direction");                       
system("echo 1 > /sys/class/gpio/gpio138/value");        
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat5");
                                                                              
system("echo 137 > /sys/class/gpio/export");              
                                                                              
system("echo out > /sys/class/gpio/gpio137/direction");   
system("echo 1 > /sys/class/gpio/gpio137/value");

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp3_fsx");                     
                                                                              
system("echo 143 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio143/direction");  
system("echo 1 > /sys/class/gpio/gpio143/value");        

system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat4");                    
                                                                              
system("echo 136 > /sys/class/gpio/export");                                  
                                                          
system("echo out > /sys/class/gpio/gpio136/direction");   
system("echo 1 > /sys/class/gpio/gpio136/value"); 

system("echo 4 > /sys/kernel/debug/omap_mux/uart2_rts");                      
                                                        
system("echo 145 > /sys/class/gpio/export");
                                                        
system("echo out > /sys/class/gpio/gpio145/direction"); 
system("echo 1 > /sys/class/gpio/gpio145/value");      

system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat3");                    
                                                          
system("echo 135 > /sys/class/gpio/export");                                  
                                                                              
system("echo out > /sys/class/gpio/gpio135/direction");   
system("echo 1 > /sys/class/gpio/gpio135/value");      

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp1_dx");
                                                        
system("echo 158 > /sys/class/gpio/export");            
                                                        
system("echo out > /sys/class/gpio/gpio158/direction"); 
system("echo 1 > /sys/class/gpio/gpio158/value");

system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc_dat2");        
                                                                 
system("echo 134 > /sys/class/gpio/export");                     
                                                                 
system("echo out > /sys/class/gpio/gpio134/direction");          
system("echo 1 > /sys/class/gpio/gpio134/value");    

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp1_clkx");
                                                          
system("echo 162 > /sys/class/gpio/export");              
                                                          
system("echo out > /sys/class/gpio/gpio162/direction");   
system("echo 1 > /sys/class/gpio/gpio162/value");         


system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat1");
                                                          
system("echo 133 > /sys/class/gpio/export");              
                                                          
system("echo out > /sys/class/gpio/gpio133/direction");   
system("echo 1 > /sys/class/gpio/gpio133/value"); 

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp1_sfx");
system("echo 161 > /sys/class/gpio/export");             
                                                         
system("echo out > /sys/class/gpio/gpio161/direction");  
system("echo 1 > /sys/class/gpio/gpio161/value");        


system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_dat0");                    
system("echo 132 > /sys/class/gpio/export");                     
                                                                 
system("echo out > /sys/class/gpio/gpio132/direction");          
system("echo 1 > /sys/class/gpio/gpio132/value");  

system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp1_dr");                      
system("echo 159 > /sys/class/gpio/export");            
                                                                              
system("echo out > /sys/class/gpio/gpio159/direction");                       
system("echo 1 > /sys/class/gpio/gpio159/value");  
system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_cmd");                     
system("echo 131 > /sys/class/gpio/export");             
                                                                              
system("echo out > /sys/class/gpio/gpio131/direction");  
system("echo 1 > /sys/class/gpio/gpio131/value");         

system("echo 4 > /sys/kernel/debug/omap_mux/etk_d6");
system("echo 20 > /sys/class/gpio/export");          
                                                     
system("echo out > /sys/class/gpio/gpio20/direction");
system("echo 1 > /sys/class/gpio/gpio20/value"); 

system("echo 4 > /sys/kernel/debug/omap_mux/sdmmc2_clk");                     
                                                         
system("echo 130 > /sys/class/gpio/export");
                                                         
system("echo out > /sys/class/gpio/gpio130/direction");  
system("echo 1 > /sys/class/gpio/gpio130/value");      


system("echo 4 > /sys/kernel/debug/omap_mux/mcbsp1_fsr");                     
                                                                              
system("echo 157 > /sys/class/gpio/export");             
                                                         
system("echo out > /sys/class/gpio/gpio157/direction");  
system("echo 1 > /sys/class/gpio/gpio157/value");        


system("echo 4 > /sys/kernel/debug/omap_mux/i2c2_sda");                       
                                                       
system("echo 183 > /sys/class/gpio/export");                                  
                                                                     
system("echo out > /sys/class/gpio/gpio183/direction");                       
system("echo 1 > /sys/class/gpio/gpio183/value"); 

system("echo 4 > /sys/kernel/debug/omap_mux/i2c2_scl");                       
                                                       
system("echo 168 > /sys/class/gpio/export");
                                                       
system("echo out > /sys/class/gpio/gpio168/direction");
system("echo 1 > /sys/class/gpio/gpio168/value");  


?>                                                                            
<form action= welcome.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back" id="other2">                            
</p>      
</form>                </body>                                                          
</html>                                              


