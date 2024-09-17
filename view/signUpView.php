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

    <div id="form-sites">
        <form action="../controller/signUpSend.php" method="post">
            <label for="user">Nom</label>
            <input type="lastname" name="lastname" class="form-control" id="lastname" required>

            <label for="user">Prénom</label>
            <input type="firstname" name="firstname" class="form-control" id="firstname" required>

            <label for="user">Adresse mail</label>
            <input type="email" name="email" class="form-control" id="email" required>

            <label for="user">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password" required>

            <label for="user">Date de naissance</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="2020-07-22" min="1920-01-01" max="2018-12-31" required/>

            <label for="referents">Référent</label>
            <select name="referents" id="referents" required>
        
                <?php
                    foreach($referents as $referents) {
                    ?>
                        <option value="<?= $referents["id"]?>"><?=$referents["firstname"] ?>  <?= $referents['lastname']?></option>
                    <?php
                    }
                ?>
            </select>
        
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
            <input type="submit" id="validate" value="Envoyer">
        </form>
    </div>



</main>


<footer>
        <link rel="stylesheet" href="../style/style.css">

            <div>
                <p>Roubaix, siège social</p>
                <p>45, bd du Général Leclerc</p>
                <p>59100 Roubaix</p>
                <p>📞 : 03 28 07 59 80</p>
            </div>

            <div>
                <p>Site de Lille</p>
                <p>48 rue des canonniers</p>
                <p>59000 Lille</p>
                <p>📞 : 03 20 63 30 80</p>
            </div>

            <div>
                <p>Site d'Armentières</p>
                <p>8 rue Philippe de Girard</p>
                <p>59280 Armentières</p>
                <p>📞 : 03 28 52 90 50</p>
            </div>
            
            <div>
                <p>Site de Saint-Omer</p>
                <p>17 rue Allent</p>
                <p>62500 Saint-Omer</p>
                <p>📞 : 03 28 52 90 60</p>
            </div>
        
            <p id="warning"><strong>Attention</strong>, si vous faites partie de l'équipe pédagogique, je vous invite à prendre contact avec l'administrateur des E2C Grand-Lille</p>
            
    </footer>

</body>



</html>