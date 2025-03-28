<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- lien vers le fichier CSS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangaHeaven</title>
    <link href="Styles.css" rel="stylesheet">
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <h1>Bienvenue sur MangaHeaven</h1>
        <nav>
            <ul>
                <li><a href="Accueil.html">Accueil</a></li>
                <!-- <li><a href="ListeMangas.html">Liste des Mangas</a></li> -->
                <li><a href="Login.html">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <!-- Contenu principal -->
    <main>
        <section class="manga-list">
            <h2>Mangas Populaires</h2>
            <div class="manga-container">
                <!-- Liste des mangas populaires -->
                <div class="manga-item">
                    <img src="images/Naruto.jpg" alt="Naruto">
                    <h3>Naruto</h3>
                </div>
                <div class="manga-item">
                    <img src="images/one_piece.jpg" alt="One Piece">
                    <h3>One Piece</h3>
                </div>
                <div class="manga-item">
                    <img src="images/attack_on_titan.jpg" alt="Attack on Titan">
                    <h3>Attack on Titan</h3>
                </div>
                <div class="manga-item">
                    <img src="images/my_hero_academia.jpg" alt="My Hero Academia">
                    <h3>My Hero Academia</h3>
                </div>
                <div class="manga-item">
                    <img src="images/arifureta.jpg" alt="Arifureta">
                    <h3>Arifureta</h3>
                </div>
            </div>
        </section>
    </main>
    <!-- Pied de page -->
    <footer>
        <p>&copy; 2025 Lecture de Manga en Ligne. Tous droits réservés.</p>
    </footer>
</body>
</html>