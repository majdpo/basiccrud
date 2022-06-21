<?php

include "student/connectdb.php";


$code =$_POST['code'];
$vestiging =$_POST['vestiging'];
$sectie =$_POST['sectie'];
$cohort =$_POST['cohort'];






$sql= "INSERT INTO  klas (code, vestiging, sectie, cohort) VALUE(?,?,?,?)";
$sth= $db->prepare($sql);
$sth->execute([$code, $vestiging, $sectie, $cohort]);

header("location: index.php");