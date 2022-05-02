<?php

try {

    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=curso', 'root', '');
    $dbh->setAttribute(PDO::ATTR_PERSISTENT, true);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $dbh->prepare("INSERT INTO users (name) values (:name)");
    $sth->execute(['name' => 'David']);

} catch (PDOException $e) {
    echo "Ha habido en la base de datos: " . $e->getMessage();
}
