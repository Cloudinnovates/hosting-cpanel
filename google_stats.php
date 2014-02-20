<link rel="stylesheet" type="text/css" href="css/database2.css">
<?
//http://www.alexa.com/siteinfo/bravohm.com
$alexa = 'http://www.alexa.com/siteinfo/';

$data = mysql_query("SELECT `username`, `url` , `password` FROM `file` WHERE `user`='$name' ");
while($id = mysql_fetch_array($data)){
  $url = $id['url'];
}

$url =(explode( '/f/ft2.php', $url ));
$url = $url[0];
$url2 = str_replace('http://','',$url);


$source = file_get_contents('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url2);

//Alexa Rank
preg_match('/\<popularity url\="(.*?)" text\="([0-9]+)" source\="panel"\/\>/si', $source, $matches);
$aresult = ($matches[2]) ? $matches[2] : 0;

//Alexa Sites Linking in
preg_match('/\<linksin num\="([0-9]+)"\/\>/si', $source, $cocok);
$alinksin = ($cocok[1]) ? $cocok[1] : 0;


echo "<div class=\"alex_info\">";
echo "       <table>";
echo "<tr>";

  echo "<br><tr><td> Your Website Url : ".$url2."</td><br>";
  echo "<tr><td> Alexa Traffic Rank: ".$aresult."</td><br>";
 echo "<tr><td> Alexa Sites Linking In: ".$alinksin."</td><br>";
echo "</tr><tr><td>";
echo  "<a href=\"";
echo $alexa;
  echo  $url2;
  echo  "\" target=\"_blank\"><button class=\"cupid-green1\" >Alexa Information</button></a></td>";


?>
</div>
</table>
