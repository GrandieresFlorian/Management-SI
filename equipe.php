<?php
// Configuration de la page
$pageTitle = "L'Équipe";
$currentPage = "equipe"; // Pour activer le menu
include 'header.php';
?>

    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Rencontrez l'Équipe</h1>
            <p class="lead mb-0">Des passionnés au service de votre bien-être</p>
        </div>
    </header>

    <div class="container mt-5">

        <!-- SECTION PROPRIÉTAIRES -->
        <section class="mb-5">
            <div class="text-center mb-5">
                <h2 class="section-titre">Les Gardiens des Lieux</h2>
                <p class="text-muted">L'histoire de la ferme, c'est avant tout la leur.</p>
            </div>

            <div class="card mb-3 border-0 shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 bg-light d-flex align-items-center justify-content-center" style="min-height: 350px; background-color: #f0f0f0;">
                        <div class="text-center text-muted">
                            <i class="bi bi-people-fill display-1"></i><br>
                            <span>Photo de Pierre & Marie</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4 p-lg-5">
                            <h3 class="card-title h2" style="color: var(--wood-brown);">Pierre & Marie</h3>
                            <h5 class="text-success mb-3">Propriétaires & Fondateurs</h5>
                            <p class="card-text">Installés ici depuis plus de 20 ans, Pierre et Marie ont transformé l'ancienne bergerie familiale en ce lieu d'accueil chaleureux.</p>
                            <p class="card-text">
                                <strong>Pierre</strong> s'occupe de l'élevage, tandis que 
                                <strong>Marie</strong> gère l'auberge avec passion.
                            </p>
                            <div class="mt-4 text-end fst-italic text-secondary">~ Pierre & Marie</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5" style="color: var(--wood-brown);">

        <!-- SECTION ÉQUIPE -->
        <section>
            <div class="text-center mb-5">
                <h2 class="section-titre">Ceux qui œuvrent dans l'ombre</h2>
            </div>

            <div class="row">
                <!-- Julien -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="rounded-circle bg-light mx-auto d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; border: 3px solid var(--accent-red);">
                                <i class="bi bi-egg-fried fs-1 text-secondary"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="color: var(--wood-brown);">Julien</h4>
                            <h6 class="text-danger mb-3">Chef de Cuisine</h6>
                            <p class="card-text small">Passionné par le terroir, il sublime nos produits.</p>
                        </div>
                    </div>
                </div>

                <!-- Sophie -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="rounded-circle bg-light mx-auto d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; border: 3px solid var(--nature-green);">
                                <i class="bi bi-cup-hot-fill fs-1 text-secondary"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="color: var(--wood-brown);">Sophie</h4>
                            <h6 class="text-success mb-3">Responsable de Salle</h6>
                            <p class="card-text small">Toujours souriante, elle orchestre le service avec brio.</p>
                        </div>
                    </div>
                </div>

                <!-- Thomas -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="rounded-circle bg-light mx-auto d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; border: 3px solid var(--wood-brown);">
                                <i class="bi bi-flower1 fs-1 text-secondary"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="color: var(--wood-brown);">Thomas</h4>
                            <h6 class="text-muted mb-3">Chef de Culture</h6>
                            <p class="card-text small">Il veille sur nos cultures et nos animaux au quotidien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include 'footer.php'; ?>
