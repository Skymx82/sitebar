<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Le Trèfle Toulousain | Pub Irlandais Toulouse Centre</title>
    <meta name="description" content="Contactez Le Trèfle Toulousain, votre pub irlandais au centre de Toulouse. Réservations, événements privés et informations pratiques.">
    <meta name="keywords" content="contact pub irlandais, reservation bar toulouse, privatisation pub, evenement prive toulouse">
    <link rel="canonical" href="http://localhost:8888/Projet/code/contact.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Contact</h1>
        <p>Contactez-nous pour toute information</p>
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
        <div class="card contact-info">
            <h2><i class="fas fa-info-circle"></i> Nos Coordonnées</h2>
            <div class="contact-info-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Adresse</h3>
                <p>123 Rue des Irlandais<br>31000 Toulouse</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-phone"></i>
                <h3>Téléphone</h3>
                <p>05 61 XX XX XX</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>contact@trefletoulousain.fr</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-clock"></i>
                <h3>Horaires</h3>
                <p>Tous les jours de 16h à 2h</p>
            </div>
        </div>

        <div class="card contact-form">
            <h2><i class="fas fa-paper-plane"></i> Envoyez-nous un message</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = $_POST['nom'] ?? '';
                $email = $_POST['email'] ?? '';
                $message = $_POST['message'] ?? '';
                
                if (!empty($nom) && !empty($email) && !empty($message)) {
                    echo '<div class="card" style="background-color: #e3f5e6; margin-bottom: 1rem;">';
                    echo '<p style="color: #2c5234;"><i class="fas fa-check-circle"></i> Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.</p>';
                    echo '</div>';
                } else {
                    echo '<div class="card" style="background-color: #ffe5e5; margin-bottom: 1rem;">';
                    echo '<p style="color: #cc0000;"><i class="fas fa-exclamation-circle"></i> Veuillez remplir tous les champs.</p>';
                    echo '</div>';
                }
            }
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nom"><i class="fas fa-user"></i> Nom :</label>
                    <input type="text" id="nom" name="nom" required placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email :</label>
                    <input type="email" id="email" name="email" required placeholder="votre@email.com">
                </div>
                <div class="form-group">
                    <label for="message"><i class="fas fa-comment"></i> Message :</label>
                    <textarea id="message" name="message" required placeholder="Votre message"></textarea>
                </div>
                <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> Envoyer</button>
            </form>
        </div>

        <div class="card">
            <h2><i class="fas fa-map"></i> Comment nous trouver</h2>
            <p>Situé en plein cœur de Toulouse, Le Trèfle Toulousain est facilement accessible :</p>
            <ul style="list-style: none; padding: 1rem 0;">
                <li><i class="fas fa-subway"></i> Métro : Station Jean Jaurès (Lignes A et B)</li>
                <li><i class="fas fa-bus"></i> Bus : Lignes 14, 38, 44</li>
                <li><i class="fas fa-parking"></i> Parking : Saint-Georges à 5 minutes à pied</li>
            </ul>
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
