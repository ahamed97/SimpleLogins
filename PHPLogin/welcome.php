   <html>
   <head>
   	<link href="styles.css" rel = "stylesheet" type = "text/css"/>
   </head>
<body>

<?php

 session_start();
 if(time() - $_SESSION['nt']<=20){
	$_SESSION["nt"] = time();
	echo"<center><h1>Hello ".$_SESSION['login_user']."</h1><center>"; 
 }else{
	 header("location: index.html");
	 
 }


?>

</body>
</html>