<?php
/*$server ='localhost';
$username='root';
$passwd ='';
$db_name ='lumia';
*/
$server ='localhost';
$username='lumiacon';
$passwd ='&^#%Ra1s^%g786';
$db_name ='lumia_db';


$conn = mysql_connect($server, $username, $passwd);
if(!$conn)
{
	echo "Unable to connect to server".mysql_error();
}

$db = mysql_select_db($db_name,$conn);


?>