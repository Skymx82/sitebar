<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte et Menu - Le Trèfle Toulousain | Pub Irlandais Toulouse</title>
    <meta name="description" content="Consultez notre carte de bières irlandaises, whiskeys et snacks traditionnels. Large sélection de Guinness, Kilkenny et spécialités irlandaises à Toulouse.">
    <meta name="keywords" content="menu pub irlandais, carte bières toulouse, guinness, whiskey irlandais, fish and chips toulouse">
    <link rel="canonical" href="http://localhost:8888/Projet/code/menu.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Notre Carte</h1>
        <p>Découvrez nos spécialités irlandaises</p>
    </div>

    <div class="nav">
        <div class="nav-container">
            <a href="index.php"><i class="fas fa-home"></i> Accueil</a>
            <a href="menu.php"><i class="fas fa-beer"></i> Notre Carte</a>
            <a href="events.php"><i class="fas fa-calendar"></i> Événements</a>
            <a href="blog.php"><i class="fas fa-book-open"></i> Blog</a>
            <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        </div>
    </div>

    <div class="content">
        <div class="menu-section">
            <h2>Bières Pression</h2>
            <?php
            $bieres = [
                ['nom' => 'Guinness', 'description' => 'La célèbre stout irlandaise', 'prix' => '6.50'],
                ['nom' => 'Kilkenny', 'description' => 'Cream ale irlandaise', 'prix' => '6.50'],
                ['nom' => 'Murphy\'s', 'description' => 'Stout irlandaise traditionnelle', 'prix' => '6.00'],
                ['nom' => 'Smithwick\'s', 'description' => 'Ale rousse irlandaise', 'prix' => '6.00']
            ];

            foreach($bieres as $biere) {
                echo '<div class="menu-item">';
                echo '<h4>' . $biere['nom'] . '</h4>';
                echo '<p>' . $biere['description'] . '</p>';
                echo '<p class="price">' . $biere['prix'] . '€</p>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="menu-section">
            <h2>Whiskeys Irlandais</h2>
            <?php
            $whiskeys = [
                ['nom' => 'Jameson', 'description' => 'Whiskey irlandais classique', 'prix' => '7.00'],
                ['nom' => 'Bushmills', 'description' => 'Single Malt 10 ans d\'âge', 'prix' => '8.50'],
                ['nom' => 'Powers', 'description' => 'Gold Label', 'prix' => '7.50'],
                ['nom' => 'Tullamore Dew', 'description' => 'Triple distillation', 'prix' => '7.50']
            ];

            foreach($whiskeys as $whiskey) {
                echo '<div class="menu-item">';
                echo '<h4>' . $whiskey['nom'] . '</h4>';
                echo '<p>' . $whiskey['description'] . '</p>';
                echo '<p class="price">' . $whiskey['prix'] . '€</p>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="menu-section">
            <h2>Snacks</h2>
            <?php
            $snacks = [
                ['nom' => 'Fish & Chips', 'description' => 'Servi avec sauce tartare', 'prix' => '12.00'],
                ['nom' => 'Nachos Irish', 'description' => 'Avec cheddar fondu et guacamole', 'prix' => '8.50'],
                ['nom' => 'Onion Rings', 'description' => 'Servis avec sauce BBQ', 'prix' => '6.00'],
                ['nom' => 'Wings', 'description' => '6 pièces, sauce au choix', 'prix' => '8.00']
            ];

            foreach($snacks as $snack) {
                echo '<div class="menu-item">';
                echo '<h4>' . $snack['nom'] . '</h4>';
                echo '<p>' . $snack['description'] . '</p>';
                echo '<p class="price">' . $snack['prix'] . '€</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <p><i class="fas fa-map-marker-alt"></i> 123 Rue des Irlandais, 31000 Toulouse</p>
        <p><i class="fas fa-phone"></i> 05 61 XX XX XX</p>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://tiktok.com" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
        </div>
        <p>© <?php echo date('Y'); ?> Le Trèfle Toulousain - Tous droits réservés</p>
    </div>
</body>
</html>
