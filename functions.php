<?php 
function db_conn() { 
    define('DSN','mysql:host=localhost;dbname=lesson1;charset=utf8mb4'); 
    define('DB_USER','root'); 
    define('DB_PASS',''); 
    try { 
        $dbh = new PDO(DSN,DB_USER,DB_PASS); 
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    } catch (PDOException $e){ 
        echo $e->getMessage();   //デバッグ用 
        exit; 
    } 
    return $dbh; 
} 
