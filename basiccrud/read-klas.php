<?php

$id = empty($_GET["id"]) ? null : $_GET["id"];



include "student/connectdb.php";

$sql = "SELECT * FROM klas WHERE id=:id";



$params = array(

    "id" => $id

);



try {

    $sth = $db->prepare($sql);

    $sth->execute($params);

    $klas = $sth->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    echo $e->getMessage();

}




?>