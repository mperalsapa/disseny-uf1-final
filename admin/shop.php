<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Botiga</title>
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
                    <div class="col-3 ps-0 pb-3">
                        <div class="bg-white p-3 rounded position-sticky" style="top:6rem;">
                            <div class="mb-3">
                                <a name="" id="" class="btn btn-secondary w-100" href="new-shop-item.php" role="button"><i class="bi bi-plus-square"></i> Crear Producte</a>
                            </div>
                            <div class="mb-3">
                                <h4>Edats</h4>
                                <select class="form-select" name="filter-age" aria-label="Seleccio d'edat del filtre">
                                    <option value="infants">Infants</option>
                                    <option value="kids">Nens</option>
                                    <option value="teen">Adolescents</option>
                                    <option value="adults">Adults</option>
                                    <option value="all-ages">Totes les Edats</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <h4>Tipus</h4>
                                <select class="form-select" name="filter-age" aria-label="Seleccio d'edat del filtre">
                                    <option value="cards">Cartes</option>
                                    <option value="table">Taula</option>
                                    <option value="kids">Adolescents</option>
                                    <option value="classics">Clàssics</option>
                                    <option value="rol">Rol</option>
                                    <option value="catalan">Catala</option>
                                    <option value="puzzles">Puzzles</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <h4>Categoria</h4>
                                <div class="dropdown">
                                    <button class="dropdown-toggle form-control d-flex justify-content-between form-select" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categoria
                                    </button>
                                    <ul class=" dropdown-menu dropdown-menu-end p-0 w-100">
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Wargames
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Miniatures
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Estrategia
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Rol
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Family Game
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Party Game
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h4>Jugadors</h4>
                                <!-- This block can be reused as many times as needed -->
                                <section class="range-slider row m-3 p-0">
                                    <input class="m-0 form-range" value="10" min="1" max="16" step="1" type="range">
                                    <input class="m-0 form-range" value="5" min="1" max="16" step="1" type="range">
                                </section>
                                <div class="col row">
                                    <div class="col-6">
                                        <div class="input-group col-4 m-0 p-0">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
                                            <input class="form-control col-4 m-0 p-0 text-center bg-secondary" type="number" name="min-player" id="min-input" value="5">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group col-4 m-0 p-0">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
                                            <input class="form-control col-4 m-0 p-0 text-center bg-secondary" type="number" name="max-player" id="max-input" value="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4>Preu</h4>
                                <!-- This block can be reused as many times as needed -->
                                <section class="range-slider row m-3 p-0">
                                    <span class="rangeValues"></span>
                                    <input class="m-0 form-range" value="80" min="10" max="206" step="1" type="range">
                                    <input class="m-0 form-range" value="30" min="10" max="206" step="1" type="range">
                                </section>
                                <div class="col row">
                                    <div class="col-6">
                                        <div class="input-group col-4 m-0 p-0">
                                            <span class="input-group-text" id="basic-addon1">€</span>
                                            <input class="form-control col-4 m-0 p-0 text-center bg-secondary" type="number" name="min-price" id="min-input" value="5">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group col-4 m-0 p-0">
                                            <span class="input-group-text" id="basic-addon1">€</span>
                                            <input class="form-control col-4 m-0 p-0 text-center bg-secondary" type="number" name="max-price" id="max-input" value="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col row p-0 me-0 w-100">
                        <?php
                        for ($i = 0; $i < 16; $i++) {
                            echo "  <div class=\"col-3 mb-3 p-0 ps-3\">
                                        <a href=\"edit-shop-item.php\" class=\"card\">
                                            <img src=\"../assets/img/monopoly-game.webp\" class=\"card-img-top\" alt=\"...\">
                                            <div class=\"card-body\">
                                                <p class=\"card-text fs-4\">Monopoly: Deluxe inflation edition</p>
                                                <p class=\"card-text fs-5\">69.99 €</p>
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