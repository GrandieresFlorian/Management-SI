<?php
$nomSite = "Ferme auberge « Au bon accueil »";
$page_active = "restaurant"; // Pour gérer la classe active dans la nav
$annee = date("Y");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Restaurant - <?php echo $nomSite; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVIGATION (Adaptée pour inclure la classe active) -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php"><?php echo $nomSite; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="nos_valeurs.php">Nos Valeurs</a></li> 
                    <li class="nav-item"><a class="nav-link active" href="restaurant.php">Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Chambres</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANDEAU HERO -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">La Table Fermière</h1>
            <p class="lead mb-0">Des produits de notre ferme, cuisinés avec amour</p>
        </div>
    </header>

    <div class="container mt-5">

        <!-- INTRO DU CHEF -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 text-center">
                <h2 class="section-titre">Notre Cuisine</h2>
                <p class="lead text-muted">
                    Ici, pas de carte à rallonge. Nos menus changent au gré des saisons et des récoltes de notre potager. 
                    Toutes nos viandes proviennent de notre élevage et nos fromages sont affinés dans notre cave.
                </p>
                <div class="mt-3">
                    <span class="badge bg-success me-2"><i class="bi bi-check-lg"></i> Fait Maison</span>
                    <span class="badge bg-success me-2"><i class="bi bi-tree"></i> Produits Locaux</span>
                    <span class="badge bg-success"><i class="bi bi-heart"></i> Cuisine de Saison</span>
                </div>
            </div>
        </div>

        <!-- LES MENUS -->
        <div class="row mt-4">
            
            <!-- MENU 1 : LE RANDONNEUR -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card shadow-sm">
                    <div class="card-header text-center py-3">
                        <h3 class="h4 mb-0 menu-title">Le Randonneur</h3>
                        <p class="mb-0 text-muted small">Pour une pause gourmande</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">
                            24€
                        </div>
                        
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Entrée</h5>
                            <p class="small text-muted">Velouté de potimarron du jardin et éclats de châtaignes.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Plat</h5>
                            <p class="small text-muted">Tourte lorraine maison, salade verte aux noix.</p>
                        </div>
                        <div class="menu-item">
                            <h5 class="h6 fw-bold">Dessert</h5>
                            <p class="small text-muted">Tarte aux myrtilles sauvages ou fromage blanc fermier.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MENU 2 : TERROIR & TRADITION (Mis en avant) -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card menu-vedette shadow">
                    <div class="card-header text-center py-4 bg-terroir text-white">
                        <h3 class="h4 mb-0 menu-title text-white">Terroir & Tradition</h3>
                        <p class="mb-0 small text-white-50">L'incontournable de la maison</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">
                            32€
                        </div>

                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Entrée</h5>
                            <p class="small text-muted">Planche de charcuteries de la ferme (jambon cru, terrine, saucisson).</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Plat</h5>
                            <p class="small text-muted">Roïgabrageldi (pommes de terre marcaires) accompagnées de collet fumé.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Fromage</h5>
                            <p class="small text-muted">Duo de Munster et Tomme de montagne.</p>
                        </div>
                        <div class="menu-item">
                            <h5 class="h6 fw-bold">Dessert</h5>
                            <p class="small text-muted">Kougelhopf glacé au marc de Gewurztraminer.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MENU 3 : GASTROME DES CIMES -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card shadow-sm">
                    <div class="card-header text-center py-3">
                        <h3 class="h4 mb-0 menu-title">Gastronome</h3>
                        <p class="mb-0 text-muted small">Plaisir et raffinement</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">
                            45€
                        </div>

                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Mise en bouche</h5>
                            <p class="small text-muted">Surprise du chef selon arrivage.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Entrée</h5>
                            <p class="small text-muted">Foie gras de canard mi-cuit maison, chutney de figues.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Plat</h5>
                            <p class="small text-muted">Pavé de biche (en saison) ou Truite des viviers, sauce Riesling.</p>
                        </div>
                        <div class="menu-item">
                            <h5 class="h6 fw-bold">Dessert</h5>
                            <p class="small text-muted">Vacherin glacé minute aux fruits rouges.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- Fin row menus -->

        <!-- INFO RÉSERVATION -->
        <section class="mt-5 p-4 rounded text-center" style="background-color: white; border-left: 5px solid var(--accent-red);">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-start">
                    <h3 class="h4" style="color: var(--wood-brown);">Réservation conseillée</h3>
                    <p class="mb-0">Notre salle est petite et nos produits sont frais. Pour vous garantir le meilleur accueil, pensez à réserver votre table, surtout le week-end.</p>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <a href="tel:+33123456789" class="btn btn-terroir btn-lg w-100">
                        <i class="bi bi-telephone-fill me-2"></i> 01 23 45 67 89
                    </a>
                </div>
            </div>
        </section>

    </div>

    <!-- FOOTER -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Au bon accueil</h5>
                    <p>Ferme Auberge de Montagne</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Horaires</h5>
                    <ul class="list-unstyled">
                        <li>Midi : 12h00 - 14h00</li>
                        <li>Soir : 19h00 - 21h00</li>
                        <li>Fermé le mardi</li>
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
