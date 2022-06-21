<!-- Button trigger modal -->
<td ><button class="btn btn-outline-danger " type="button" data-toggle="modal" data-target="#exampleModal">
    Delete
    </button></td>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to confirm your delete action?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <a href="delete-student.php?id=<?php echo $row["id"]?>"><button class="btn btn-outline-danger">Delete</button></a>

            </div>
        </div>
    </div>
</div>