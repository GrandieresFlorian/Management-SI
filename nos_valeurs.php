<?php
// Configuration de la page
$pageTitle = "Nos Valeurs";
$currentPage = "valeurs";
include 'header.php';
?>

    <!-- BANDEAU HERO -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Nos Engagements</h1>
            <p class="lead mb-0">Une philosophie de vie au cœur de la montagne</p>
        </div>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <div class="container mt-5">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-titre">Notre Philosophie</h2>
                <p class="lead text-muted">Depuis notre création, nous nous efforçons de préserver l'authenticité de notre terroir tout en bâtissant un avenir durable pour nos montagnes.</p>
            </div>
        </div>

        <!-- Section 1 : Environnement -->
        <!-- Image : alpes_paysage.jpg -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="shadow-sm rounded overflow-hidden">
                    <img src="images/alpes_paysage.jpg" 
                         alt="Paysage des Alpes et nature préservée" 
                         class="img-fluid w-100" 
                         style="height: 350px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--nature-green);">Respect de l'environnement</h3>
                <p>Nous croyons fermement à une agriculture raisonnée et durable. Nos cultures respectent le cycle des saisons et nous n'utilisons aucun produit chimique nocif pour nos sols.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Agriculture biologique et raisonnée</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Gestion responsable de l'eau</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Préservation de la biodiversité alpine</li>
                </ul>
            </div>
        </div>

        <hr class="my-5" style="color: var(--wood-brown);">

        <!-- Section 2 : Terroir -->
        <!-- Image : fromage.jpg -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="shadow-sm rounded overflow-hidden">
                    <img src="images/fromage.jpg" 
                         alt="Fromages et produits du terroir" 
                         class="img-fluid w-100" 
                         style="height: 350px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--accent-red);">Terroir & Circuit Court</h3>
                <p>Du champ à l'assiette, il n'y a qu'un pas. Nous privilégions le circuit court pour garantir une fraîcheur absolue et soutenir l'économie locale.</p>
                <p>Nos fromages sont affinés dans notre cave, nos viandes proviennent directement de notre élevage. C'est le goût vrai de la montagne que vous retrouverez dans votre assiette.</p>
                <a href="#" class="btn btn-terroir mt-2">Voir nos produits</a>
            </div>
        </div>

        <hr class="my-5" style="color: var(--wood-brown);">

        <!-- Section 3 : Convivialité -->
        <!-- Image : chambre_chalet.jpg -->
        <div class="row align-items-center mb-5">
             <div class="col-md-6 mb-4 mb-md-0">
                <div class="shadow-sm rounded overflow-hidden">
                    <img src="images/chambre_chalet.jpg" 
                         alt="Chambre d'hôte chaleureuse style chalet" 
                         class="img-fluid w-100" 
                         style="height: 350px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--wood-brown);">Convivialité & Partage</h3>
                <p>« Au bon accueil » n'est pas seulement un nom, c'est notre promesse. Nous vous recevons comme des amis, dans une ambiance familiale et chaleureuse.</p>
                <p>Que ce soit pour un repas, une nuit ou un simple café, nous prenons le temps d'échanger et de partager notre passion pour cette région magnifique.</p>
            </div>
        </div>

        <div class="text-center mt-5 p-5 rounded" style="background-color: var(--bg-cream); border: 1px solid var(--wood-brown);">
            <h3 class="mb-3">Envie de partager ces valeurs avec nous ?</h3>
            <a href="#" class="btn btn-terroir btn-lg">Réserver mon séjour</a>
        </div>
    </div>

<?php include 'footer.php'; ?>
