
<?php
$voornaam = $achternaam = $huisnummer = $postcode = $woonplaats = $huisnummer_toevoeging = $straatnaam = $telefoonnummer = $email =  $klas_id = "";

if (!empty($student)) {

$voornaam = $student["voornaam"];
$achternaam= $student["achternaam"];
$email= $student["email"];
$telefoonnummer = $student["telefoonnummer"];
$straatnaam= $student["straatnaam"];
$huisnummer_toevoeging = $student["huisnummer_toevoeging"];
$huisnummer= $student["huisnummer"];
$woonplaats= $student["woonplaats"];
$postcode= $student["postcode"];
$klas_id= $student["klas_id"];
}

include "../klassen.php";
?>
<div class="form-group"><label for="voornaam">Voornaam</label>
<input class="form-control" id="voornaam" type="text" required placeholder="voornaam" name="voornaam" value="<?php echo $voornaam;?>"></div>

<div class="form-group"><label for="achternaam">Achternaam</label>
<input class="form-control" id="achternaam" type="text" required placeholder="achternaam" name="achternaam" value="<?php echo $achternaam;?>"></div>

<div class="form-group"><label for="email">E-mail</label>
    <input class="form-control" type="email" id="email" required placeholder="e-mail" name="email" value="<?php echo $email;?>"></div>

<div class="form-group"><label for="telefoonnummer">Telefoonnummer</label>
<input class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" required placeholder="telefoonnummer" id="telefoonnummer" name="telefoonnummer" value="<?php echo $telefoonnummer;?>"></div>

<div class="form-group"><label for="straatnaam">Straatnaam</label>
<input class="form-control" type="text" id="straatnaam" placeholder="straatnaam" required name="straatnaam" value="<?php echo $straatnaam;?>"></div>

<div class="form-group"><label for="huisnummer">Huisnummer</label>
<input class="form-control" type="number" id="huisnummer" placeholder="huisnummer" required name="huisnummer" value="<?php echo $huisnummer;?>"></div>

<div class="form-group"><label for="huisnummer_toevoeging">Huisnummer toevoeging</label>
<input class="form-control" type="text" id="huisnummer_toevoeging" maxlength = "10" placeholder="huisnummer_toevoeging" name="huisnummer_toevoeging" value="<?php echo $huisnummer_toevoeging;?>"></div>

<div class="form-group"><label for="woonplaats">Woonplaats</label>
<input class="form-control" type="text" id="woonplaats" placeholder="woonplaats" required name="woonplaats" value="<?php echo $woonplaats;?>"></div>

<div class="form-group"><label for="postcode">Postcode</label>
<input class="form-control" type="text" id="postcode" placeholder="postcode" required name="postcode" value="<?php echo $postcode;?>"></div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="klasid">Klas</label>
    </div>
<select class="custom-select" id="klasid" name="klas_id">
    <?php foreach($klassen as $klas): ?>
        <option value="<?php echo $klas['code']; ?>"><?php echo $klas['code'];  ?></option>
    <?php endforeach; ?>
</select>
</div>




<input type="hidden" name="id" value="<?php echo $student["id"]; ?>">

<input class="btn btn-primary" type="submit" value="submit">
