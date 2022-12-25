<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Editar activitat</title>
    <style>

    </style>

</head>

<div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <!-- part superior -->
    <div>

        <!-- nav bar -->
        <?php require("../common/user-navbar.html"); ?>

        <!-- contingut de la pagina -->
        <div class="container my-5 p-0 w-100 d-flex gap-3 bg-white rounded p-3">


            <div class="" style="width: 512px;">
                <img src="../assets/img/foto-local.jpg" class="w-100" alt="">
            </div>

            <div class="d-flex flex-column gap-2 flex-grow-1">
                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Nom de l'activitat">
                <div class="d-flex gap-2">
                    <select class="form-select bg-form-field" name="filter-age" aria-label="Categoria">
                        <option value="rol">Rol</option>
                        <option value="cosplay">Cosplay</option>
                        <option value="sport">Esports</option>
                        <option value="tournament">Torneig</option>
                    </select>
                    <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Data i hora">
                    <div class="input-group w-100">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
                        <input class="form-control text-center bg-form-field" type="number" name="min-player" id="min-input" value="" placeholder="Maxim de participants">
                    </div>
                </div>
                <textarea class="form-control bg-form-field h-100" name="" id="" placeholder="Descripcio"></textarea>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-secondary btn-lg fs-6 w-50">
                        Editar activitat
                    </button>
                    <button type="button" class="btn btn-danger btn-lg fs-6 w-50">
                        🗑 Esborrar activitat
                    </button>
                </div>
            </div>

        </div>
        <h2 class="container text-white">Usuaris Registrats - 99</h2>
        <div class="container my-5 p-3 w-100 bg-white rounded d-flex flex-wrap">

            <div class="col-3 p-1">
                <div class="bg-form-field rounded d-flex justify-content-between align-items-center p-3 ">
                    <span class="text-truncate">Usuari - super-fan-dragon-ball-xenoverse@gmail</span>
                    <button type="button" class="btn btn-danger btn-sm fs-6 h-100 py-1 px-2">🗑</button>
                </div>
            </div>

            <?php
            for ($i = 0; $i < 16; $i++) {
                echo "  <div class=\"col-3 p-1\">
                            <div class=\"bg-form-field rounded d-flex justify-content-between align-items-center p-3 \">
                                <span class=\"text-truncate\">Usuari - correu@gmail</span>
                                <button type=\"button\" class=\"btn btn-danger btn-sm fs-6 h-100 py-1 px-2\">🗑</button>
                            </div>
                        </div>";
            }
            ?>

        </div>

        <?php require("../common/body-end.php"); ?>
    </div>
    </body>

</html>