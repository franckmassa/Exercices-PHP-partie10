<?php
//Déclaration des variables régex
$regexPhoneNumber = '/^[0-9]{10}$/'; //pour le numéro de téléphone
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/'; //Pour le nom et le prénom
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\/]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\'\éàéùçZàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]+$/';
$regexNumberLetter = '/^[0-9A-z]+$/'; //Pour le numéro pôle emploi
$regexNumber = '/^[0-9]+$/'; // Pour le nombre de badges
?>      
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" /> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <title>TP1</title>
    </head>
    <body>
        <?php
        //Conditions pour vérifier que les valeurs existent et test des regex et 
        //affichage des messages d'erreurs si les champs ne sont pas remplis
        if (isset($_POST['submit'])) {
            //Nom 
            if (isset($_POST['lastName'])) {
                if (preg_match($regexName, $_POST['lastName'])) {
                    echo $_POST['lastName'] . '. ';
                } else {
                    echo 'Veuillez entrer votre nom, ';
                }
            }
            //Prénom
            if (isset($_POST['firstName'])) {
                if (preg_match($regexName, $_POST['firstName'])) {
                    echo $_POST['firstName'] . '. ';
                } else {
                    echo 'Veuillez entrer votre prénom, ';
                }
            }
            //Date anniversaire
            if (isset($_POST['birthDate'])) {
                echo 'Date anniversaire : ' . $_POST['birthDate'] . '. ';
            } else {
                echo 'Veuillez entrer votre date de naissance, ';
            }
            //Ville de naissance
            if (isset($_POST['nativeCountry'])) {
                if (preg_match($regexText, $_POST['nativeCountry'])) {
                    echo $_POST['nativeCountry'] . '. ';
                } else {
                    echo 'Veuillez entrer votre pays de naissance, ';
                }
            }
            //Nationalité
            if (isset($_POST['nationality'])) {
                if (preg_match($regexText, $_POST['nationality'])) {
                    echo $_POST['nationality'] . '. ';
                } else {
                    echo 'Veuillez entrer votre nationalité, ';
                }
            }
            //Adresse
            if (isset($_POST['adress'])) {
                if (preg_match($regexAddress, $_POST['adress'])) {
                    echo $_POST['adress'] . '. ';
                } else {
                    echo 'Veuillez entrer votre adresse, ';
                }
            }
            //Adresse Email
            if (isset($_POST['email'])) {
                if (preg_match($regexMail, $_POST['email'])) {
                    echo $_POST['email'] . '. ';
                } else {
                    echo 'Veuillez entrer votre Email, ';
                }
            }
            //Téléphone
            if (isset($_POST['phone'])) {
                if (preg_match($regexPhoneNumber, $_POST['phone'])) {
                    echo $_POST['phone'] . '. ';
                } else {
                    echo 'Veuillez entrer votre numéro de téléphone, ';
                }
            }
            //Niveau d'étude
            if (isset($_POST['degree'])) {
                echo 'Votre niveau d\'étude est : ' . $_POST['degree'] . '. ';
            } else {
                echo 'Veuillez selectionner votre niveau d\'étude, ';
            }
            //Numéro pôle emploi
            if (isset($_POST['poleEmploiNumber'])) {
                if (preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])) {
                    echo $_POST['poleEmploiNumber'] . '. ';
                } else {
                    echo 'Veuillez entrer votre numéro pôle emploi, ';
                }
            }
            //Nombre de badges
            if (isset($_POST['badgeNumber'])) {
                if (preg_match($regexNumber, $_POST['badgeNumber'])) {
                    echo 'Vous avez : ' . $_POST['badgeNumber'] . ' badges. ';
                } else {
                    echo 'Veuillez selectionner un nombre de badge, ';
                }
            }
            //Lien Codecademy
            if (isset($_POST['linkCodecademy'])) {
                if (preg_match($regexText, $_POST['linkCodecademy'])) {
                    echo $_POST['linkCodecademy'] . '. ';
                } else {
                    echo 'Veuillez entrer le lien Codecademy, ';
                }
            }
            //Champs texte: Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?
            if (isset($_POST['superHero'])) {
                if (preg_match($regexText, $_POST['superHero'])) {
                    echo 'Votre texte : ' . $_POST['superHero'] . '. ';
                } else {
                    echo 'Veuillez répondre à la question, ';
                }
            }
            //Champs texte: Racontez-nous un de vos "hacks" (pas forcément technique ou informatique
            if (isset($_POST['hack'])) {
                if (preg_match($regexText, $_POST['hack'])) {
                    echo 'Votre texte : ' . $_POST['hack'] . '. ';
                } else {
                    echo 'Veuillez raconter votre expérience de hack, ';
                }
            }
            //Champs texte: Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?
            if (isset($_POST['ExperienceProgramming'])) {
                if (preg_match($regexText, $_POST['ExperienceProgramming'])) {
                    echo 'Votre texte : ' . $_POST['ExperienceProgramming'] . '. ';
                } else {
                    echo 'Veuillez renseigner vos expériences en programmation, ';
                }
            }
        } else {
            ?>
            <!-- Utilisation de bootstrap pour le style -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class=" mt-5 mb-5 text-center text-uppercase text-white p-2">Formulaire d'enregistrement pour les nouveaux apprenants</h1>
                    </div> 
                    <div class="row">
                        <div class="offset-md-2 col-md-12">
                            <!-- Création du formulaire -->
                            <form class="pt-3 pr-5 mb-5" action="index.php" method="POST">
                                <!-- Champs sous forme de liste -->
                                <ul>
                                    <li>
                                        <!-- Champs pour le nom -->
                                        <label class="d-block" for="lastName">Nom </label>
                                        <input class="border-dark w-50" type="text" name="lastName" id="lastName" />
                                    </li>
                                    <li>
                                        <!-- Champs pour le prénom -->
                                        <label class="d-block" for="firstName">Prénom </label>
                                        <input class="border-dark w-50" type="text" name="firstName" id="firstName" />
                                    </li>
                                    <li>
                                        <!-- Champs pour la date de naissance -->
                                        <label class="d-block" for="birthDate">Date de naissance </label>
                                        <input class="border-dark w-50" type="date" name="birthDate" id="birthDate" />
                                    </li>
                                    <li>
                                        <!-- Champs pour la ville de naissance -->
                                        <label class="d-block" for="nativeCountry">Pays de naissance </label>
                                        <input class="border-dark w-50" type="text" name="nativeCountry" id="nativeCountry" />
                                    </li>
                                    <li>
                                        <!-- Champs pour la nationalité -->
                                        <label class="d-block" for="nationality">Nationalité </label>
                                        <input class="border-dark w-50" type="text" name="nationality" id="nationality" />
                                    </li>
                                    <li>
                                        <!-- Champs pour l'adresse -->
                                        <label class="d-block" for="adress">Adresse </label>
                                        <input class="border-dark w-75" type="text" name="adress" id="adress" />
                                    </li>
                                    <li>
                                        <!-- Champs pour l'adresse email -->
                                        <label class="d-block" for="email">Email </label>
                                        <input class="border-dark w-75" type="email" name="email" id="email" />
                                    </li>
                                    <li>
                                        <!-- Champs pour le téléphone -->
                                        <label class="d-block" for="phone">Téléphone </label>
                                        <input class="border-dark w-50" type="tel" name="phone" id="phone" />
                                    </li>
                                    <li>
                                        <!-- création de la liste déroulante  pur le niveau d'étude -->
                                        <label class="d-block" id="degree">Diplôme</label>
                                        <select class="border-dark w-50" name="degree" id="degree">
                                            <option selected disabled>Choisir le niveau</option>
                                            <option>Sans diplôme</option>
                                            <option>Bac</option>
                                            <option>Bac + 2</option>
                                            <option>Bac + 3 ou supérieur</option>
                                        </select>
                                    </li>
                                    <li>
                                        <!-- Champs pour le numéro pôle emploi -->
                                        <label class="d-block" for="poleEmploiNumber">Numéro pôle emploi</label>
                                        <input class="border-dark w-75" type="text" name="poleEmploiNumber" id="poleEmploiNumber" />
                                    </li>
                                    <li>
                                        <!-- Champs pour le nombre de badge -->
                                        <label class="d-block" for="badgeNumber">Nombre de badges </label>
                                        <input class="border-dark w-25" type="number" name="badgeNumber" id="badgeNumber" />
                                    </li>
                                    <li>
                                        <!-- Champs pour le lien codecodemy -->
                                        <label class="d-block" for="linkCodecademy">Lien Codecademy </label>
                                        <input class="border-dark w-75" type="text" name="linkCodecademy" id="linkCodecademy" />
                                    </li>
                                    <li>
                                        <!-- Champs texte: Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? -->
                                        <label class="d-block" id="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                        <textarea class="border-dark w-75" name="superHero" id="superHero"></textarea>
                                    </li>
                                    <li>
                                        <!-- Champs texte: Racontez-nous un de vos "hacks" (pas forcément technique ou informatique -->
                                        <label class="d-block" id="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                        <textarea class="border-dark w-75" name="hack" id="hack"></textarea>
                                    </li>
                                    <li>
                                        <!-- Champs texte: Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? -->
                                        <label class="d-block" id="ExperienceProgramming">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                        <textarea class="border-dark w-75" name="ExperienceProgramming" id="ExperienceProgramming"></textarea>
                                    </li>
                                </ul>
                                <!-- Bouton pur envoyer le formulaire -->
                                <input class="bg-dark text-white ml-5 mb-5" type="submit" name="submit" value="soumettre" />
                            </form>
                        <?php } ?>
                    </div>
                    </div>
            </div>
    </body>
</html>


