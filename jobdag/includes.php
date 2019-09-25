<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'jobdag';
    $dbconn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dbconn, $user, $pw);
?>