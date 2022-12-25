<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Activitat</title>
    <style>

    </style>

</head>

<div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <!-- part superior -->
    <div>

        <!-- nav bar -->
        <?php require("../common/public-navbar.html"); ?>

        <!-- contingut de la pagina -->
        <div class="container my-5 p-0 w-100 d-flex gap-3">
            <div class="w-100 m-0 bg-white rounded d-flex">
                <div class="p-0">
                    <div class="m-3" style="width: 512px;">
                        <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                    </div>
                </div>
                <div class=" d-flex flex-column justify-content-between py-3 pe-3">
                    <div>
                        <h1>Nom de l'Activitat</h1>
                        <h2>01/01/2022 23:59</h2>
                        <h3>99 Places disponibles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit sed dolorum minus nisi deleniti illo temporibus! Ipsum consectetur totam blanditiis temporibus autem voluptatem. Explicabo odit totam minus libero quo!</p>

                    </div>

                    <div class="d-flex gap-2 flex-column m-0">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary btn-lg w-50 fs-3">
                                Apuntar-se
                            </button>
                            <?php require("../common/socials-block.html"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
    </body>

</html>