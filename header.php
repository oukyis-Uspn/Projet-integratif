<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'JurisNova – Cabinet d\'avocats'; ?></title>
    <meta name="description" content="<?php echo $page_desc ?? ''; ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="container site-header__inner">
        <a href="index.php" class="logo">
            <div class="logo__mark">JN</div>
            <div class="logo__text">
                <span class="logo__name">JurisNova</span>
                <span class="logo__tagline">Cabinet d'avocats</span>
            </div>
        </a>
        
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="expertises.php">Expertises</a></li>
                <li><a href="equipe.php">L'Équipe</a></li>
                <li><a href="contact.php" class="btn btn--gold btn--sm">Nous contacter</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
