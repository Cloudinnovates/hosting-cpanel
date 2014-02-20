<?
ob_start();
    if(isset($_SESSION['CurrentUser']) )
   {    
        header('Location: member.php');
       } 
    


include('config.php');
if(empty($_POST['username']) === true || empty($_POST['password']) === true){
    
header('Location: hack.php');
}
else{
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $username =  mysql_real_escape_string($username);}
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $password = mysql_real_escape_string($password);
        $password = md5($password);
        }
if(isset($_POST['token'])){
     $token = $_POST['token'];    
}
else{
         header('Location: hack.php');
 }
$user_group = 6;
$data = mysql_query("SELECT user_id FROM dle_users WHERE name = '$username' AND password = '$password' AND user_group = '$user_group'");
//202cb962ac59075b964b07152d234b70 -- 123
if(mysql_num_rows($data)){
list($id) = @array_values(mysql_fetch_assoc($data));

if($id){
	
    $_SESSION['CurrentUser'] = $username;
	include('index3.php');
	 flush(); // Flush the buffer
        header("Location: index3.php"); // Rewrite the header




    }
else {
    echo  "failed";
    
}

}
}


?>
