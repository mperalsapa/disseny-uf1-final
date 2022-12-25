<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>
    <title>Carretó</title>
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
            <div class="container my-5 p-0 d-flex">
                <div class="row m-0">
                    <!-- contenidor amb llista d'articles que conte el carretó -->
                    <div class="col p-3 bg-white rounded d-flex flex-column gap-3">
                        <!-- targeta d'un producte -->
                        <div class="d-flex" style="height: 15rem;">
                            <img src="../assets/img/monopoly-game.webp" alt="" class="h-100 rounded">
                            <div class="d-flex flex-column justify-content-between ms-2">
                                <div class="overflow-hidden">
                                    <h4>Nom del producte</h4>
                                    <h5>69.99€</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, labore. Ducimus possimus, consequatur sed nobis nihil iste rem earum fugiat nemo vitae. Velit dignissimos molestiae incidunt inventore harum nesciunt placeat.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="row">
                                        <span>Quantitat</span>
                                        <div class="btn-group" role="group" aria-label="Basic example" style="width: fit-content;">
                                            <button type="button" class="btn btn-secondary col-1">-</button>
                                            <span class="btn btn-secondary col-1">1</span>
                                            <button type="button" class="btn btn-secondary col-1">+</button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger align-self-end">🗑 Esborrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex" style="height: 15rem;">
                            <img src="../assets/img/monopoly-game.webp" alt="" class="h-100 rounded">
                            <div class="d-flex flex-column justify-content-between ms-2">
                                <div class="overflow-hidden">
                                    <h4>Nom del producte</h4>
                                    <h5>69.99€</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, labore. Ducimus possimus, consequatur sed nobis nihil iste rem earum fugiat nemo vitae. Velit dignissimos molestiae incidunt inventore harum nesciunt placeat.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="row">
                                        <span>Quantitat</span>
                                        <div class="btn-group" role="group" aria-label="Basic example" style="width: fit-content;">
                                            <button type="button" class="btn btn-secondary col-1">-</button>
                                            <span class="btn btn-secondary col-1">1</span>
                                            <button type="button" class="btn btn-secondary col-1">+</button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger align-self-end">🗑 Esborrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex" style="height: 15rem;">
                            <img src="../assets/img/monopoly-game.webp" alt="" class="h-100 rounded">
                            <div class="d-flex flex-column justify-content-between ms-2">
                                <div class="overflow-hidden">
                                    <h4>Nom del producte</h4>
                                    <h5>69.99€</h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, labore. Ducimus possimus, consequatur sed nobis nihil iste rem earum fugiat nemo vitae. Velit dignissimos molestiae incidunt inventore harum nesciunt placeat.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="row">
                                        <span>Quantitat</span>
                                        <div class="btn-group" role="group" aria-label="Basic example" style="width: fit-content;">
                                            <button type="button" class="btn btn-secondary col-1">-</button>
                                            <span class="btn btn-secondary col-1">1</span>
                                            <button type="button" class="btn btn-secondary col-1">+</button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger align-self-end">🗑 Esborrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contenidor amb informacio del preu i botó per continuar -->
                    <div class="col-3">
                        <div class="bg-white p-3 rounded position-sticky d-flex justify-content-center align-items-center flex-column gap-3" style="top:6rem;">
                            <h2 class="w-100">Resum</h2>
                            <div class="d-flex justify-content-between w-100">
                                <span>Subtotal d'articles:</span>
                                <span>209,97€</span>
                            </div>
                            <div class="bg-dark border border-dark w-100"></div>
                            <div class="d-flex justify-content-between w-100">
                                <span>Total amb impostos:</span>
                                <span>209,97€</span>
                            </div>
                            <a name="" id="" class="btn btn-secondary w-100 fs-5" href="cart-address.php" role="button">Guardar i continuar</a>
                            <button type="button" class="btn btn-danger w-100 fs-5"> 🗑 Esborrar carretó</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
</body>

</html>