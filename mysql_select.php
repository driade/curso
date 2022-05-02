<?php

try {

    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=curso', 'root', '');
    $dbh->setAttribute(PDO::ATTR_PERSISTENT, true);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh->query("SELECT * FROM users", PDO::FETCH_ASSOC);

    $rows = $stmt->fetchAll();
    foreach ($rows as $row) {
        echo "Nombre: " . $row['name'] . "<br/>";
    }

} catch (PDOException $e) {
    echo "Ha habido en la base de datos: " . $e->getMessage();
}
