
  
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

$name =$_SESSION['CurrentUser'];



$data = mysql_query("SELECT `username`, `url` , `password` FROM `file` WHERE `user`='$name' ");
while($id = mysql_fetch_array($data)){
  echo "<tr><td> User name is : ".$id['username']."</td><br>";
  echo "<tr><td> Password is ".$id['password']."</td><br>";
  echo "<td>";
 /* echo "<iframe src=\"$id['url']\" width=\"100\" height=\"100\"></iframe>"; */

echo  "<a href=\"";
  echo  $id['url'];
  echo  "\"><button class=\"cupid-green1\" name=\"ftp\" id=\"ftp\">File Manager</button></a>";
}
?>
