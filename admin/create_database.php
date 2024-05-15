<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Créer une connexion
$conn = new mysqli($servername, $username, $password);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Créer une base de données
$sql = "CREATE DATABASE fingerPrintBD";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Sélectionner la base de données
mysqli_select_db($conn, 'fingerPrintBD');

// Créer une table
$sql = "CREATE TABLE users (
    name VARCHAR(250) NOT NULL,
    level VARCHAR(250) NOT NULL,
    card INT(11) NOT NULL,
    password INT(4) NOT NULL,
    enabled INT(1) NOT NULL,
    depart_id INT(11) NOT NULL,
    timezone VARCHAR(30) NOT NULL,
    UsePeriod INT(11) NOT NULL,
    Start INT(11) NOT NULL,
    End INT(11) NOT NULL,
    duress VARCHAR(250)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
