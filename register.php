<?php
// récupération des données du cvs dans un tableau php;
$csvData = array_map('str_getcsv', file('assets/departments_regions_france_2016.csv'));
// suppression de la ligne d'entête du tableau
$deps_regions = array_slice($csvData, 1);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Département Région de France</title>
    <style>
        .container {
            margin-top: 50vh;
            transform: translateY(-50%);
        }

        body {
            background-image: url(./assets/img/25101.jpg);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Formulaire d'inscription</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="#">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <label class="mb-2" for=".">Département</label>
                    <select id="." class="form-select mb-2" aria-label="Default select example">
                        <option selected>Votre département de résidence</option>
                        <?php foreach ($deps_regions as $departement) {
                            echo "<option value=\"$departement[0] $departement[1]\">$departement[0] $departement[1]</option>";
                        }
                        ?>
                    </select>
                    <label class="mb-2" for=".">Région</label>
                    <select id="." class="form-select mb-2" aria-label="Default select example">
                        <option selected>Votre région de résidence</option>
                        <?php $tps = [];
                        foreach ($deps_regions as $departement) {
                            if (!in_array($departement[2],$tps)) {
                                if ($departement[2]!='NULL'){
                                  echo "<option value=\"$departement[2] $departement[3]\">$departement[2] $departement[3]</option>";  
                                }
                                
                            }
                            array_push($tps,$departement[2]);
                        }
                        ?>
                    </select>
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button type="submit" class="btn btn-primary">S'inscrire</button>  
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>