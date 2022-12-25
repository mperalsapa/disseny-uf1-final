<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>
    <title>Carretó - Afegir direcció</title>
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
                        <h2>Afegir dades</h2>
                        <h3>Dades Personals</h3>
                        <div class="d-flex gap-2">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Nom">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Cognom">
                        </div>
                        <div class="d-flex gap-2 my-2">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="DNI">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Telefon">
                        </div>
                        <h2>Direccio d'enviament</h2>
                        <div class="d-flex flex-column gap-2">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Direcció d'enviament">
                            <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Informacio opcional">
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Codi Postal">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Població">
                            </div>
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="País">
                                <input type="text" class="form-control bg-form-field" name="" id="" aria-describedby="helpId" placeholder="Provincia">
                            </div>
                        </div>
                        <a name="" id="" class="btn btn-secondary mt-4 fs-5" href="cart-payment.php" role="button">Guardar i continuar</a>
                    </form>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
</body>

</html>