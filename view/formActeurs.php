<?php 
    session_start();
    ob_start();
?>
<form action="index.php?action=addActeur" method="post" class="form" enctype="multipart/form-data">
    <div class="formulaire">
        <h3>Formulaire</h3>
        <div class="box">
            <p>
                <label>
                    Nom :
                    <input type="text" name="nom" class="input">
                </label>
            </p>
        </div>
        <div class="box">
            <p>
                <label>
                    Prénom :
                    <input type="text" name="prenom" class="input">
                </label>
            </p>
        </div>
        <div class="box">
            <p>
                <label>
                    Sexe :
                    <select name="sexe" class="input">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </label>
            </p>
        </div>
        <div class="box">
            <p>
                <label>
                    Date de naissance :
                    <input type="date" name="dateNaissance" class="input">
                </label>
            </p>
        </div>
    </div>
    <div>
        <p>
            <input type="submit" name="submitActeur" value="Ajouter un acteur/une actrice" class="submitBtn">
        </p>
    </div>
</form>

<?php
    $titre="Ajouter un acteur/une actrice";
    $titre_secondaire="Ajouter un acteur/une actrice";
    $contenu=ob_get_clean();
    require "view/template.php";
?>