<?ob_start();
   if(isset($_SESSION['CurrentUser']) )
   {    
        header('Location: member.php');
       } 
    


?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=windows-1256" />
     <link rel="stylesheet" type="text/css" href="login/css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/style.css" />
 
 
<title> Fiction-Team Cpanel </title>

</script>


 

</head>
<body>

  <div id="header">
<img class="imglogo" src="images/logo.png" />

  </div>
 <div id="index">
        <?include('login/login.php');?>
<div id="database">  </div>
    <div class= "footer"> Developed By Ahmed Sherif </div>
</div>


</body>


</html>
