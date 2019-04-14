



<?php






$conn = new mysqli();
$conn->init();

// below contains certificate path required in azure

$conn->ssl_set(NULL,NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); // set SSL options //AES256-SHA

//$conn->ssl_set(NULL,NULL, "AES256-SHA", NULL, NULL); // set SSL options //AES256-SHA



$conn->real_connect('mysqldb7.mysql.database.azure.com', 'msaleh7@mysqldb7', 'Msm@9810959', 'blogdb', 3306, MYSQLI_CLIENT_SSL); // actually establish connection via port 3306 using ssl

if ($conn->connect_error) {
    die ("Could not connect. ".$conn->connect_error);
}




$sql = "SELECT * FROM posts ORDER BY ID DESC";
$results = mysqli_query($dbconn, $sql) or die(mysqli_errno());

$posts = "";

if (mysqli_num_rows($results) > 0){
    while ($rows = mysqli_fetch_assoc($results))
    {
        $ID = $rows['ID'];
        $title = $rows['Title'];
        $Content = $rows['Content'];
        $Date = $rows['Date'];
        
        
        $posts .= "<div><h2><a href = 'view_post.php?pid=$ID'>$title</a></h2><h3>$Date</h3><p>$Content</p></div>";
    }
    echo $posts;
} else
{"There are no posts to display";}


?>





