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
                                                                              
<h1 align="center"><b>Welcome to Rooms Section</h2>
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

<h2 align="center"><b><i>Please select any room to check 
the targets in the room and to control those targets</h2>       
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




<form action=room1.php>
<p align="center">
<input type="submit" value="Room 1" id="other1">

</p>
</form>
<form action= room2.php>
<p align="center">
<input type="submit" value="Room 2" id="other1">
</p>
</form>
<form action= room3.php>               
<p align="center">                      
<input type="submit" value="Room3" id="other1">   
</p>                                 
</form>                              
<form action= room4.php>             
<p align="center">                   
<input type="submit" value="Room 4" id="other1">
</p>                                 
</form> 
<form action=room5.php>
<font colour= "lightgreen">
<p align="center">
<input type="submit" value="Room 5" id="other1">
</p>
</form>
<form action= external.php>
<p align="center">
<input type="submit" value="External" id="other1">
</p>
</form>
<form action= welcome.php>               
<p align="center">                      
<input type="submit" value="Goto Home" id="other2">   
</p>                                 
</form>                            
</body>
</html> 
