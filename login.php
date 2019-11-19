<?php require 'header.tpl.php' ?>

<section class ="posts">
    <h2 class="form-title">Bon retour parmi nous</h2>
    <form id="form-inscription" action="" method="post">
        <fieldset>
            <div class="label-input-group">
                <label class="input-title">pseudo</label>
                <input class="placeholder-input" id="pseudoID" type="text" name="pseudoID" placeholder="indiquez votre pseudo…">
                <span class="indication-message">Remplir ce champs est indispensable pour la suite</span>
            </div>

            <div class="label-input-group">
                <label class="input-title">mot de passe</label>
                <input class="placeholder-input" id="passwordID" type="password" name="passwordID" placeholder="indiquez votre mot de passe…">
                <span class="indication-message">Remplir ce champs est indispensable pour la suite</span>
            </div>

            <div class="error-input">
            </div>

        </fieldset>
        <div class="button-group">
            <button type="submit" class="pure-button">Se connecter</button>
        </div>
    </form>    
</section>

<?php require 'footer.php' ?>