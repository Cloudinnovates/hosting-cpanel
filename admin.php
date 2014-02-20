<html>
<head>
	<title>Control Panel </title>
	<style type="text/css">
	#users{

		padding=10px;
		background: #737CA1;
		color:#FFFFFF;
		border: 1px solid #0000A0; 
	}
	.button{
		background: #6B00A1;
				color:#FFFFFF;

	}



	</style> 
		</head>
	<body>

<div id="users">
<h1>Users Management</h1>
<form action="<?$_SERVER['PHP_SELF'];?>" method="POST">
<label>User : enter user name for specific user </label>
<input type="text" name="user" /><br>
<input type="submit" name="search" value="search" class="button" />
</form>

</div>
<?
$link = mysql_connect('customer0.db.11252176.hostedresource.com', 'customer0', 'Ahmed@123');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make the current db
$db_selected = mysql_select_db('customer0', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>

<?
//end of config
if(isset($_POST['search'])){

$user = mysql_real_escape_string($_POST['user']);
$search = mysql_query("SELECT id FROM `database`where name = '$user'");
if($search){
echo "
<table>
<tr>
<form action=\"edit.php\" method=\"POST\">
<td><label>user</label>
<input type=\"text\" name=\"user\" value=\"$user\"
</td>";


echo "
<td>
<select name=\"id\">
<option value='0'>id</option>
";

while($id = mysql_fetch_array($search)){
$id_n = $id['id'];
echo"<option value='$id_n'>$id_n</option>";


}
echo "</select></td>";

echo "<td><input type=\"submit\" name=\"edit\" value=\"Edit\" />
</form></td></tr></table>";

}
}
else {
echo "User Not Found ! ";

}


?>

<?

echo "
<form id=\"users\" action=\"\" method=\"POST\">
<h1>Insert New user</h1>
<label>Username</label>
<input type=\"text\" name=\"user\" /><br>
<label>PMA user</label>
<input type = \"text\" name=\"PMAU\"/><br>
<label>PMA Password</label>
<input type = \"text\" name=\"PMAP\"/><br>
<label>PMA Link</label>
<input type = \"text\" name=\"PMAL\"/><br>
<input type = \"submit\" name=\"insert\" value=\"insert\" class=\"button\" />
</form>


";
if(isset($_POST['insert'])){

$user = $_POST['user'];
$PMAU = $_POST['PMAU'];
$PMAP = $_POST['PMAP'];
$PMAL = $_POST['PMAL'];
$result = mysql_query("INSERT INTO `database` (name, username, password, link)
VALUES ('$user', '$PMAU','$PMAP','$PMAL')");

if($result){
echo "USER ADDED ! ";

}
}

echo "
<form id=\"users\" action=\"\" method=\"POST\">
<h1>Insert New FTP User</h1>
<label>File Manager Password </label>
<input type = \"text\" name=\"FTPU\"/><br>
<label>File Manager Username</label>
<input type = \"text\" name=\"FTPP\"/><br>
<label>File MAnager URL : </label>
<input type = \"text\" name=\"FTPL\"/><br>
<label>User Assoctiated with account  : </label>
<input type = \"text\" name=\"user\"/><br>
<input type = \"submit\" name=\"ftp\" value=\"Add FTP user\" class=\"button\" />
</form>


";

if(isset($_POST['ftp'])){
$user = $_POST['user'];
$FTPU = $_POST['FTPU'];
$FTPP = $_POST['FTPP'];
$FTPL = $_POST['FTPL'];
$filemanager = mysql_query("INSERT INTO `file` (user, username, password, url)
VALUES ('$user', '$FTPU','$FTPP','$FTPL')");
if($filemanager){
echo "User Added Successfully ";
}
else{

echo "error occured ! ";

}
}
?>


</body>
</html>
