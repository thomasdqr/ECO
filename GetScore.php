<?php

session_start();

$city = $_GET['city'];
$score = $_GET['score'];

$dbh = new PDO('mysql:host=thomasdeltroot.mysql.db;dbname=thomasdeltroot', 'thomasdeltroot', 'Password98');
		
$dbh->query("INSERT INTO eco (id, city, score) VALUES ('', '$city', '$score')");

echo $city." ".$score;




?>