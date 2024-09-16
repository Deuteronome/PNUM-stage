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
    <!-- L'en-tête du site -->

    <header>
        <div class="header-logo">
            <img src="../assets/logo/logo_e2c_blanc.png" alt="Logo" class="logo">
        </div>
        <div id="header-titre">
            <h1>La Communauté de l'E2C</h1>
            <div id="header-subtitle">
            <h3>Réseau social</h3>
            </div>
        </div>
        <div class="header-logo">
            <img src="../assets/logo/logo_e2c_blanc.png" alt="Logo" class="logo">
        </div>
</header>


    <!--Partie Centrale-->
<main id="center">
    <div id="connexion">

        <div id="title">
            <h2> Connexion...</h2>
        </div>

        <div id="form">
            <form id="form" action="checkLogin.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="save-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form> 
        </div>


        <div>
            <h3> Créer un compte ?</h3>
            <h3> Mot de passe oublié ?</h3>
        </div>
    
</main>



    <!--Pied de page-->


    <footer>

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
        </div>
            
    </footer>
        
    </body>
</html>
