<?php

$servername = "localhost";
$username = "prefac";       
$password = "8761";            
$dbname = "CITATE";  

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}


$sql = "SELECT * FROM CITATE ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'>";
    echo "<link rel='stylesheet' href='stil.css'>";
    echo "</head><body>";
    echo "<div class='citat-box'>";
    echo "<p class='citat'>„" . $row["Citat"] . "”</p>";
    echo "<p class='autor'>– " . $row["Autor"] . "</p>";
    echo "</div></body></html>";
} else {
    echo "Niciun citat găsit.";
}

$conn->close();
?>
