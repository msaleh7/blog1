



<?php



$serverName = "mysqldb7.mysql.database.azure.com"; // update me
$connectionOptions = array(
"Database" => "mysqldb7", // db name
"Uid" => "msaleh7", // update me
"PWD" => "Msm@9810959" // update me
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

//$conn = new mysqli();
//$conn->init();

// below contains certificate path required in azure
//$conn->ssl_set(NULL,NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); // set SSL options

//$conn->real_connect('mysqldb7.mysql.database.azure.com', 'msaleh@mysqldb7', 'msaleh123', 'mysqldb7', 3306, MYSQLI_CLIENT_SSL); // actually establish connection via port 3306 using ssl

if ($conn->connect_error) {
    die ("Could not connect. ".$conn->connect_error);
}


?>





