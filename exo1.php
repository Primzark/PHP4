
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pph_4</title>
</head>
<body>

<?php
$name = ["Alice", "Bob", "Charlie", "David", "Emma"];
$name[] = "Nico";

array_unshift($name,"Bob");
unset($name[0]);
array_search('Bob', $name);

foreach($name as $value){
    echo $value . "<br>";
    }
echo count ($name) ."<br>";



print_r($name);


?>








</body>
</html>