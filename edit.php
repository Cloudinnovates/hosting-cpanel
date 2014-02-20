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
$user = $_POST['user'];
$id = $_POST['id'];
$select = mysql_query("SELECT * FROM `database` where name='$user' AND id = '$id' ");
while($r = mysql_fetch_assoc($select)){
echo $r['username']."<br>";
echo $r['password']."<br>";
echo $r['link']."<br>";
}

echo "
<table>
<tr><td><form action=\"\" method=\"POST\">
<label>PMA User : </label>
<input type=\"text\" name=\"PMAU\" >
<label>PMA PASS: </label>
<input type=\"text\" name=\"PMAP\" >
<label>PMA Link: </label>
<input type=\"text\" name=\"PMAL\" >
<input type=\"submit\" name=\"update\" value=\"update\">

</form></td></tr>
</table>";


if(isset($_POST['update'])){
$id = $_POST['id'];
$PMAU =  $_POST['PMAU'];
$PMAP =  $_POST['PMAU'];
$PMAL =  $_POST['PMAU'];
$update = mysql_query("UPDATE `database` SET username='$PMAU', password='$PMAP', link='$PMAL' WHERE id='$id'");
echo $update;
var_dump($update);
if($update){
echo "Successfully Updated ! ";
}
}
?>
