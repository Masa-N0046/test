<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");

$pdo->exec("insert into diworks_keijiban(handlename,title,comments) values('" . $_POST['handlename'] . "','" . $_POST['title'] . "','" . $_POST['comments'] . "');");

// $val = $_POST['handlename'].$_POST['title'].$_POST['comments'];

// if ($val == "") {
//   return false;
// }

header("Location:http://localhost:8888/diworks_keijiban/index.php");


?>