<?php 
    ob_start();
    $list=$requete->fetchAll();
?>

<div class="recap">
    <p><?= $requete->rowCount() ?> acteurs/actrices</p>
    <button class="addBtn"><a href="index.php?action=formActeurs">Ajouter un acteur/une actrice</a></button>
</div>

    <table border=1 style='border-collapse:collapse;'>
        <thead>
            <tr>
                <th>NOM</th>
                <th>SEXE</th>
                <th>DATE DE NAISSANCE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $acteur){ ?>
                <tr>
                    <td name="Nom"><a href='index.php?action=detailActeurs&id=<?= $acteur["id_acteur"] ?>'><?= $acteur["prenom"] ?> <?= $acteur["nom"] ?></a></td>
                    <td name="Sexe"><?= $acteur["sexe"] ?></td>
                    <td name="Date de naissance"><?= $acteur["date_naissance"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php 
    $titre="Liste des acteurs/actrices";
    $titre_secondaire="Liste des acteurs/actrices";
    $chiffre=2;
    $center=0;
    $footer=0;
    $space=0;
    $contenu=ob_get_clean();
    require "view/template.php";
?>