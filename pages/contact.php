<?php ob_start();
require "../utile/formatage.php";
?>

<?php
if (isset($_POST['mail']) && isset($_POST['objet']) && ($_POST['message'])) {
    $to = "niaux_t@etna-alternance.net";
    $subject = $_POST['objet'];
    $message = $_POST['message'];
    $from = $_POST['mail'];
    mail($to, $subject, $message, $from);
?>
    <div class="alert alert-success" role="alert">
        Message envoyé !
    </div>
<?php } ?>

<div class="container text-center">
    <?= formatageTitre("Mes informations personnelles :") ?>
    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="../sources/icones/telIcone.png" width="100px" alt="" srcset=""></td>
                <td><img src="../sources/icones/facebookIcone.png" width="100px" alt="" srcset=""></td>
                <td><img src="../sources/icones/youtubeIcone.png" width="100px" alt="" srcset=""></td>
            </tr>
        </thead>
        <tbody>
            <tr class="contact">
                <td>07.69.25.36.68</td>
                <td><a href="https://www.facebook.com/" target="_blank">Ma Page Facebook <img src="../sources/icones/externalLink.png" width="16px" alt=""></a></td>
                <td><a href="https://www.youtube.com/@thomasniaux/" target="_blank">Ma chaine YouTube <img src="../sources/icones/externalLink.png" width="16px" alt=""></a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container text-center">
    <?= formatageTitre("Formulaire de contact :") ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Objet :</label>
            <select class="form-control" id="objet" name="objet">
                <option value="propAlternance">Proposition d'alternance</option>
                <option value="question">Question</option>
                <option value="remarque">Remarque</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message :</label>
            <textarea class="form-control" id="message" name="message" placeholder="Entrez votre message..." rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php

$content = ob_get_clean();
require "./commons/template.php";
