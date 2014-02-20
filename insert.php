<form action="" method="post">
password : <input type="password" name="password" />
Username: <input type="text" name="username" />
<input type="submit" name="submit" value = "Update" />
</form>
<?

$link = mysql_connect('fictiondata.db.11252176.hostedresource.com', 'fictiondata', 'Fiction@752343');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make the current db
$db_selected = mysql_select_db('fictiondata', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username =  mysql_real_escape_string($username);
        $password = $_POST['password'];
        $password = mysql_real_escape_string($password);
        $password = md5($password);
$user_group = 6;
$data = mysql_query("UPDATE dle_users set password = '$password' WHERE name = '$username' AND user_group = '$user_group'");
}


?>
