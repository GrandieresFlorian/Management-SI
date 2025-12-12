<?php
// Variables globales
$nomSite = "Ferme auberge « Au bon accueil »";
$annee = date("Y");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomSite; ?> - Accueil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><?php echo $nomSite; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Chambres</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Bienvenue à la ferme</h1>
            <p class="lead mb-4">Authenticité, Terroir et Nature en montagne</p>
            <a href="#" class="btn btn-terroir btn-lg">Réserver une table</a>
        </div>
    </header>

    <div class="container mt-5">
        
        <section id="presentation" class="mb-5">
            <div class="text-center">
                <h2 class="section-titre">Découvrir notre univers</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">La Ferme</h3>
                            <p class="card-text">Une auberge authentique au cœur des montagnes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">Cultures & Animaux</h3>
                            <p class="card-text">Nos plantations et nos animaux élevés en plein air.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">Activités</h3>
                            <p class="card-text">Restaurant, vente de produits et chambres d'hôtes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title h5">Les Alentours</h3>
                            <p class="card-text">Randonnées et paysages à couper le souffle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="infos" class="mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="section-titre">Qui sommes-nous ?</h2>
                    <p>Rencontrez les propriétaires passionnés et toute l'équipe qui œuvre chaque jour pour vous offrir le meilleur accueil.</p>
                    <a href="#" class="btn btn-terroir mt-2">En savoir plus</a>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="p-4 bg-white rounded shadow-sm border border-success">
                        <h3 class="text-success">Nos Valeurs</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">🌱 <strong>Respect de l'environnement</strong> et agriculture durable.</li>
                            <li class="mb-2">🧀 <strong>Terroir local</strong> en circuit court.</li>
                            <li class="mb-2">🤝 <strong>Convivialité</strong> et partage familial.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Au bon accueil</h5>
                    <p>Ferme Auberge de Montagne</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Plan du site</a></li>
                        <li><a href="#">Recrutement</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Nous suivre</h5>
                    <a href="#" class="text-white me-2">Facebook</a>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <hr class="border-light">
            <p class="mb-0">&copy; <?php echo $annee; ?> - Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>