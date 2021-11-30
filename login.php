<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php
    include "class/db.php";
    include "modules/banner.php";
    include 'modules/header.php';
?>
<main>
    <section id="formConnexion">
        <form id="formulaire" data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="loginTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CONNEXION</legend>
                <div id="formulaireConnexion">
                    <input type="text" name="username" id="usernameEnregistrer" required="required" value=<?php echo $_COOKIE["usernameEnregistre"]??"" ?>>
                    <label for="usernameEnregistrer" id="labelEmail2">Login</label>
                    <input type="password" name="mdp" id="mdpEnregeistrer" required="required" value=<?php echo $_COOKIE["mdpEnregistre"]??""?>>
                    <label for="mdpEnregeistrer" id="labelMdp">Mot de passe</label>
                    <div id="divMessageIncorrect">
                        <p id="messageIncorrect">
                            <?php if(isset($_SESSION["mdpIncorrect"]) == true) {
                                echo "Adresse email ou mot de passe incorrect";
                            }?>
                        </p>
                    </div>
                    <input type="checkbox" name="enregistrer" id="enregistrer" value="Enregistrer" class="checkBox">
                    <label id="labelEnregistrer" for="enregistrer" class="labelLoisir">S'enregistrer</label>
                    <div id="divButtonsInscription">
                        <button type="submit" class="envoyerInscription">Se connecter</button>
                        <button type="reset" class="effacerInscription">Effacer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>