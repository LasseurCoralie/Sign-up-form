<?php 
    require 'header.tpl.php';
    require 'data.php';

    if (!empty($_POST) && isset($_POST)){
        $peudoUser = $_POST['pseudo'];
        $passwordUser = $_POST['password'];
        $emailUser = $_POST['email'];
        // var_dump($peudoUser, $passwordUser, $emailUser);
        setcookie('pseudo', $peudoUser);
        setcookie('password', $passwordUser);
        setcookie('email', $emailUser);
    }

//J'AI RÉUSSI À CRÉER UN COOKIE À PARTIR DES DONNÉES RÉCUPÉRER EN POST

?>

<section class ="posts">
    <h2 class="form-title">Bienvenu.e parmi nous</h2>
    <form id="form-inscription" action="" method="post">
        <fieldset>
            <div class="label-input-group">
                <label class="input-title">pseudo</label>
                <input class="placeholder-input" id="pseudo" type="text" name="pseudo" placeholder="indiquez votre pseudo…">
                <span class="indication-message">Remplir ce champs est indispensable pour la suite</span>
            </div>

            <div class="label-input-group">
                <label class="input-title">mot de passe</label>
                <input class="placeholder-input" id="password" type="password" name="password" placeholder="indiquez votre mot de passe…">
                <span class="indication-message">Remplir ce champs est indispensable pour la suite</span>
            </div>

            <div class="label-input-group">
                <label class="input-title">e-mail</label>
                <input class="placeholder-input" id="email" type="text" name="email" placeholder="indiquez votre email…">
                <span class="indication-message">Remplir ce champs est indispensable pour la suite</span>
            </div>

            <div class="error-input">
            </div>

        </fieldset>
        <div class="button-group">
            <button type="submit" class="pure-button">Soumettre</button>
        </div>
    </form>    
</section>

<?php require 'footer.php' ?>