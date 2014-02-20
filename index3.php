<?php   
ob_start();
session_start();?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=windows-1256" />
<link type="text/css" rel="stylesheet" href="css/styles.css" />
 <link rel="stylesheet" type="text/css" href="css/button.css">
 <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/bar.css">
  <link rel="stylesheet" type="text/css" href="table/table.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>


<title>Fiction Team Cpanel</title>
<body>
<div id="home">
  <div id="header"><h1>Fiction-Team Control Panel<h1></div>
  <?include"content/header.php";?>
  </div>
  <div id="index">
  <div id="rblock">
 <?include"content/rblock.php";?>
  </div>
  <div id="lblock">
  <?include"content/lblock.php";?>

  </div>
  <div id="cblock">
 <?include"content/cblock.php";?>
  </div>
  </div>
   <div class="clear"></div>
     <?include"content/footer.php";?>

</div>


</body>

</head>
</html>
