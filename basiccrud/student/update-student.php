<?php

include "connectdb.php";

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$id =$_POST['id'];
$email= $_POST['email'];
$telefoonnummer= $_POST['telefoonnummer'];
$straatnaam= $_POST['straatnaam'];
$huisnummer= $_POST['huisnummer'];
$huisnummer_toevoeging= $_POST['huisnummer_toevoeging'];
$woonplaats= $_POST['woonplaats'];
$postcode= $_POST['postcode'];
$klas_id= $_POST['klas_id'];

include "validation.php";


$sql= "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, email = :email, telefoonnummer = :telefoonnummer, straatnaam = :straatnaam, huisnummer = :huisnummer, huisnummer_toevoeging = :huisnummer_toevoeging, woonplaats = :woonplaats, postcode = :postcode, klas_id = :klas_id WHERE id= :id";
$sth= $db->prepare($sql);
$sth->execute([
    ':voornaam'=> $voornaam,
    ':achternaam'=> $achternaam,
    ':id'=> $id,
    ':email'=> $email,
    ':telefoonnummer'=> $telefoonnummer,
    ':straatnaam'=> $straatnaam,
    ':huisnummer'=> $huisnummer,
    ':huisnummer_toevoeging'=> $huisnummer_toevoeging,
    ':woonplaats'=> $woonplaats,
    ':postcode'=> $postcode,
    ':klas_id'=> $klas_id
]);

header("location: students.php");