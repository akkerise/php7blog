<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 6/6/17
 * Time: 9:12 AM
 */

require 'config.php';
require 'Database.php';

$db = new Database(DB_HOST,DB_PORT,DB_USER,DB_PASS,DB_DBNAME);
$sql = "INSERT INTO todo (title, datetime) VALUES ('Cong viec can lam', NOW())";
echo "<pre>"; var_dump($sql); echo "</pre>"; die();
$db->query($sql);
echo "<pre>"; var_dump($db); echo "</pre>"; die();
if($db->execute()){
    echo $db->lastInsertId('todo_id_seq');
}else{
    echo 'Insert Fail';
}