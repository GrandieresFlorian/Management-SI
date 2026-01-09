<?php include 'header.php'; ?>

<!-- BANDEAU HERO -->
<div class="hero-banner">
    <div class="container">
        <h1>Nos Produits de la Ferme</h1>
        <p class="lead">Du producteur directement à votre assiette</p>
    </div>
</div>

<div class="container mt-5">

    <!-- 1. PRÉSENTATION DE LA BOUTIQUE -->
    <section class="mb-5">
        <h2 class="section-titre">La Boutique à la Ferme</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>
                    Au cœur de notre exploitation, notre boutique vous accueille pour vous faire découvrir le meilleur de notre terroir. 
                    C'est ici, dans cet ancien corps de ferme rénové, que nous vous proposons le fruit de notre travail quotidien.
                </p>
                <p>
                    Nous privilégions les circuits courts et l'agriculture raisonnée. Chaque produit présent sur nos étals a été 
                    cultivé ou élevé avec passion par Pierre et notre équipe, ou sélectionné auprès de producteurs voisins partageant 
                    nos valeurs d'authenticité et de qualité.
                </p>
                <a href="horaires.php" class="btn btn-terroir mt-3">Voir les horaires d'ouverture</a>
            </div>
            <div class="col-md-6">
                <!-- Placeholder pour une image de la boutique -->
                <div class="card bg-light text-center p-5 border-0">
                    <div class="card-body">
                        <i class="fas fa-store fa-3x mb-3" style="color: var(--wood-brown);"></i>
                        <h5 class="card-title">Espace Dégustation & Vente</h5>
                        <p class="text-muted">Venez goûter avant d'acheter !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5" style="border-top: 2px solid var(--nature-green); opacity: 0.3;">

    <!-- 2. VENTE EN LIGNE -->
    <section class="mb-5 text-center bg-light p-5 rounded shadow-sm">
        <h2 class="section-titre">Commandez en Ligne (Click & Collect)</h2>
        <p class="lead mb-4">Gagnez du temps en préparant votre panier à l'avance !</p>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p>
                    Notre service de vente en ligne vous permet de réserver vos produits frais et de venir les récupérer directement à la ferme.
                    Les commandes passées avant 12h sont disponibles dès le lendemain matin.
                </p>
                <ul class="list-unstyled mb-4">
                    <li><i class="fas fa-check text-success me-2"></i> Paiement sécurisé en ligne ou au retrait</li>
                    <li><i class="fas fa-check text-success me-2"></i> Préparation fraîcheur le matin même</li>
                    <li><i class="fas fa-check text-success me-2"></i> Stationnement réservé pour les retraits</li>
                </ul>
                <button class="btn btn-terroir btn-lg">Accéder à la boutique en ligne</button>
            </div>
        </div>
    </section>

    <!-- 3. NOS VIANDES -->
    <section class="mb-5">
        <h2 class="section-titre">Nos Viandes & Charcuteries</h2>
        <p class="mb-4">Élevés en plein air dans nos pâturages de montagne, nos animaux bénéficient d'une alimentation naturelle.</p>
        
        <div class="row g-4">
            <!-- Carte Viande 1 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Bœuf d'Aubrac</h5>
                        <p class="card-text small">Côtes, rôtis et pièces à griller. Une viande persillée et tendre, maturée 3 semaines.</p>
                        <span class="badge bg-success mb-2">Label Rouge</span>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-3">
                        <small class="text-muted">Disponible toute l'année</small>
                    </div>
                </div>
            </div>

            <!-- Carte Viande 2 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Agneau Fermier</h5>
                        <p class="card-text small">Gigots, épaules et côtes. Élevés sous la mère, nourris au foin de nos prairies.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-3">
                        <small class="text-muted">Saisonnier (Pâques - Été)</small>
                    </div>
                </div>
            </div>

            <!-- Carte Viande 3 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Volailles</h5>
                        <p class="card-text small">Poulets fermiers, pintades et canards. Chair ferme et goût authentique.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-3">
                        <small class="text-muted">Abattage hebdomadaire</small>
                    </div>
                </div>
            </div>

            <!-- Carte Viande 4 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Charcuteries</h5>
                        <p class="card-text small">Saucissons, terrines maison, jambon sec affiné 12 mois dans notre séchoir.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-3">
                        <small class="text-muted">Fabrication artisanale</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. LÉGUMES ET FRUITS -->
    <section class="mb-5">
        <h2 class="section-titre">Le Potager & Le Verger</h2>
        <p class="mb-4">Des fruits et légumes de saison, cultivés sans pesticides chimiques, cueillis à maturité.</p>

        <div class="row g-4">
            
            <!-- COLONNE GAUCHE : Panier de Saison (Grand bloc vertical) -->
            <div class="col-md-4">
                <div class="card border-success h-100">
                    <div class="card-header bg-success text-white">La Star du Mois</div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title mt-3">Le Panier de Saison</h5>
                        <p class="card-text">
                            Un assortiment hebdomadaire de 5 à 7kg de légumes frais récoltés le matin même.
                        </p>
                        <p class="fw-bold fs-4 mb-3" style="color: var(--wood-brown);">15,00 € / panier</p>
                        <div class="text-center">
                             <!-- Exemple d'icône panier si vous voulez -->
                            <i class="fas fa-shopping-basket fa-3x text-success opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="row g-3"> 

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center p-3">
                                <i class="fas fa-carrot fa-2x me-3" style="color: var(--nature-green);"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Légumes Racines</h6>
                                    <p class="small text-muted mb-0">Carottes, panais, betteraves</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center p-3">
                                <i class="fas fa-leaf fa-2x me-3" style="color: var(--nature-green);"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Verdure & Salades</h6>
                                    <p class="small text-muted mb-0">Laitues, épinards, blettes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center p-3">
                                <i class="fas fa-apple-alt fa-2x me-3" style="color: var(--accent-red);"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Fruits du Verger</h6>
                                    <p class="small text-muted mb-0">Pommes, poires, prunes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center p-3">
                                <i class="fas fa-jar fa-2x me-3" style="color: var(--wood-brown);"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Transformés</h6>
                                    <p class="small text-muted mb-0">Confitures, compotes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>


</div>

<?php include 'footer.php'; ?>
