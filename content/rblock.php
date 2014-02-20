<?php
session_start();
/*
$_SESSION['dle_user_id'] = $member_id['user_id'];
$_SESSION['dle_password'] = $_POST['login_password'];
$_SESSION['member_lasttime'] = $member_id['lastdate'];


*/
      if(isset($_SESSION['dle_user_id']) && isset($_SESSION['dle_password']))
   {    
        include('member.php');
       } 
    
else{
    include('login/login.php');
    
    
    
    }
    
    
    ?>
