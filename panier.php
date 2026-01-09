<?php include 'header.php';?>

    <div class="container mt-5">
        
        <h2 class="mb-4"><i class="fas fa-shopping-cart me-2" style="color: var(--wood-brown);"></i> Votre Panier</h2>

        <div class="row">
            
            <!-- COLONNE GAUCHE : Liste des articles -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col" class="border-0 p-3">Produit</th>
                                        <th scope="col" class="border-0 p-3 text-center">Prix</th>
                                        <th scope="col" class="border-0 p-3 text-center">Quantité</th>
                                        <th scope="col" class="border-0 p-3 text-end">Total</th>
                                        <th scope="col" class="border-0 p-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Article 1 (Exemple) -->
                                    <tr>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                                    <i class="fas fa-shopping-basket text-success"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold">Panier de Saison</h6>
                                                    <small class="text-muted">Légumes variés (5kg)</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">15,00 €</td>
                                        <td class="text-center">
                                            <input type="number" class="form-control form-control-sm d-inline-block text-center" value="1" style="width: 60px;">
                                        </td>
                                        <td class="text-end fw-bold">15,00 €</td>
                                        <td class="text-end pe-3">
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Article 2 (Exemple) -->
                                    <tr>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                                    <i class="fas fa-jar text-warning"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold">Miel de Montagne</h6>
                                                    <small class="text-muted">Pot de 500g</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">9,50 €</td>
                                        <td class="text-center">
                                            <input type="number" class="form-control form-control-sm d-inline-block text-center" value="2" style="width: 60px;">
                                        </td>
                                        <td class="text-end fw-bold">19,00 €</td>
                                        <td class="text-end pe-3">
                                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-end p-3">
                        <a href="vente_en_ligne.php" class="text-decoration-none text-muted"><i class="fas fa-arrow-left me-1"></i> Continuer mes achats</a>
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE : Résumé & Paiement -->
            <div class="col-lg-4">
                
                <!-- Résumé -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-success text-white fw-bold">
                        Résumé de la commande
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sous-total</span>
                            <span>34,00 €</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Frais de préparation</span>
                            <span class="text-success">Offert</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="h5 fw-bold">Total à payer</span>
                            <span class="h5 fw-bold text-success">34,00 €</span>
                        </div>

                        <!-- Date de retrait -->
                        <div class="mb-3">
                            <label for="dateRetrait" class="form-label fw-bold small text-uppercase text-muted">Date de retrait souhaitée</label>
                            <input type="date" class="form-control" id="dateRetrait">
                            <small class="text-muted fst-italic">Retrait possible dès demain 10h.</small>
                        </div>

                        <button class="btn btn-terroir w-100 btn-lg mb-2">Valider la commande</button>
                        <p class="text-center small text-muted mb-0"><i class="fas fa-lock me-1"></i> Paiement sécurisé au retrait</p>
                    </div>
                </div>

                <!-- Info Client (Statique pour l'instant) -->
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <h6 class="fw-bold"><i class="fas fa-user-circle me-2"></i>Compte Client</h6>
                        <p class="small mb-2">Vous n'êtes pas connecté.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm w-100">Se connecter</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php include 'footer.php'; ?>
