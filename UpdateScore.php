<?php

session_start();

$city = $_GET['city'];
$score = $_GET['score'];

$dbh = new PDO('mysql:host=thomasdeltroot.mysql.db;dbname=thomasdeltroot', 'thomasdeltroot', 'Password98');
		
$dbh->query("UPDATE eco SET score='$score' WHERE city='$city' ");

$result = "";
foreach($dbh->query("SELECT city, score FROM eco ORDER BY score DESC LIMIT 10") as $row) {
	echo $row[0].";".$row[1].";";
}


?>