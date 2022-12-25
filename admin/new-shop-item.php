<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Crear producte</title>
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
            <div class="container my-5 p-0 w-100 d-flex gap-3 d-flex flex-column">
                <form class="w-100 m-0 bg-white rounded d-flex">
                    <div class="p-0">
                        <div class="d-flex flex-column flex-grow-1 m-3 me-2" style="width: 512px; height: 512px;">
                            <div class="h-100 d-flex justify-content-center align-items-center bg-form-field">
                                <label for="file-input">
                                    <i class="bi bi-upload p-4 rounded bg-secondary"></i>
                                </label>

                                <input class="d-none" id="file-input" type="file" />
                            </div>
                            <div class="w-100 h-25 mt-2 d-flex gap-2">
                                <div class="w-100 d-flex justify-content-center align-items-center bg-form-field">
                                    <label for="file-input">
                                        <i class="bi bi-upload p-2 rounded bg-secondary"></i>
                                    </label>

                                    <input class="d-none" id="file-input" type="file" />
                                </div>
                                <div class="w-100 d-flex justify-content-center align-items-center bg-form-field">
                                    <label for="file-input">
                                        <i class="bi bi-upload p-2 rounded bg-secondary"></i>
                                    </label>

                                    <input class="d-none" id="file-input" type="file" />
                                </div>
                                <div class="w-100 d-flex justify-content-center align-items-center bg-form-field">
                                    <label for="file-input">
                                        <i class="bi bi-upload p-2 rounded bg-secondary"></i>
                                    </label>

                                    <input class="d-none" id="file-input" type="file" />
                                </div>
                                <div class="w-100 d-flex justify-content-center align-items-center bg-form-field">
                                    <label for="file-input">
                                        <i class="bi bi-upload p-2 rounded bg-secondary"></i>
                                    </label>

                                    <input class="d-none" id="file-input" type="file" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2 flex-grow-1 p-3 ps-0">
                        <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Nom del joc">
                        <textarea class="form-control bg-form-field h-100" name="" id="" placeholder="Descripcio"></textarea>
                        <div class="d-flex gap-2">
                            <div class="w-100">
                                <select class="form-select bg-form-field" name="filter-age" aria-label="Categoria">
                                    <option value="rol">Rol</option>
                                    <option value="cosplay">Cosplay</option>
                                    <option value="sport">Esports</option>
                                    <option value="tournament">Torneig</option>
                                </select>
                            </div>
                            <div class="dropdown w-100">
                                <button class="dropdown-toggle form-control d-flex justify-content-between form-select bg-form-field" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <div class="input-group w-100">
                                <span class="input-group-text" id="basic-addon1">€</span>
                                <input class="form-control m-0 p-0 text-center bg-form-field w-50" type="number" name="price" id="price" value="60">
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div class="input-group w-100">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-dash-fill"></i></span>
                                <input class="form-control m-0 p-0 text-center bg-form-field w-50" type="number" name="min-player" id="min-player" value="4" step="1">
                            </div>
                            <div class="input-group w-100">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span>
                                <input class="form-control m-0 p-0 text-center bg-form-field w-50" type="number" name="max-player" id="max-player" value="8" step="1">
                            </div>
                            <div class="input-group w-100">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-archive"></i></span>
                                <input class="form-control m-0 p-0 text-center bg-form-field w-50" type="number" name="stock" id="stock" value="50" step="1">
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-secondary btn-lg fs-6 w-100">
                                Crear producte
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <?php require("../common/body-end.php"); ?>
        </div>
</body>

</html>