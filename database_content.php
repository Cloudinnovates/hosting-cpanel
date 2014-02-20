<link rel="stylesheet" type="text/css" href="css/database.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
<div class="database_content" >
                <table>
                    <tr>
                    <td>UserName</td>
                    <td> Password</td>
                    <td>   PhpMyAdmin </td>

                    </tr>
                    
<?php
 if(isset($_SESSION['CurrentUser']) )
   {    
$name =$_SESSION['CurrentUser'];
       } 
    
$link = mysql_connect('localhost', 'user', 'password');
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

$name =$_SESSION['CurrentUser'];

$data = mysql_query("SELECT `username`, `link` , `password` FROM `database` WHERE `name`=	'$name' ");
while($id = mysql_fetch_array($data)){
  echo "<tr><td>".$id['username']."</td><br>";
  echo "<td>".$id['password']."</td><br>";
  echo "<td>";
  echo  "<a href=\"";
  echo  $id['link'];
  echo  "\"><button class=\"cupid-green1\">PHP My Admin</button></a>";
}

?>
</table>
