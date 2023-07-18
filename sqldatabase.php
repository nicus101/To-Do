<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

$conn = mysqli_connect($servernamem, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 {
    while ($row = mysqli_fetch_assoc($result)) {
        echo 
    }
}
// dokonczyc ladowanie bazy todo z mysql