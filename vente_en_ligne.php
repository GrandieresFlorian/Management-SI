<?php include 'header.php';?>

    <!-- BANDEAU HERO -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Click & Collect</h1>
            <p class="lead mb-0">Commandez en ligne, récupérez à la ferme</p>
        </div>
    </header>

    <div class="container mt-5">

        <!-- ÉTAPE 1 : Explication du fonctionnement -->
        <div class="alert alert-success border-0 shadow-sm mb-5 p-4" role="alert">
            <h4 class="alert-heading fw-bold"><i class="fas fa-info-circle me-2"></i>Comment ça marche ?</h4>
            <hr>
            <div class="row text-center mt-3">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="fs-1 text-success mb-2"><i class="fas fa-mouse-pointer"></i></div>
                    <h5 class="fw-bold">1. Je commande</h5>
                    <p class="small mb-0">Sélectionnez vos produits et validez votre panier avant 12h pour le lendemain.</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="fs-1 text-success mb-2"><i class="fas fa-store"></i></div>
                    <h5 class="fw-bold">2. On prépare</h5>
                    <p class="small mb-0">Nous préparons votre commande avec soin le matin même du retrait.</p>
                </div>
                <div class="col-md-4">
                    <div class="fs-1 text-success mb-2"><i class="fas fa-shopping-bag"></i></div>
                    <h5 class="fw-bold">3. Je récupère</h5>
                    <p class="small mb-0">Venez retirer vos produits à la boutique et réglez sur place (CB/Espèces).</p>
                </div>
            </div>
        </div>

        <!-- FILTRES CATÉGORIES (Navigation interne) -->
        <div class="d-flex justify-content-center mb-5 flex-wrap gap-2">
            <button class="btn btn-terroir active">Tout voir</button>
            <button class="btn btn-outline-secondary">🥦 Fruits & Légumes</button>
            <button class="btn btn-outline-secondary">🥩 Viandes & Charcuteries</button>
            <button class="btn btn-outline-secondary">🍯 Épicerie & Transformés</button>
        </div>

        <!-- CATALOGUE PRODUITS -->
        <h3 class="section-titre mb-4">Nos produits du moment</h3>

        <div class="row g-4">
            
            <!-- PRODUIT 1 : Panier Légumes -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <!-- Badge Promo ou Bio -->
                    <div class="position-absolute top-0 end-0 m-2 badge bg-success">Bio</div>
                    <!-- Image Produit (Placeholder) -->
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-shopping-basket fa-3x text-muted opacity-25"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Panier de Saison</h5>
                        <p class="text-muted small">Mélange de 5 à 7kg de légumes (Carottes, Poireaux, Choux...)</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h5 mb-0 text-success fw-bold">15,00 €</span>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i> Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRODUIT 2 : Colis Viande -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                     <div class="position-absolute top-0 end-0 m-2 badge bg-danger">Label Rouge</div>
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-drumstick-bite fa-3x text-muted opacity-25"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Colis Bœuf (5kg)</h5>
                        <p class="text-muted small">Assortiment : Rôti, Steaks, Bourguignon. Emballé sous vide.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h5 mb-0 text-success fw-bold">85,00 €</span>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i> Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRODUIT 3 : Miel -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-jar fa-3x text-muted opacity-25"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Miel de Montagne</h5>
                        <p class="text-muted small">Pot de 500g. Récolté dans nos ruches à 1200m d'altitude.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h5 mb-0 text-success fw-bold">9,50 €</span>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i> Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRODUIT 4 : Fromage -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="position-absolute top-0 end-0 m-2 badge bg-warning text-dark">AOP</div>
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-cheese fa-3x text-muted opacity-25"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Tomme Fermière</h5>
                        <p class="text-muted small">La pièce de 400g environ. Affinage 3 mois en cave naturelle.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h5 mb-0 text-success fw-bold">12,00 €</span>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i> Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- PANIER FLOTTANT / RÉCAPITULATIF (Optionnel mais sympa) -->
        <div class="fixed-bottom p-3 d-none d-md-block" style="pointer-events: none;">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-4">
                        <div class="card shadow-lg border-success" style="pointer-events: auto;">
                            <div class="card-body d-flex justify-content-between align-items-center py-2">
                                <div>
                                    <span class="fw-bold">Mon Panier</span>
                                    <small class="d-block text-muted">0 articles</small>
                                </div>
                                <span class="h5 mb-0 me-3">0,00 €</span>
                                <a href="panier.php" class="btn btn-success btn-sm">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.php'; ?>
