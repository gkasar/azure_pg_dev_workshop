<?php

$servername = "localhost";
$username = "postgres";
$password = "";
$dbname = "contosostore";

$conn = PostgreSQLi_init();

//PostgreSQLi_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);

PostgreSQLi_real_connect($conn, $servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(*) FROM contosostore.users";

$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {

  echo $result->num_rows . " results";

} else {
  echo "0 results";
}

$conn->close();

?>
