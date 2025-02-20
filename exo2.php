<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $guy = [
        "lastname" => "Liva",
        "name" => "Nicolas",
        "age" => 22,
        "city" => "Paris",
        "hobbies" => ["clubbing", "sport", "travel"],
    ];
    $personne["profession"] = "Dev";

    $guy["city"] = "Houston";

    $guy["hobbies"][] = "music";

    unset($guy["age"]);

    if (isset($guy["profession"])) {
        echo "La personne exerce la profession de " . $guy["profession"] . ".";
    } else {
        echo "la personne n'exerce pas de profession";
    }

    foreach ($guy as $key => $value) {
        if (is_array($value)) {
            echo "" . $key . " : " . implode(", ", $value) . "<br>";
        } else {
            echo $key . " : " . $value . "<br>";
        }
    }

    sort($guy["hobbies"]);
    echo "hobbies : " . implode(", ", $guy["hobbies"]) . "<br>";

    $total = 0;
    foreach ($guy as $value) {
        if (is_array(value: $value)) {
            $total += count($value);
        } else {
            $total += 1;
        }

    }
    echo "le nombre de champs est de " . $total . "<br>";


    print_r($guy);






    ?>

</body>

</html>