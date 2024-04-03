<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

    <header class="container">
        <h1 class="text-center">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
        <h2 class="text-end">Adam Mickiewicz</h2>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a class="list-group-item list-group-item-primary"><i class="bi bi-list-columns"></i> Spis treści</a>
                    <a href="./" class="list-group-item list-group-item-action"><i class="bi bi-house-fill"></i> Strona główna</a>
                    
                    <?php 
                        for ($i = 1; $i <= 12; $i++) {
                            echo('<a href="./?k='.$i.'" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga '.$i.'</a>');
                        }

                    ?>
                    
                    <!-- <a href="./k1.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 1</a>
                    <a href="./k2.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 2</a>
                    <a href="./k3.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 3</a>
                    <a href="./k4.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 4</a>
                    <a href="./k5.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i>  Księga 5</a>
                    <a href="./k6.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 6</a>
                    <a href="./k7.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 7</a>
                    <a href="./k8.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 8</a>
                    <a href="./k9.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 9</a>
                    <a href="./k10.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 10</a>
                    <a href="./k11.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 11</a>
                    <a href="./k12.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i> Księga 12</a> -->
                  </div>

            </div>
            <div class="col-9">
                <?php 

                    if(isset($_GET['k'])) {
                         include_once("k" . $_GET['k'] . ".html");
                        // include_once("k1.html");

                    } 
                    // elseif (!empty($argv[1])) {

                    // }
                    else {
                        echo "<img src='./pan-tadeusz.jpg' alt='Pan Tadeusz' class='img-fluid rounded'>";
                    }
                ?>

            </div>
        </div>
    </div>

    <footer class="container py-3 my-4 border-top text-body-secondary fixed-bottom alert alert-primary text-end">
        &copy;  Lukasz Czerwinski, Akademia Nauk Stosowanych w Nowym Targu 

      
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
