<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Liste des Produits</h1>

        <?php
       
        $produits = [
            [
                "categorie" => "Voyage",
                "nom" => "PRO BAG",
                "prix" => 89.99,
                "description" => "Sac à dos anti-vol.",
                "image" => "./bag.jpg"
            ],
            [
                "categorie" => "Jeux vidéo",
                "nom" => "Assassin's Creed Odyssey",
                "prix" => 59.99,
                "description" => "Exploration ouverte dans l'ancienne Grèce.",
                "image" => "./assasins.jpg"
            ],
            [
                "categorie" => "Maison",
                "nom" => "Oreiller",
                "prix" => 49.99,
                "description" => "Très confortable",
                "image" => "./pillow.jpg"
            ],
            [
                "categorie" => "Art",
                "nom" => "Tablette Graphique",
                "prix" => 199.99,
                "description" => "Tablette graphique haute précision.",
                "image" => "./tab.jpg"
            ],
            [
                "categorie" => "Musique",
                "nom" => "guitare",
                "prix" => 149.99,
                "description" => "Instrument",
                "image" => "./guitar.jpg"
            ],
            [
                "categorie" => "Voyage",
                "nom" => "Adaptateur Universel Voyage",
                "prix" => 29.99,
                "description" => "Adaptateur de voyage compact.",
                "image" => "charge.jpg"
            ],
            [
                "categorie" => "Jeux vidéo",
                "nom" => "Clavier Gaming",
                "prix" => 99.99,
                "description" => "Clavier",
                "image" => "./key.jpg"
            ],
            [
                "categorie" => "Maison",
                "nom" => "Lampe de Bureau Moderne",
                "prix" => 59.99,
                "description" => "Lampe",
                "image" => "./lamp.jpg"
            ],
            [
                "categorie" => "Cuisine",
                "nom" => "Machine à café",
                "prix" => 79.99,
                "description" => "Peinture",
                "image" => "./coffee.jpg"
            ],
            [
                "categorie" => "Musique",
                "nom" => "Microphone Studio Pro",
                "prix" => 129.99,
                "description" => "Microphon deluxe",
                "image" => "./mic.jpg"
            ],
            [
                "categorie" => "Voyage",
                "nom" => "Trousse de Toilette",
                "prix" => 39.99,
                "description" => "Trousse de toilette imperméable.",
                "image" => "./waterproof.jpg"
            ],
            [
                "categorie" => "Jeux vidéo",
                "nom" => "Écran Gaming UltraWide",
                "prix" => 499.99,
                "description" => "Écran incurvé 34 pouces.",
                "image" => "./screen.jpg"
            ]
        ];

       
        $nouveauProduit = [
            "categorie" => "Maison",
            "nom" => "Aspirateur Robot CleanBot",
            "prix" => 299.99,
            "description" => "Aspirateur robotisé avec cartographie intelligente et contrôle vocal.",
            "image" => "./vaccuml.jpg"
        ];
        $produits[] = $nouveauProduit;

        
        echo '<div class="row bg-primary text-center">';
        foreach ($produits as $item) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card bg-dark rounded-3">
                    <img src="' . $item["image"] . '" class="card-img-top" alt="' . $item["nom"] . '">
                    <div class="card-body">
                        <h5 class="card-title text-white">' . $item["nom"] . '</h5>
                        <h6 class="card-subtitle mt-2 mb-2 text-primary fst-italic">' . $item["categorie"] . '</h6>
                        <p class="card-text text-white">' . $item["description"] . '</p>
                        <p class="card-text fw-bold text-decoration-underline text-white">Prix : ' . number_format($item["prix"], 2, ',', ' ') . ' €</p>
                    </div>
                </div>
            </div>';
        }
        echo '</div>';
        ?>
    </div>

    
    
</body>

</html>