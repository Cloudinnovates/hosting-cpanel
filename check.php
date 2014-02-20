<?
ob_start();
    if(isset($_SESSION['CurrentUser']) )
   {    
        header('Location: member.php');
       } 
    


include('../cpanel3/config.php');
if(empty($_POST['login_name']) === true || empty($_POST['login_password']) === true){
    

}
else{
    if(isset($_POST['login_name'])){
        $login_name = $_POST['login_name'];
        $login_name =  mysql_real_escape_string($login_name);}
    if(isset($_POST['login_password'])){
        $login_password = $_POST['login_password'];
        $login_password = mysql_real_escape_string($login_password);
        $login_password = md5(md5($login_password));
        }
/*if(isset($_POST['token'])){
     $token = $_POST['token'];    
}
else{
         header('Location: hack_token.php');
 }*/
$user_group = 6;
$data = mysql_query("SELECT user_id FROM dle_users WHERE name = '$login_name' AND login_password = '$login_password' AND user_group = '$user_group'");
//202cb962ac59075b964b07152d234b70 -- 123
if(mysql_num_rows($data)){
list($id) = @array_values(mysql_fetch_assoc($data));

while($id){
	
    $_SESSION['CurrentUser'] = $login_name;
	/*include('index3.php');
	 flush(); // Flush the buffer*/
        header('Location: index3.php'); // Rewrite the header

	var_dump($id);


    }
/*else {
    echo  "failed";
    
}*/

}
}


?>
