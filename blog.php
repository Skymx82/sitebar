<?php
require_once 'blog/articles.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Le Trèfle Toulousain | Actualités et Articles</title>
    <meta name="description" content="Découvrez nos articles sur la culture irlandaise, les bières, les whiskeys et les événements du Trèfle Toulousain à Toulouse.">
    <meta name="keywords" content="blog pub irlandais, culture irlandaise, biere irlandaise, evenements toulouse">
    <link rel="canonical" href="http://localhost:8888/Projet/code/blog.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .blog-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
        }
        
        .blog-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .blog-content {
            padding: 1.5rem;
        }
        
        .blog-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .blog-title {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .blog-excerpt {
            color: #444;
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        .read-more {
            display: inline-block;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .read-more:hover {
            color: var(--accent);
        }
        
        .blog-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .blog-header h1 {
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .blog-header p {
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="Logo/logo_complet.png" alt="Le Trèfle Toulousain" class="logo">
        <h1>Notre Blog</h1>
        <p>Actualités, culture irlandaise et vie du pub</p>
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
        <div class="blog-header">
            <h1><i class="fas fa-pen-fancy"></i> Nos Articles</h1>
            <p>Découvrez nos derniers articles sur la culture irlandaise, nos événements et nos produits.</p>
        </div>

        <div class="blog-grid">
            <?php foreach($articles as $article): ?>
                <div class="card blog-card">
                    <img src="blog/images/<?php echo $article['image']; ?>" alt="<?php echo $article['titre']; ?>" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-date">
                            <i class="far fa-calendar-alt"></i>
                            <?php echo date('d/m/Y', strtotime($article['date'])); ?>
                        </div>
                        <h2 class="blog-title"><?php echo $article['titre']; ?></h2>
                        <p class="blog-excerpt"><?php echo $article['extrait']; ?></p>
                        <a href="article.php?id=<?php echo $article['id']; ?>" class="read-more">
                            Lire la suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
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
