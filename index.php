<?php


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$filter = $_GET['parking'];

if ($filter == true) {
    foreach ($hotels as $hotel) {
        if ($hotel['parking'] == true) {
            var_dump($hotel['parking']);
        }
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <main id="site_main" style="height: 100vh;" class="d-flex align-items-center justify-content-center bg-success">
        <div class="container bg-secondary rounded-5 p-4">
            <h1 class="text-center mb-4">Hotels</h1>
            <form action="" method="get" class="d-flex align-items-center justify-content-center mb-4">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" name="parking" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>

                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>

            <div class="row gy-4">

                <!-- si il form riotona falso(cioe se il checkbox non e cliccato) -->
                <?php if ($filter == false) : ?>
                    <!-- itera nell array di hotels -->
                    <?php foreach ($hotels as $key => $hotel) : ?>
                        <div class="col-4">
                            <div class="card" style="width:18rem;">
                                <img src="./hotel-img.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $hotel['name'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">Vote: <?= $hotel['vote'] ?></h6>
                                    <p class="card-text">Distance to center: <?= $hotel['distance_to_center'] ?></p>
                                    <p class="card-text">Description: <?= $hotel['description'] ?></p>
                                </div>
                            </div>
                        </div>

                    <? endforeach; ?>
                    <!-- fine ierazione -->
                    <!-- altrimenti se il ritorno di form e true(cioe se il checkbox e stato cliccato) -->
                <?php elseif ($filter == true) : ?>
                    <!-- itera solo quelli che nella chiave 'parking' il valore e true nell'array di hotels -->
                    <?php foreach ($hotels as $key => $hotel) :  if ($hotel['parking'] === true) : ?>
                            <div class="col-4">
                                <div class="card" style="width:18rem;">
                                    <img src="./hotel-img.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $hotel['name'] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted ">Vote: <?= $hotel['vote'] ?></h6>
                                        <p class="card-text">Distance to center: <?= $hotel['distance_to_center'] ?></p>
                                        <p class="card-text">Description: <?= $hotel['description'] ?></p>
                                    </div>
                                </div>
                            </div>

                    <? endif;
                    endforeach; ?>
                    <!-- finisce iterazione -->

                <?php endif; ?>
                <!-- fine condizione -->


            </div>




        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>