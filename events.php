<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements et Soirées - Le Trèfle Toulousain | Pub Irlandais Toulouse</title>
    <meta name="description" content="Découvrez nos soirées à thème, concerts live et événements spéciaux au Trèfle Toulousain. Saint Patrick, quiz, musique irlandaise traditionnelle.">
    <meta name="keywords" content="evenements pub irlandais, saint patrick toulouse, concert irlandais, quiz pub, soiree toulouse">
    <link rel="canonical" href="http://localhost:8888/Projet/code/events.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Nos Événements</h1>
        <p>Rejoignez-nous pour des moments inoubliables</p>
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
        $events = [
            [
                'titre' => 'Saint Patrick',
                'date' => '17 Mars 2025',
                'description' => 'Célébrez la Saint Patrick avec nous ! Au programme : musique irlandaise live, promotions sur les bières, et ambiance festive garantie.',
                'horaire' => 'À partir de 16h',
                'icon' => 'fa-shamrock'
            ],
            [
                'titre' => 'Soirée Quiz',
                'date' => 'Tous les mardis',
                'description' => 'Testez vos connaissances sur l\'Irlande et la culture générale. Lots à gagner !',
                'horaire' => '20h30',
                'icon' => 'fa-question-circle'
            ],
            [
                'titre' => 'Live Music',
                'date' => 'Tous les jeudis',
                'description' => 'Concert de musique irlandaise traditionnelle avec notre groupe résident.',
                'horaire' => '21h00',
                'icon' => 'fa-music'
            ],
            [
                'titre' => 'Happy Hour',
                'date' => 'Du lundi au vendredi',
                'description' => 'Profitez de nos tarifs réduits sur une sélection de bières pression.',
                'horaire' => 'De 17h à 19h',
                'icon' => 'fa-clock'
            ]
        ];

        foreach($events as $event) {
            echo '<div class="card event">';
            echo '<h3><i class="fas ' . $event['icon'] . '"></i> ' . $event['titre'] . '</h3>';
            echo '<p class="event-date"><i class="far fa-calendar-alt"></i> ' . $event['date'] . ' - <i class="far fa-clock"></i> ' . $event['horaire'] . '</p>';
            echo '<p>' . $event['description'] . '</p>';
            echo '</div>';
        }
        ?>

        <div class="card">
            <h2><i class="fas fa-star"></i> Réservation de groupe</h2>
            <p>Vous souhaitez organiser un événement privé ? Nous pouvons accueillir vos groupes jusqu'à 50 personnes.</p>
            <p>Contactez-nous pour plus d'informations et pour réserver votre soirée.</p>
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
