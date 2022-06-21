<!-- Button trigger modal -->
<td ><button class="btn btn-outline-info " type="button" data-toggle="modal" data-target="#exampleModal2">
        Info
    </button></td>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2" style="color: #17a2b8">Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

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
                <td><?php echo $row["klas_id"];  ?></td>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>