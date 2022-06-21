<?php

include "student/connectdb.php";

$code =$_POST['code'];
$vestiging =$_POST['vestiging'];
$sectie =$_POST['sectie'];
$cohort =$_POST['cohort'];
$id =$_POST['id'];

$sql= "UPDATE klas SET code = :code, vestiging = :vestiging, sectie = :sectie, cohort = :cohort WHERE id= :id";
$sth= $db->prepare($sql);
$sth->execute([
    ':code'=> $code,
    ':vestiging'=> $vestiging,
    ':id'=> $id,
    ':sectie'=> $sectie,
    ':cohort'=> $cohort,
]);


header("location: index.php");