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
                                                                              
<h1 align="center"><b>Welcome to Target1 of Room number 1</h2>                           
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

                                                 
<?php                                                     
$value = system("cat /sys/class/gpio/gpio139/value");
if ($value == 1)
{      
echo '
<h2 align="center">                                              
<b>                                                              
<i>The Target1 of Room number 1 is in ON state</h>             
<style>                                                          
h2 {font-family: cosmic sans ms,sans-serif; font-size:18pt;      
color: cornflowerblue};                                          
                                                                 
</style>' ;       
 }
else
{
echo'
<h2 align="center">                                              
<b>                                                              
<i>The Target1 of Room number 1 is in OFF state</h>             
<style>                                                          
h2 {font-family: cosmic sans ms,sans-serif; font-size:18pt;      
color: cornflowerblue};                                          
                                                                 
</style> ';       
}                     
?>
                                                        
<form action= target1_1.php>                                     
<p align="center">                                               
<input type="submit" value="Go Back">                            
</p>                                                             
</form> 
</body>                                                          

</html> 
