<?php

//simple PHP login script using Session

//start the session * this is important

session_start();

 

//login script

if(isset($_REQUEST['ch']) && $_REQUEST['ch'] == 'login'){

 

//give your login credentials here

if($_REQUEST['uname'] == 'rakesh' && $_REQUEST['pass'] == 'rakesh')

$_SESSION['login_user'] = 1;

else

$_SESSION['login_msg'] = 1;

}

 

//get the page name where to redirect

if(isset($_REQUEST['pagename']))

$pagename = $_REQUEST['pagename'];

 

//logout script

if(isset($_REQUEST['ch']) && $_REQUEST['ch'] == 'logout'){

unset($_SESSION['login_user']);

header('Location:login.php');

}

if(isset($_SESSION['login_user'])){

if(isset($_REQUEST['pagename']))

header('Location:'.$pagename.'.php');

else

header('Location:welcome.php');

}else{

?>

<html>

<head>

<title> Home Automation</title>

</head>

<body background="pattern.jpg">

<table border="0" id="h1" align="center">                                     
<tr>                                                                          
<td>                                                                          
                                                                              
<h1 align="center"><b> Expandable Home Monitoring and Automation System</h2>
</td>                                          
</tr>                                          
</table>                                       
<style>                                        
                                               
h1 {font-family: comic sans ms; font-size: 26pt; color: aquamarine};
                                                                    
</style>             

<style type="text/css" rel="stylesheet">                               
#h1 { background-color: darkslategrey; font-size: 20pt;                
     height:250px; width:800px;border: 0;                              
   color: ghostwhite; font-family: comic sans ms;                      
    -webkit-border-radius: 15px;                                       
 font-weight: bold;"}                                                  
</style> 
  
<style type="text/css" rel="stylesheet">                               
#other1{ background-color:lightslategrey; font-size: 20pt;                 
     height:40px; width:400px;border: 0;                              
   color: maroon; font-family: comic sans ms;                      
    -webkit-border-radius: 15px;                                       
 font-weight: bold;"}                                                  
</style>

<style type="text/css" rel="stylesheet">                               
#login{ background-color: green; font-size: 20pt;                         
     height:50px; width:200px;border:0; cursor:hand;  
     
       color: ghostwhite; font-family: comic sans ms;                             
    -webkit-border-radius: 15px;                                              
 font-weight: bold;"}                                                         
</style>   
 
<p>

</p>

<table border="0" align="center" id="other1" cellpadding="0" cellspacing="0">


<tr><td>

<form name="login_form" id="other" method="post" action="">

<table align="center" id="other1">

<tr><td colspan="2" id="other" align="center"><strong>Login Details</strong></td></tr>

<tr><td id="other1" align="center">Username</td><td><input type="text" name="uname" id="uname"></td></tr>

<tr><td id="other1" align="center">Password</td><td><input type="password" name="pass" id="pass"></td></tr>

<tr>

<td colspan="2" align="center">

<p style="color:red;">

<?php

//display the error msg if the login credentials are wrong!

if(isset($_SESSION['login_msg'])){

echo 'Wrong username and password !';

unset($_SESSION['login_msg']);

}

?>

</p>

</td></tr>

<tr><td align="center" colspan="2"><input type="submit" id="login" value="Login"></td></tr>

</table>

<input type="hidden" name="ch" value="login">

</form>

</td></tr>

</table>

<?php } ?>

</body>

</html>
