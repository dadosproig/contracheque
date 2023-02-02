<?php
$hostname=$_ENV['HOST'];
$dbName = $_ENV['DATABASE'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$port = $_ENV['3306'];
$ssl = $_ENV['MYSQL_ATTR_SSL_CA'];

// Set SSL cert and open connection to the MySQL server
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
$mysqli->real_connect($hostname, $dbName, $username, $password, $port);

if ($mysqli->connect_error) {
    echo "Not connected to the database";
} else {
    echo "Successfully connected to the database";
}
?>
