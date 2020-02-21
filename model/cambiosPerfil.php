<?php
session_start();
require __DIR__ . "/connectaBD.php";                     //connectem la pàgina a la BD abans de mostrar el formulari al navegador

$nombre = "";
$apellido1 = "";
$apellido2 = "";
$email = "";
$username = "";
$password = "";
$adreca = "";
$poblacio = "";
$codiPostal = "";
$boolcontrasenya = "";

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$email = $_POST["email"];
$adreca = $_POST["adreca"];
$poblacio = $_POST["poblacio"];
$codiPostal = $_POST["codiPostal"];
$username = $_POST["usuari"];
$password = $_POST["password"];
$boolcontrasenya = $_POST["boolContrasenya"];

$usuariOriginal = $_SESSION['user_id'];

//FEM QUE LA CANVII SEMPRE, PER ALGUNA RAO SI ES FA EL QUE ESTA COMENTAT DONA ERROR
$connexio = connectaBD();
if($boolcontrasenya == "SI"){
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    $query2 = "UPDATE `Usuari`
            SET Nom_Usuari = :nombre, Cognom1 = :apellido1, Cognom2 = :apellido2, Email = :email, Adreça = :adreca, Poblacio = :poblacio, Codi_Postal = :codiPostal, usuari = :username, password = :password
            WHERE usuari = :usuariOriginal";

    $stmt2 = $connexio->prepare($query2);

    $stmt2->bindValue(':nombre', $nombre);
    $stmt2->bindValue(':apellido1', $apellido1);
    $stmt2->bindValue(':apellido2', $apellido2);
    $stmt2->bindValue(':email', $email);
    $stmt2->bindValue(':adreca', $adreca);
    $stmt2->bindValue(':poblacio', $poblacio);
    $stmt2->bindValue(':codiPostal', $codiPostal);
    $stmt2->bindValue(':username', $username);
    $stmt2->bindValue(':password', $passwordHashed); //OJO
    $stmt2->bindValue(':usuariOriginal', $usuariOriginal);
}else{
    $query2 = "UPDATE `Usuari`
            SET Nom_Usuari = :nombre, Cognom1 = :apellido1, Cognom2 = :apellido2, Email = :email, Adreça = :adreca, Poblacio = :poblacio, Codi_Postal = :codiPostal, usuari = :username
            WHERE usuari = :usuariOriginal";

    $stmt2 = $connexio->prepare($query2);

    $stmt2->bindValue(':nombre', $nombre);
    $stmt2->bindValue(':apellido1', $apellido1);
    $stmt2->bindValue(':apellido2', $apellido2);
    $stmt2->bindValue(':email', $email);
    $stmt2->bindValue(':adreca', $adreca);
    $stmt2->bindValue(':poblacio', $poblacio);
    $stmt2->bindValue(':codiPostal', $codiPostal);
    $stmt2->bindValue(':username', $username);
    $stmt2->bindValue(':usuariOriginal', $usuariOriginal);
}



if($stmt2->execute()){
    $_SESSION['user_id'] = $username;
    header('Location: /index.php?accio=login');
}

?>



