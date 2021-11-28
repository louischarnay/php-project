<?php
session_start();
include "class/db.php";
$db1 = new db();
if ($db1->fetchPerson($_POST["username"], $_POST["mdp"]) == true) {
    $_SESSION['connected'] = true;
    $_SESSION["mdpIncorrect"] = false;
    $_SESSION['nom'] = $db1->getNom($_POST["username"]);
    $_SESSION['prenom'] = $db1->getPrenom($_POST["username"]);
    header("Location: ../index.php");
}
else {
    $_SESSION["mdpIncorrect"] = true;
    header("Location: ../login.php");
}


if(isset($_POST["enregistrer"])){
    setcookie("usernameEnregistre", $_POST["username"], time() + 8400, '/');
    setcookie("mdpEnregistre", $_POST["mdp"], time() + 8400, '/');
}
else{
    setcookie("usernameEnregistre", "", time() - 3600, '/');
    setcookie("mdpEnregistre", "", time() - 3600, '/');
}