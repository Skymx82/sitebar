<?php
require_once 'blog/articles.php';

// Récupérer l'ID de l'article depuis l'URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Trouver l'article correspondant
$article = null;
foreach($articles as $a) {
    if($a['id'] === $id) {
        $article = $a;
        break;
    }
}

// Rediriger vers le blog si l'article n'existe pas
if(!$article) {
    header('Location: blog.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['titre']; ?> - Le Trèfle Toulousain</title>
    <meta name="description" content="<?php echo $article['extrait']; ?>">
    <meta name="keywords" content="pub irlandais toulouse, blog irlandais, <?php echo strtolower($article['titre']); ?>">
    <link rel="canonical" href="http://localhost:8888/Projet/code/article.php?id=<?php echo $id; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .article-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .article-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .article-title {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .article-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }
        
        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        
        .article-content {
            line-height: 1.8;
            color: #333;
            font-size: 1.1rem;
        }
        
        .back-to-blog {
            display: inline-block;
            margin-top: 2rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .back-to-blog:hover {
            color: var(--accent);
        }
        
        .share-buttons {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        
        .share-button {
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: opacity 0.3s ease;
        }
        
        .share-button:hover {
            opacity: 0.9;
        }
        
        .share-facebook { background-color: #3b5998; }
        .share-twitter { background-color: #1da1f2; }
        .share-whatsapp { background-color: #25d366; }
    </style>
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Blog</h1>
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
        <div class="article-container">
            <article>
                <header class="article-header">
                    <h1 class="article-title"><?php echo $article['titre']; ?></h1>
                    <div class="article-meta">
                        <i class="far fa-calendar-alt"></i>
                        Publié le <?php echo date('d/m/Y', strtotime($article['date'])); ?>
                    </div>
                </header>

                <img src="blog/images/<?php echo $article['image']; ?>" alt="<?php echo $article['titre']; ?>" class="article-image">

                <div class="article-content">
                    <?php echo nl2br($article['contenu']); ?>
                </div>

                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://localhost:8888/Projet/code/article.php?id=' . $id); ?>" 
                       target="_blank" 
                       class="share-button share-facebook">
                        <i class="fab fa-facebook-f"></i> Partager
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('http://localhost:8888/Projet/code/article.php?id=' . $id); ?>&text=<?php echo urlencode($article['titre']); ?>" 
                       target="_blank" 
                       class="share-button share-twitter">
                        <i class="fab fa-twitter"></i> Tweeter
                    </a>
                    <a href="whatsapp://send?text=<?php echo urlencode($article['titre'] . ' - http://localhost:8888/Projet/code/article.php?id=' . $id); ?>" 
                       class="share-button share-whatsapp">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <a href="blog.php" class="back-to-blog">
                    <i class="fas fa-arrow-left"></i> Retour au blog
                </a>
            </article>
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
