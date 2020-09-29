<?php

$host = "localhost";          
$user = "m1r1st4r";                  
$password = "test1";  
$dbname = "account_info";       



$dbconn = mysql_connect("$host","$user","$password");

$status = mysql_select_db("$dbname",$dbconn);

if(!$status) {                      

   echo("DB 연결 실패");

   exit;

}

$result_exist = mysql_query("SHOW TABLES LIKE 'account_info'");

$row_exist = mysql_fetch_array($result_exist); 

if($row_exist == true){			

echo("exist");

} else { 

echo("not exist");

}

?>

