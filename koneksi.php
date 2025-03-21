<?php
$servername = "localhost";
$database = "db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

functin ambildata ($query) : array
{
    $conn = $GLOBALS['conn'];
    $hasil =mysqli_query(mysqli : $conn, query: $query);

    $data = [];
    while ($baris =mysqli_fetch_assoc(result: $hasil)) {
    }
    return $data;
}
?>