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
<h1 align="center"><b><i>Welcome to Target2 of Room number 3</h2>
<style>
h1 {font-family: cosmic sans ms,sans-serif;
font-size: 26pt; color: aquamarine};                                          
</style>                                                         
<?php                                                                         
$value = system("cat /sys/class/gpio/gpio158/value");            
if ($value == 1)                                                              
{                                                                
echo '                                                                        
<h2 align="center">                                              
<b>                                                              
<i>The Target2 of Room number 3 is in ON state</h>               
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
<i>The Target2 of Room number 3 is in OFF state</h>        
<style>             

h2 {font-family: cosmic sans ms,sans-serif; font-size:18pt;      
color: cornflowerblue};                                          
                                                           
</style> ';                                                      
}                                                          
?>                                                               
                                                                 
<form action= target3_2.php>                               
<p align="center">                                               
<input type="submit" value="Go Back">                      
</p>                                                             
</form>                                                    
</body>                                                          
                                                           
</html>     
