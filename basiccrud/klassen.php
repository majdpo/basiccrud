<?php
include "student/connectdb.php";

$sql = "SELECT * FROM klas";
$sth = $db->prepare($sql);
$sth->execute();

$klassen= $sth->fetchAll();