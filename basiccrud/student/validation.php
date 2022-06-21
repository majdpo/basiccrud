<?php

//E-mail validation:
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$email = (preg_match($regex, $email))?$email:die("<p style='text-align: center; font-size: 30px;'>Invalid email</p>");
filter_var($email, FILTER_VALIDATE_EMAIL);

//Huisnummer validation:
if (!is_numeric($huisnummer)){
die("<p style='text-align: center; font-size: 30px;'>Foute Huisnummer</p>");
}

//Telefoonnummer validation:
if (!is_numeric($telefoonnummer)){
die("<p style='text-align: center; font-size: 30px;'>Foute Telefoonnummer</p>");
}


// All validation
if (empty($voornaam && $achternaam && $huisnummer && $postcode && $woonplaats && $straatnaam && $telefoonnummer && $email )) {
    die("<p style='text-align: center; font-size: 30px;'>Je mist wat informatie die je moet invullen.</p>");
}


function PostcodeCheck($postcode)
{$remove = str_replace(" ", "", $postcode);
$upper = strtoupper($remove);
if (preg_match("/^\W[1-9]{1}[0-9]{3}\W[a-zA-Z]{2}\W*$/", $upper)) {
return $upper;
} else {
return false;
}}if (PostcodeCheck($postcode) !== false) {
echo "." . PostcodeCheck($postcode);
} else {echo "<p style='text-align: center; font-size: 30px;'>Ongeldige postcode.</p>";}

if (strlen($postcode) >= 7 || strlen($postcode) <= 5){
die("<p style='text-align: center; font-size: 30px;'>Postcode moet 6 nummers/letters zijn.</p>");
} else if (!preg_match(("/[A-Z]{2}/"), $postcode)){
    die("<p style='text-align: center; font-size: 30px;'>Postcode moet 4 nummers en 2 Hoofdletters hebben.</p>");
} else if (preg_match(("/[a-zA-Z]{3}/"), $postcode)){
    die("<p style='text-align: center; font-size: 30px;'>Postcode moet 4 nummers en 2 letters hebben.</p>");
}


