<?php
require_once '../../../../src/helpers/utils.php';

require_absolute('config/config.inc.php');
require_absolute('src/helpers/Database.php');
$db = new Database();
$conn = $db->getConnection();

$id = $_POST['id'];
$query = "SELECT * FROM users WHERE id = :id";  // Correction de la vulnérabilité SQL Injection intentionnelle
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

echo "<h1>Results</h1>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . htmlspecialchars($row['id']) . "<br>";
    echo "Username: " . htmlspecialchars($row['username']) . "<br>";
    echo "Password: " . htmlspecialchars($row['password']) . "<br><hr>";
}
