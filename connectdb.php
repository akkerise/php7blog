<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 6/6/17
 * Time: 10:22 AM
 */

try {
    $conn = new PDO("mysql:host='127.0.0.1:80';dbname='maindoors'", 'root', '');
} catch (PDOException $e) {
    echo "Failed";
    echo "<br>" . $e->getMessage();
}
