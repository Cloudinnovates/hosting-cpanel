<?php   
ob_start();
session_start();?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=windows-1256" />
     <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/button.css">
 <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/bar.css">
  <link rel="stylesheet" type="text/css" href="table/table.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
 
<title> Fiction-Team Cpanel </title>

</script>


 

</head>
<body>
<?

?>
  <div id="header">
<img class="imglogo" src="images/logo.png" />

  </div>
 <div id="index">
    <div id="lblock"> 
      
        <div id="element_to_pop_up">
           <a class="b-close">x<a/>
Under Construction
</div>
    <div id="lblock-file">
    <?
    require_once"file_manager.php";
?>
</div>
<div id="lblock-stats">
<?
    require_once"google_stats.php";
    ?>
    </div>
    </div>
    
    <div id="rblock"> 
    <?php
      if(isset($_SESSION['CurrentUser']) )
   {    
        include('member.php');
       } 
    
else{
    include('login/login.php');
    
    
    
    }
    
    
    ?>
    </div>
    
</div>

<div id="under">
    <div id="database"> <?include('pages/database_content.php');?> </div>
    <div class= "footer"> Developed By Ahmed Sherif </div>
</div>


</body>


</html>
