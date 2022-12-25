<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Producte</title>
    <style>

    </style>

</head>

<body>
    <div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
        <!-- part superior -->
        <div>

            <!-- nav bar -->
            <?php require("../common/public-navbar.html"); ?>

            <!-- contingut de la pagina -->
            <div class="container my-5 p-0 w-100 d-flex gap-3 d-flex flex-column">
                <div class="w-100 m-0 bg-white rounded d-flex">
                    <div class="p-0">
                        <div class="m-3" style="width: 512px;">
                            <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                            <div class="w-100 mt-2 d-flex gap-2">
                                <div>
                                    <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                                </div>
                                <div>
                                    <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                                </div>
                                <div>
                                    <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                                </div>
                                <div>
                                    <img src="../assets/img/monopoly-game.webp" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-column justify-content-between py-3 pe-3">
                        <div>
                            <h1>Nom del producte</h1>
                            <h2>69.99€</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit sed dolorum minus nisi deleniti illo temporibus! Ipsum consectetur totam blanditiis temporibus autem voluptatem. Explicabo odit totam minus libero quo!</p>
                            <div class="w-50">
                                <div class="row">
                                    <span class="col-3">Jugadors:</span>
                                    <span class="col">2 - 4</span>
                                </div>
                                <div class="row">
                                    <span class="col-3">Edat:</span>
                                    <span class="col">8 - 88</span>
                                </div>
                                <div class="row">
                                    <span class="col-3">Tipus:</span>
                                    <span class="col">Taula</span>
                                </div>
                                <div class="row">
                                    <span class="col-3">Categories:</span>
                                    <span class="col">Rol, Miniatures</span>
                                </div>
                                <div class="row">
                                    <span class="col-3">Enviament:</span>
                                    <span class="col">3 Dies</span>
                                </div>
                                <div class="row">
                                    <span class="col-3">Stock:</span>
                                    <span class="col">Disponible</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 flex-column m-0">
                            <div class="d-flex justify-content-between">
                                <div class="row">
                                    <span>Quantitat</span>
                                    <div class="btn-group" role="group" aria-label="Basic example" style="width: fit-content;">
                                        <button type="button" class="btn btn-secondary col-1">-</button>
                                        <span class="btn btn-secondary col-1">1</span>
                                        <button type="button" class="btn btn-secondary col-1">+</button>
                                    </div>
                                </div>
                                <?php require("../common/socials-block.html"); ?>
                            </div>
                            <div class="d-flex gap-2">
                                <a type="button" class="btn btn-secondary btn-lg w-50 fs-3" href="../user/cart-view.php">
                                    Afegir al carretó
                                </a>
                                <a type="button" class="btn btn-secondary btn-lg w-50 fs-3" href="../user/cart-view.php">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 m-0 bg-white rounded p-3">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid perspiciatis culpa. Eaque repellendus consequatur, aperiam illo omnis blanditiis. Similique a eaque neque illo delectus amet numquam odit tenetur placeat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid perspiciatis culpa. Eaque repellendus consequatur, aperiam illo omnis blanditiis. Similique a eaque neque illo delectus amet numquam odit tenetur placeat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid perspiciatis culpa. Eaque repellendus consequatur, aperiam illo omnis blanditiis. Similique a eaque neque illo delectus amet numquam odit tenetur placeat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid perspiciatis culpa. Eaque repellendus consequatur, aperiam illo omnis blanditiis. Similique a eaque neque illo delectus amet numquam odit tenetur placeat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquid perspiciatis culpa. Eaque repellendus consequatur, aperiam illo omnis blanditiis. Similique a eaque neque illo delectus amet numquam odit tenetur placeat?
                    </p>

                </div>
            </div>
            <?php require("../common/body-end.php"); ?>
        </div>
</body>

</html>