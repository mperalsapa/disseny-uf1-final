<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>
    <title>Carretó - Afegir pagament</title>
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
            <div class="container my-5 p-0 d-flex justify-content-center gap-3">
                <div class="col-9 p-3 bg-white rounded">
                    <form action="">
                        <h2>Afegir Métode de pagament</h2>
                        <h4>Tipus</h4>
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary p-3">💳</button>
                            <button type="button" class="btn btn-secondary p-3">🏦</button>
                            <button type="button" class="btn btn-secondary p-3">💵</button>
                        </div>
                        <h4>Dades de targeta</h4>
                        <div class="d-flex flex-column gap-2">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Titular de la targeta">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Número">
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Data d'expiració">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="CVC/CCV">
                            </div>
                        </div>
                        <a name="" id="" class="btn btn-secondary mt-4 fs-5" href="../public/shop.php" role="button">Guardar i continuar</a>
                    </form>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
</body>

</html>