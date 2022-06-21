<?php

include "connectdb.php";

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email= $_POST['email'];
$telefoonnummer= $_POST['telefoonnummer'];
$straatnaam= $_POST['straatnaam'];
$huisnummer= $_POST['huisnummer'];
$huisnummer_toevoeging= $_POST['huisnummer_toevoeging'];
$woonplaats= $_POST['woonplaats'];
$postcode= $_POST['postcode'];
$klas_id= $_POST['klas_id'];



include "validation.php";



$sql= "INSERT INTO  student (voornaam, achternaam, email, telefoonnummer, straatnaam, huisnummer, huisnummer_toevoeging, woonplaats, postcode, klas_id) VALUE(?,?,?,?,?,?,?,?,?,?)";
$sth= $db->prepare($sql);
$sth->execute([$voornaam, $achternaam, $email, $telefoonnummer, $straatnaam, $huisnummer, $huisnummer_toevoeging, $woonplaats, $postcode, $klas_id]);

header("location: students.php");