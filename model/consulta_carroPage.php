<?php
$consulta = $connexio->prepare("SELECT ID_Producte, Nom_Producte, Descripcio, Preu, Imagen FROM `Productes` WHERE ID_Producte=:producte");
$consulta->bindValue(':producte', $id_producte);
$consulta->execute();
$dades = $consulta->fetchAll(PDO::FETCH_ASSOC);