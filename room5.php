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
                                                                              
<h1 align="center"><b>Welcome to Room number 5</h2>                           
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
                                                                    
<h2 align="center"><b><i>Please select any Target 
to check the status and to contol it     
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

<form action=target5_1.php>
<font colour= "lightgreen">
<p align="center">
<input type="submit" value="Target 1" id="other1">
</p>                                                                
</form>                                                             
<form action=target5_2.php>                                         
<p align="center">                                                  
<input type="submit" value="Target 2" id="other1">                              
</p>                                                                
</form>                                                             
<form action=target5_3.php>                                         
<p align="center">                                                  
<input type="submit" value="Target 3" id="other1">                              
</p>                                                                
</form>                                                             
<form action=target5_4.php>                                         
<p align="center">                                                  
<input type="submit" value="Target 4" id="other1">                              
</p>                                             
</form>                         
<form action= room5on.php>                                          
<p align="center">                                         
<input type="submit" value="ON ALL" id="on">                                
</p>                                                  
</form>                                                             
                                                      
<form action= room5off.php>                                         
<p align="center">                                                  
<input type="submit" value="OFF ALL" id="off">                          
</p>                                                       
</form>    
                           
<form action=rooms.php>                
<p align="center">                     
<input type="submit" value="Goto Rooms" id="other1">
</p>                                    
</form>                                 
<form action= welcome.php>    
<p align="center">                      
<input type="submit" value="Goto Home" id="other2"> 
</p>                                    
</form>       
</body>
</html>    
