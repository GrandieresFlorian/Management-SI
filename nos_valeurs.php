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
    <title><?php echo $nomSite; ?> - Nos Valeurs</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Ajout d'une icône pour illustrer (optionnel, via CDN Bootstrap Icons ou FontAwesome) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>

    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

    <!-- BANDEAU HERO (Titre différent pour cette page) -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="display-4">Nos Engagements</h1>
            <p class="lead mb-0">Une philosophie de vie au cœur de la montagne</p>
        </div>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <div class="container mt-5">
        
        <!-- Introduction -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-titre">Notre Philosophie</h2>
                <p class="lead text-muted">Depuis notre création, nous nous efforçons de préserver l'authenticité de notre terroir tout en bâtissant un avenir durable pour nos montagnes.</p>
            </div>
        </div>

        <!-- Section 1 : Environnement (Image à gauche, texte à droite) -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <!-- Placeholder pour image -->
                <div class="bg-light d-flex align-items-center justify-content-center rounded shadow-sm" style="height: 300px; border: 2px dashed var(--nature-green);">
                    <span class="text-muted">Image Paysage / Nature</span>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--nature-green);">Respect de l'environnement</h3>
                <p>
                    Nous croyons fermement à une agriculture raisonnée et durable. Nos cultures respectent le cycle des saisons et nous n'utilisons aucun produit chimique nocif pour nos sols.
                </p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Agriculture biologique et raisonnée</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Gestion responsable de l'eau</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Préservation de la biodiversité alpine</li>
                </ul>
            </div>
        </div>

        <hr class="my-5" style="color: var(--wood-brown);">

        <!-- Section 2 : Terroir (Texte à gauche, image à droite) -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                <!-- Placeholder pour image -->
                <div class="bg-light d-flex align-items-center justify-content-center rounded shadow-sm" style="height: 300px; border: 2px dashed var(--accent-red);">
                    <span class="text-muted">Image Fromage / Produits</span>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--accent-red);">Terroir & Circuit Court</h3>
                <p>
                    Du champ à l'assiette, il n'y a qu'un pas. Nous privilégions le circuit court pour garantir une fraîcheur absolue et soutenir l'économie locale.
                </p>
                <p>
                    Nos fromages sont affinés dans notre cave, nos viandes proviennent directement de notre élevage ou de partenaires locaux de confiance. C'est le goût vrai de la montagne que vous retrouverez dans votre assiette.
                </p>
                <a href="#" class="btn btn-terroir mt-2">Voir nos produits</a>
            </div>
        </div>

        <hr class="my-5" style="color: var(--wood-brown);">

        <!-- Section 3 : Convivialité -->
        <div class="row align-items-center mb-5">
             <div class="col-md-6 mb-4 mb-md-0">
                <!-- Placeholder pour image -->
                <div class="bg-light d-flex align-items-center justify-content-center rounded shadow-sm" style="height: 300px; border: 2px dashed var(--wood-brown);">
                    <span class="text-muted">Image Auberge / Famille</span>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="h2 mb-3" style="color: var(--wood-brown);">Convivialité & Partage</h3>
                <p>
                    « Au bon accueil » n'est pas seulement un nom, c'est notre promesse. Nous vous recevons comme des amis, dans une ambiance familiale et chaleureuse.
                </p>
                <p>
                    Que ce soit pour un repas, une nuit ou un simple café, nous prenons le temps d'échanger et de partager notre passion pour cette région magnifique.
                </p>
            </div>
        </div>

        <!-- Call to Action final -->
        <div class="text-center mt-5 p-5 rounded" style="background-color: var(--bg-cream); border: 1px solid var(--wood-brown);">
            <h3 class="mb-3">Envie de partager ces valeurs avec nous ?</h3>
            <p class="mb-4">Venez nous rendre visite et découvrir notre univers le temps d'un séjour.</p>
            <a href="#" class="btn btn-terroir btn-lg">Réserver mon séjour</a>
        </div>

    </div>

    <!-- FOOTER -->
        <?php require 'footer.php';?>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
