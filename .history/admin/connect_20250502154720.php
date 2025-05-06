<?php

try {
    $db = new PDO("mysql:host=localhost;port=3307;dbname=gestclub;charset=utf8", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}
