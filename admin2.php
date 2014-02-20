

<div class="Users">
<h1>Users Management</h1>
<form action="<?$_SERVER['PHP_SELF'];?>" method="POST">
<label>User : enter user name for specific user </label>
<input type="text" name="user" /><br>
<input type="submit" name="search" value="search" />
</form>

</div>


<?
/*
Authentication
*/



/*

config Area:


*/

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

echo "<h1>Insert New user</h1>";
echo "
<form action=\"\" method=\"POST\">
<label>Username</label>
<input type=\"text\" name=\"user\" /><br>
<label>PMA user</label>
<input type = \"text\" name=\"PMAU\"/><br>
<label>PMA Password</label>
<input type = \"text\" name=\"PMAP\"/><br>
<label>PMA Link</label>
<input type = \"text\" name=\"PMAL\"/><br>
<label>File Manager Password </label>
<input type = \"text\" name=\"FTPU\"/><br>
<label>File Manager Username</label>
<input type = \"text\" name=\"FTPP\"/><br>
<label>File MAnager URL : </label>
<input type = \"text\" name=\"FTPL\"/><br>
<input type = \"submit\" name=\"insert\" value=\"insert\"/>
</form>


";
if(isset($_POST['insert'])){

$user = $_POST['user'];
$PMAU = $_POST['PMAU'];
$PMAP = $_POST['PMAP'];
$PMAL = $_POST['PMAL'];
$FTPU = $_POST['FTPU'];
$FTPP = $_POST['FTPP'];
$FTPL = $_POST['FTPL'];
$result = mysql_query("INSERT INTO `database` (name, username, password, link)
VALUES ('$user', '$PMAU','$PMAP','$PMAL')");
$filemanager = mysql_query("INSERT INTO `file` (user, username, password, url)
VALUES ('$user', '$FTPU','$FTPP','$FTPL')");
if($result && $filemanager){
echo "USER ADDED ! ";

}
}






?>


