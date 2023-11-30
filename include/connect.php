<?php
$servername = "localhost";
$username = "felhasznalonev";
$password = "jelszo";
$dbname = "adatbazis_nev";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include 'config.php';

$sql = "SELECT * FROM helyszinek";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Helyszín: " . $row["helyszin"] . "<br>";     
    }
} else {
    echo "Nincs eredmény.";
}

$conn->close();include 'config.php';

$sql = "SELECT * FROM helyszinek";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Helyszín: " . $row["helyszin"] . "<br>";
    }
} else {
    echo "Nincs eredmény.";
}

$conn->close();
include 'config.php';

$sql = "SELECT * FROM helyezesek ORDER BY orszag ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Helyezés: " . $row["helyezes"] . ", Ország: " . $row["orszag"] . "<br>";
    }
} else {
    echo "Nincs eredmény.";
}

$conn->close();
include 'config.php';

$sql = "SELECT helyezes, SUM(ermek) AS ermek_osszesen FROM eremszerzok GROUP BY helyezes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Helyezés: " . $row["helyezes"] . ", Érmek összesen: " . $row["ermek_osszesen"] . "<br>";
    }
} else {
    echo "Nincs eredmény.";
}

$conn->close();
?>