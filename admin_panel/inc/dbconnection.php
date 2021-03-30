<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=nerede_burada', 'root', '');
    $db->exec("set names utf8");
} catch (PDOException $e) {
    $e->getMessage();
}
