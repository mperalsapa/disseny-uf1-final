<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Activitats</title>
    <style>

    </style>

</head>

<body>
    <div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
        <!-- part superior -->
        <div>

            <!-- nav bar -->
            <?php require("../common/user-navbar.html"); ?>

            <!-- contingut de la pagina -->
            <div class="container my-5 p-0 w-100 d-flex gap-3">
                <div class="row w-100 m-0">
                    <div class="col row p-0 me-0 w-100">
                        <!-- seccio d'activitats actuals -->
                        <h1 class="text-white">Aquesta Setmana</h1>
                        <div class="d-flex p-0">
                            <div class="col-3 mb-3 p-0 ps-3">
                                <a href="activity.php" class="card">
                                    <img src="../assets/img/foto-local.jpg" class="card-img-top" alt="...">
                                    <div class="card-body" style="height: 15rem;">
                                        <div class="h-50 " style="overflow:hidden; text-overflow: ellipsis;">

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="card-title">Títol de l'activitat</h5>
                                                    <h6 class="card-title">01/01/2022 23:59</h6>
                                                </div>
                                                <span class="badge bg-secondary text-dark fs-6">Categoria</span>
                                            </div>
                                            <p class="card-text">Some quick example text to aabuild on thexxxx card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="h-50 d-flex align-items-center justify-content-center flex-column">
                                            <span>No hi ha places disponibles.</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 mb-3 p-0 ps-3">
                                <a href="activity.php" class="card">
                                    <img src="../assets/img/foto-local.jpg" class="card-img-top" alt="...">
                                    <div class="card-body" style="height: 15rem;">
                                        <div class="h-50 " style="overflow:hidden; text-overflow: ellipsis;">

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="card-title">Títol de l'activitat</h5>
                                                    <h6 class="card-title">01/01/2022 23:59</h6>
                                                </div>
                                                <span class="badge bg-secondary text-dark fs-6">Categoria</span>
                                            </div>
                                            <p class="card-text">Some quick example text to aabuild on thexxxx card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="h-50 d-flex align-items-center justify-content-center flex-column">
                                            <span>99 places disponibles</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- seccio de properes activitats -->
                        <h1 class="text-white">Properament</h1>
                        <?php
                        for ($i = 0; $i < 16; $i++) {
                            echo "  <div class=\"col-3 mb-3 p-0 ps-3\">
                                        <a href=\"activity.php\" class=\"card\">
                                            <img src=\"../assets/img/foto-local.jpg\" class=\"card-img-top\" alt=\"...\">
                                            <div class=\"card-body\" style=\"height: 15rem;\">
                                                <div class=\"h-50 \" style=\"overflow:hidden; text-overflow: ellipsis;\">

                                                    <div class=\"d-flex justify-content-between align-items-start\">
                                                        <div>
                                                            <h5 class=\"card-title\">Títol de l'activitat</h5>
                                                            <h6 class=\"card-title\">01/01/2022 23:59</h6>
                                                        </div>
                                                        <span class=\"badge bg-secondary text-dark fs-6\">Categoria</span>
                                                    </div>
                                                    <p class=\"card-text\">Some quick example text to aabuild on thexxxx card title and make up the bulk of the card's content.</p>
                                                </div>
                                                <div class=\"h-50 d-flex align-items-center justify-content-center flex-column\">
                                                    <span>99 places disponibles</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
</body>

</html>