<?php

include "student/connectdb.php";


$id=$_GET['id'];


$sql= "DELETE FROM klas WHERE id = :id";

$sth= $db->prepare($sql);

$sth->execute(
    [':id' => $id]
);



header("location: index.php");