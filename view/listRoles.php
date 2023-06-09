<?php 
    ob_start();
?>

<div class="recap">
    <p><?= $requete->rowCount() ?> rôles</p>
    <button class="addBtn"><a href="index.php?action=formRoles">Ajouter un rôle</a></button>
</div>

<table border=1 style='border-collapse:collapse;'>
    <thead>
        <tr>
            <th>FILM</th>
            <th>ACTEUR</th>
            <th>RÔLE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requete->fetchAll() as $role){ ?>
            <tr>
                <td name="Film"><a href="index.php?action=detailFilms&id=<?= $role["id_film"] ?>"><?= $role["titre_film"] ?></a></td>
                <td name="Acteur"><a href='index.php?action=detailActeurs&id=<?= $role["id_acteur"] ?>'><?= $role["prenom"] ?> <?= $role["nom"] ?></a></td>
                <td name="Rôle"><a href='index.php?action=detailRoles&id=<?= $role["id_role"] ?>'><?= $role["nom_role"] ?></a></td></tr>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php 
    $titre="Liste des rôles";
    $titre_secondaire="Liste des rôles";
    $chiffre=3;
    $center=0;
    $footer=0;
    $space=0;
    $contenu=ob_get_clean();
    require "view/template.php";
?>