<?php
$nomSite = "Ferme auberge « Au bon accueil »";
$page_active = "restaurant"; 
$annee = date("Y");
include 'header.php';
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

    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">La Table Fermière</h1>
            <p class="lead mb-0">Des produits de notre ferme, cuisinés avec amour</p>
        </div>
    </header>

    <div class="container mt-5">

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

        <section id="specialites" class="mb-5">
            <div id="carouselPlats" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselPlats" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselPlats" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselPlats" data-bs-slide-to="2"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://placehold.co/1200x400/3F2C13/white?text=La+Tartiflette+au+Reblochon+Fermier" class="d-block w-100" alt="Tartiflette">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-2 rounded">
                            <h5>Nos Spécialités Savoyardes</h5>
                            <p>Des plats généreux pour se réchauffer.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/1200x400/8A0505/white?text=Charcuterie+Artisanale+et+Fumée" class="d-block w-100" alt="Charcuterie">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-2 rounded">
                            <h5>Salaisons Maison</h5>
                            <p>Saucissons, jambons et terrines préparés à la ferme.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/1200x400/1D7407/white?text=Légumes+du+Potager+Bio" class="d-block w-100" alt="Légumes">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-2 rounded">
                            <h5>Fraîcheur du Jardin</h5>
                            <p>Des légumes cueillis le matin même.</p>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlats" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPlats" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </section>

        <div class="row mt-4">
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card shadow-sm">
                    <div class="card-header text-center py-3">
                        <h3 class="h4 mb-0 menu-title">Le Randonneur</h3>
                        <p class="mb-0 text-muted small">Pour une pause gourmande</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">24€</div>
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

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card menu-vedette shadow">
                    <div class="card-header text-center py-4 bg-terroir text-white" style="background-color: var(--accent-red);">
                        <h3 class="h4 mb-0 menu-title text-white">Terroir & Tradition</h3>
                        <p class="mb-0 small text-white-50">L'incontournable de la maison</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">32€</div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Entrée</h5>
                            <p class="small text-muted">Planche de charcuteries de la ferme.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Plat</h5>
                            <p class="small text-muted">Roïgabrageldi (pommes de terre marcaires) et collet fumé.</p>
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

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 menu-card shadow-sm">
                    <div class="card-header text-center py-3">
                        <h3 class="h4 mb-0 menu-title">Gastronome</h3>
                        <p class="mb-0 text-muted small">Plaisir et raffinement</p>
                    </div>
                    <div class="card-body">
                        <div class="menu-price text-center mb-4">45€</div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Mise en bouche</h5>
                            <p class="small text-muted">Surprise du chef selon arrivage.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Entrée</h5>
                            <p class="small text-muted">Foie gras de canard mi-cuit maison.</p>
                        </div>
                        <div class="menu-item mb-3">
                            <h5 class="h6 fw-bold">Plat</h5>
                            <p class="small text-muted">Pavé de biche ou Truite des viviers.</p>
                        </div>
                        <div class="menu-item">
                            <h5 class="h6 fw-bold">Dessert</h5>
                            <p class="small text-muted">Vacherin glacé minute aux fruits rouges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="row mt-5 mb-5 align-items-stretch">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="p-4 bg-light rounded border border-success h-100 text-center d-flex flex-column justify-content-center">
                    <i class="bi bi-cup-straw fs-1 text-success mb-2"></i>
                    <h3 class="h4" style="color: var(--nature-green);">Carte des Vins</h3>
                    <p>Découvrez notre sélection de vins d'Alsace et d'apéritifs régionaux.</p>
                    <a href="#" class="btn btn-outline-success mt-2">
                        <i class="bi bi-file-earmark-pdf"></i> Télécharger la carte (PDF)
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 bg-light rounded border border-secondary h-100">
                    <h3 class="h4 text-center mb-3" style="color: var(--wood-brown);">🕐 Horaires du restaurant</h3>
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent d-flex justify-content-between">
                            <span>Dimanche</span> <span>11h30 - 15h30</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex justify-content-between">
                            <span>Midi (Lun-Sam)</span> <span>11h30 - 14h30</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex justify-content-between">
                            <span>Soir (Lun-Sam)</span> <span>18h30 - 22h00</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="mt-5 p-4 rounded text-center" style="background-color: white; border-left: 5px solid var(--accent-red);">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-start">
                    <h3 class="h4" style="color: var(--wood-brown);">Réservation conseillée</h3>
                    <p class="mb-0">Notre salle est petite et nos produits sont frais. Pensez à réserver votre table.</p>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <a href="tel:+33123456789" class="btn btn-terroir btn-lg w-100" style="background-color: var(--accent-red); color: white;">
                        <i class="bi bi-telephone-fill me-2"></i> 01 23 45 67 89
                    </a>
                </div>
            </div>
        </section>

    </div>

    <footer class="text-center" style="background-color: var(--text-ink); color: var(--bg-cream); margin-top: 50px; padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Au bon accueil</h5>
                    <p>Ferme Auberge de Montagne</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Horaires</h5>
                    <ul class="list-unstyled">
                        <li>Midi : 11h30 - 14h30</li>
                        <li>Soir : 18h30 - 22h00</li>
                        <li>Dimanche : midi uniquement</li>
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