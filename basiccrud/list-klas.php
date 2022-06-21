<?php
include "student/connectdb.php";

$sql = "SELECT * FROM klas";
$sth = $db->prepare($sql);
$sth->execute();

include "templates/header.php" ?>


    <table class="table">

        <thead>

        <tr>

            <th>Id</th>

            <th>Code</th>

            <th>Vestiging</th>

            <th>Sectie<th>

            <th>Cohort<th>

            <th>Acties</th>
        </tr>

        </thead>

        <tbody>

        <?php while($row = $sth->fetch()) { ?>

            <tr>

                <td><?php echo $row["id"]; ?></td>

                <td><?php echo $row["code"]; ?></td>

                <td><?php echo $row["vestiging"]; ?></td>

                <td><br></td>
                <td><?php echo $row["sectie"]; ?></td>
                <td><br></td>
                <td><?php echo $row["cohort"]; ?></td>


                <td><a class="btn btn-outline-primary" href="update-klas-form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>

                <td><a class="btn btn-outline-danger" href="delete-klas.php?id=<?php echo $row["id"]?>">Delete</a></td>



            </tr>

        <?php } ?>

        </tbody>

    </table>

<?php include "templates/footer.php" ?>