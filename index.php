<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échiquier</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="board">
        <?php for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                $total = $i + $j;
                if ($total % 2 == 0) {
                     echo "<div class=\"black_tile\"></div>";
                 } else {
                     echo "<div class=\"white_tile\"></div>";
                 }
            }
        }
        ?>
    </div>
</body>

</html>