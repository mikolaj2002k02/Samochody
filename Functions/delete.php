<?php
include "polacz.php";
$ID = $_GET['ID']; //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if($sql = $baza->prepare( "DELETE FROM samochody WHERE ID = ?;" ))
{
 $sql->bind_param( "i", $ID);
 $sql->execute();
 $sql->close();
}
$baza->close();
header("Location: https://localhost/Samochody/index.php")

?>