<header>
        <div class="header-logo">
            <img src="../assets/logo/logo_e2c_blanc.png" alt="Logo" class="logo">
            <link rel="stylesheet" href="../style/style.css">
        </div>
        <div id="header-titre">
            <h1>La Communauté de l'E2C</h1>
            <div id="header-subtitle">
            <h3>Réseau social</h3>
            </div>
        </div>
        <?php
        if(isset($_SESSION['userId'])){  
        ?>
        <div class="header-logo">
            <img src="../assets/avatars/avatar_1.png" alt="Logo" class="logo">
            <div class="header-crosse">
            <img src="../assets/avatars/crosse_icon.png" alt="Logo" class="logo"></a>
        </div>
        </div>

            <a href="../controller/logOut.php" class="button-menu">Déconnecter</a>

        <?php
        } else {
         ?>
         <div class="header-logo">
            <img src="../assets/logo/logo_e2c_blanc.png" alt="Logo" class="logo">
        </div>
         <?php
        }
        ?>

</header>