<?php
include_once('telemetry_settings.php');
ini_set('memory_limit','1024M');


if($db_type=="mysql"){
    echo "echo is called <br>";
    $cmd = "select dl from speedtest_users";
    $conn = new mysqli($MySql_hostname, $MySql_username, $MySql_password, $MySql_databasename) or die("1");
try{
    $stmt = $conn->query($cmd);
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
 	print_r($row);
	echo "document.write('". $row ."')";
}
    $conn = null;
}catche (PDOException $e)
{
	print "errora" . $e->getMessage() . "<br/>";
	die();
}
?>

