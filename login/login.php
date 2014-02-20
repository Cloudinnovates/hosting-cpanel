<?
ob_start();
if(isset($_SESSION['CurrentUser']) )
   {    
        header('Location:   index2.php');
       } 
else{
$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));

if(isset($_POST['login'])){
        include('check.php');
    }

    
}
?>






<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Cpanel</h1>
      <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <input type="hidden" name="token"  value="<?=$token;?>"/>

        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="login" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      
    </div>
  </section>
</body>
</html>
