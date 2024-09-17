<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Communauté de l'E2C</title>
    <link rel="icon" href="../assets/logo/logo_e2c_blanc.png">
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src=""></script>
</head>



<body>
<?php
    require_once('../_partials/_header.php');
    ?>
<main>
    <form action="../controller/signUpSend.php" method="post">
        <label for="sites">Site de l'utilisateur</label>
        <select name="site" id="sites" required>
            <?php
                foreach($sites as $site) {
                ?>
                    <option value="<?= $site["id"]?>"><?=$site["city"] ?></option>
                <?php
                }
            ?>
        </select>
        <select name="referent" id="referents" required></select>
        <input type="submit" value="Envoyer">
    </form>

</main>

</body>
</html>