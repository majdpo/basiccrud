
<?php  $code = $vestiging = $sectie = $cohort = "";

if (!empty($klas)) {

    $code = $klas["code"];

    $vestiging = $klas["vestiging"];

    $sectie = $klas["sectie"];

    $cohort = $klas["cohort"];

}
?>

<div class="form-group"><label for="code">Code</label>
    <input class="form-control" type="text" required placeholder="Klas code" id="code" name="code" value="<?php echo $code;?>"></div>

<div class="form-group"><label for="vestiging">Vestiging</label>
    <input class="form-control" type="text" id="vestiging" required placeholder="Vestiging" name="vestiging"value="<?php echo $vestiging;?>"></div>

<div class="form-group"><label for="sectie">Sectie</label>
    <input class="form-control" type="text" id="sectie" required placeholder="Sectie" name="sectie" value="<?php echo $sectie;?>" ></div>

<div class="form-group"><label for="cohort">Cohort</label>
    <input class="form-control" type="number" id="cohort" required placeholder="Cohort" name="cohort" value="<?php echo $cohort;?>"></div>

<input type="hidden" name="id" value="<?php echo $klas["id"]; ?>">

<input class="btn btn-primary" type="submit" value="submit">
