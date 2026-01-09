<?php
// Configuration de la page
$pageTitle = "Nos Chambres d'Hôtes";
$currentPage = "chambres";
include 'header.php'; 
?>

    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Nos Chambres d'Hôtes</h1>
            <p class="lead mb-0">Un cocon de douceur au sommet des montagnes</p>
        </div>
    </header>

    <div class="container mt-5">
        
        <section class="mb-5">
            <div class="text-center mb-5">
                <h2 class="section-titre">Nos 4 Espaces de Repos</h2>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/chambre_chalet.jpg" class="card-img-top" alt="Chambre Cocon" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: var(--nature-green);">La Cocon</h5>
                            <p class="card-text small text-muted">Ambiance boisée pour un séjour en amoureux.</p>
                            <p class="fw-bold" style="color: var(--accent-red);">85€ / nuit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/chambre_chalet.jpg" class="card-img-top" alt="Chambre Sommet" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: var(--nature-green);">La Sommet</h5>
                            <p class="card-text small text-muted">Une vue imprenable sur les Alpes depuis votre lit.</p>
                            <p class="fw-bold" style="color: var(--accent-red);">95€ / nuit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/chambre_chalet.jpg" class="card-img-top" alt="Chambre Prairie" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: var(--nature-green);">La Prairie</h5>
                            <p class="card-text small text-muted">En rez-de-jardin, idéale pour le calme du matin.</p>
                            <p class="fw-bold" style="color: var(--accent-red);">90€ / nuit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/chambre_chalet.jpg" class="card-img-top" alt="Suite Familiale" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: var(--nature-green);">La Suite Familiale</h5>
                            <p class="card-text small text-muted">Un grand espace pour accueillir toute la tribu.</p>
                            <p class="fw-bold" style="color: var(--accent-red);">135€ / nuit</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5" style="color: var(--wood-brown);">

        <section class="mb-5">
            <div class="text-center mb-4">
                <h2 class="section-titre">Visite Privée : La Suite Sommet</h2>
                <p class="text-muted">Découvrez le charme de notre plus belle chambre en vidéo.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Visite chambre" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5" style="color: var(--wood-brown);">

        <section class="mb-5">
            <div class="text-center mb-4">
                <h2 class="section-titre">Nos Formules de Séjour</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive shadow-sm">
                        <table class="table table-bordered align-middle">
                            <thead class="table-success text-white" style="background-color: var(--nature-green) !important;">
                                <tr>
                                    <th>Type de location</th>
                                    <th>Description</th>
                                    <th>Tarif Moyen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nuitée Classique</td>
                                    <td>Une nuit avec petit-déjeuner fermier inclus.</td>
                                    <td>À partir de 85€</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Escale Randonneur</td>
                                    <td>Nuitée + Panier repas pour votre marche du lendemain.</td>
                                    <td>Tarif chambre + 15€</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Séjour Terroir (2j/1n)</td>
                                    <td>Nuitée + Dîner menu "Terroir & Tradition" au restaurant.</td>
                                    <td>140€ pour 2 pers.</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Semaine Nature</td>
                                    <td>7 nuits consécutives pour une immersion totale.</td>
                                    <td>-10% sur le total</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center mt-5 p-5 rounded" style="background-color: var(--bg-cream); border: 1px solid var(--wood-brown);">
            <h3 class="mb-3">Prêt pour une nuit sous les étoiles ?</h3>
            <a href="tel:+33123456789" class="btn btn-terroir btn-lg">
                <i class="bi bi-telephone-fill me-2"></i>Réserver mon séjour
            </a>
        </div>
    </div>

<?php include 'footer.php'; ?>