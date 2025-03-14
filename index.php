<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Trèfle Toulousain - Authentique Pub Irlandais à Toulouse</title>
    <meta name="description" content="Découvrez l'ambiance chaleureuse du Trèfle Toulousain, votre pub irlandais au cœur de Toulouse. Bières irlandaises, whiskeys et cuisine traditionnelle.">
    <meta name="keywords" content="pub irlandais toulouse, bar irlandais, bière irlandaise, whiskey, toulouse, le trèfle toulousain">
    <link rel="canonical" href="http://localhost:8888/Projet/code/index.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Le Trèfle Toulousain</h1>
        <p>Votre authentique pub irlandais au cœur de Toulouse</p>
    </div>

    <div class="nav">
        <div class="nav-container">
            <a href="index.php"><i class="fas fa-home"></i> Accueil</a>
            <a href="menu.php"><i class="fas fa-beer"></i> Notre Carte</a>
            <a href="events.php"><i class="fas fa-calendar"></i> Événements</a>
            <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        </div>
    </div>

    <div class="content">
        <?php
        $heure = date('H');
        $ouvert = ($heure >= 16 && $heure < 2);
        ?>
        
        <div class="card">
            <div class="status <?php echo $ouvert ? 'open' : 'closed'; ?>">
                <i class="fas <?php echo $ouvert ? 'fa-door-open' : 'fa-door-closed'; ?>"></i>
                <?php echo $ouvert ? 'Ouvert' : 'Fermé'; ?>
            </div>
            <p><i class="far fa-clock"></i> Horaires d'ouverture : Tous les jours de 16h à 2h</p>
        </div>

        <div class="card">
            <h2><i class="fas fa-star"></i> Bienvenue chez nous</h2>
            <p>Plongez dans l'atmosphère authentique d'un véritable pub irlandais au cœur de Toulouse. Notre établissement vous propose :</p>
            <ul style="list-style: none; padding: 1rem 0;">
                <li><i class="fas fa-beer"></i> Une sélection unique de bières irlandaises</li>
                <li><i class="fas fa-glass-whiskey"></i> Les meilleurs whiskeys d'Irlande</li>
                <li><i class="fas fa-music"></i> Des soirées musicales traditionnelles</li>
                <li><i class="fas fa-users"></i> Une ambiance chaleureuse et conviviale</li>
            </ul>
        </div>

        <div class="card">
            <h2><i class="fas fa-calendar-star"></i> Prochains événements</h2>
            <div class="event">
                <h3>Saint Patrick 2025</h3>
                <p class="event-date">17 Mars - À partir de 16h</p>
                <p>La plus grande fête irlandaise de l'année ! Rejoignez-nous pour une soirée exceptionnelle.</p>
            </div>
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
