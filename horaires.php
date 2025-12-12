<?php
// horaires.php

$nomSite = "Ferme auberge « Au bon accueil »";
$annee = date("Y");

$horaires = [
    "Lundi"    => ["11:30 - 14:30", "18:30 - 22:00"],
    "Mardi"    => ["11:30 - 14:30", "18:30 - 22:00"],
    "Mercredi" => ["11:30 - 14:30", "18:30 - 22:00"],
    "Jeudi"    => ["11:30 - 14:30", "18:30 - 22:00"],
    "Vendredi" => ["11:30 - 14:30", "18:30 - 22:30"],
    "Samedi"   => ["11:30 - 15:00", "18:30 - 22:30"],
    "Dimanche" => ["11:30 - 15:30", ""],
];

function formatService(string $service): string {
    return trim($service) === "" ? "—" : htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomSite; ?> - Horaires</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require 'header.php'; ?>

<header class="hero-banner">
    <div class="container">
        <h1 class="display-4">Horaires d'ouverture</h1>
        <p class="lead mb-0">Planifiez votre visite à la ferme auberge</p>
    </div>
</header>

<main class="container mt-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h2 class="section-titre">Cette semaine</h2>
            <p class="lead text-muted mb-0">
                Les horaires peuvent varier selon la saison. Pour une réservation, contactez-nous avant de vous déplacer.
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card">
                <div class="card-body">
                    <h3 class="h4 mb-3" style="color: var(--nature-green);">Restaurant / Auberge</h3>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th style="width: 25%;">Jour</th>
                                    <th style="width: 37.5%;">Midi</th>
                                    <th style="width: 37.5%;">Soir</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($horaires as $jour => [$midi, $soir]): ?>
                                <tr>
                                    <td class="fw-bold"><?php echo htmlspecialchars($jour, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo formatService($midi); ?></td>
                                    <td><?php echo formatService($soir); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <p class="text-muted mt-3 mb-0">
                        Dernière prise de commande : environ 30 minutes avant la fermeture.
                    </p>
                </div>
            </div>

            <div class="row mt-4 g-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5 card-title">Réservation</h3>
                            <p class="mb-2">Conseillée le week-end et pendant les vacances scolaires.</p>
                            <ul class="mb-0">
                                <li>Groupes : merci de réserver à l’avance</li>
                                <li>Allergies : prévenez-nous lors de la réservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5 card-title">Infos pratiques</h3>
                            <ul class="mb-0">
                                <li>Stationnement : sur place</li>
                                <li>Paiements : espèces / carte (selon réseau)</li>
                                <li>Animaux : à informer à l'avancer</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 p-5 rounded"
                 style="background-color: var(--bg-cream); border: 1px solid var(--wood-brown);">
                <h3 class="mb-3">Vous voulez réserver ?</h3>
                <p class="mb-4">Contactez-nous et on s’occupe du reste.</p>
                <a href="#" class="btn btn-terroir btn-lg">Nous contacter</a>
            </div>

        </div>
    </div>

</main>

<?php require 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>