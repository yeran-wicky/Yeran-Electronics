<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=yeran_electronics;','root', '');
} catch(Exception $e){
    exit("Unable to connect to database.yeran_electronics mysql_error()");
}
?>