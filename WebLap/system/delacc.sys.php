<?php
require_once '../includes/config.php';
session_start();

if ($_SESSION['email']) {
    $emailToDelete = $_SESSION['email'];

    // Elkerüljük az SQL injection támadásokat az SQL lekérdezés parametrizált formában történő megírásával
    $sql = "DELETE FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    // A bindParam metódus használata biztonságosabb, mint az értékek közvetlen beillesztése a lekérdezésbe
    $stmt->bind_Param('s', $emailToDelete);
    $stmt->execute();
    $result= $stmt->get_result();
    // Ellenőrizd, hogy ténylegesen törölve lett-e valaki
    if ($result->num_rows > 0) {
        echo "A felhasználó sikeresen törölve lett az adatbázisból.";
        include('../system/logout.sys.php');
        header("Location: ../index.php");
    } else {
        echo "Nem található felhasználó ezzel az email címmel az adatbázisban.";
        include('../system/logout.sys.php');
        header("Location: ../index.php");
    }
}
