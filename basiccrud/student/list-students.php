<?php
include "connectdb.php";

$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();

include "../templates/header.php" ?>

    
    
    <table class="table">

    <thead>

    <tr>

        <th>Id</th>

        <th >Voornaam</th>

        <th>Achternaam</th>

        <th>Acties<th>

        <th>Adres<th>


    </tr>

    </thead>

    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["voornaam"]; ?></td>

            <td><?php echo $row["achternaam"]; ?></td>

            <td><a class="btn btn-outline-primary" href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
            <?php include "../modal/modal.php"?>


            <td><br></td>
            <td><?php echo $row["email"]; ?></td>
            <td><br></td>
            <td><?php echo $row["telefoonnummer"]; ?></td>
            <td><br></td>
            <td><?php echo $row["straatnaam"]; ?></td>
            <td><br></td>
            <td><?php echo $row["huisnummer"]; ?></td>
            <td><br></td>
            <td><?php echo $row["huisnummer_toevoeging"]; ?></td>
            <td><br></td>
            <td><?php echo $row["woonplaats"]; ?></td>
            <td><br></td>
            <td><?php echo $row["postcode"]; ?></td>
            <td><br></td>
            <td><?php echo $row["klas_id"]?></td>

        </tr>

    <?php } ?>

    </tbody>

</table>

<?php include "../templates/footer.php" ?>