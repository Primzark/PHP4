



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Liste des Produits</h1>

        <?php

        require_once("./product.php");



        $nouveauProduit = [
            "categorie" => "Maison",
            "nom" => "Aspirateur Robot CleanBot",
            "prix" => 299.99,
            "description" => "Aspirateur robotisé avec cartographie intelligente.",
            "image" => "./img/vaccuml.jpg"
        ];
        $produits[] = $nouveauProduit;


        echo '<div class="row">';
        foreach ($produits as $item) {
            $fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);
            $formattedPrice = $fmt->formatCurrency($item["prix"], 'EUR');

            echo '
            <div class="col-md-4 mb-4">
                <div class="card bg-dark rounded-3 text-center">
                    <img src="' . $item["image"] . '" class="card-img-top" alt="' . $item["nom"] . '">
                    <div class="card-body">
                        <h3 class="mt-2 mb-2 text-primary fst-italic">' . $item["categorie"] . '</h3>
                        <h5 class="mb-2 text-white">' . $item["nom"] . '</h5>
                        <p class="text-white">' . $item["description"] . '</p>
                        <p class="fw-bold text-decoration-underline text-white">Prix : ' . $formattedPrice . '</p>
                    </div>
                </div>
            </div>';
        }
        echo '</div>';
        ?>
    </div>



</body>

</html>