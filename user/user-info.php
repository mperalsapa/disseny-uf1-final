<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>
    <title>Perfil</title>
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
                <div class="row w-100 m-0 gap-3">
                    <div class="col-3 ps-0 pb-3">
                        <div class="bg-white p-3 rounded position-sticky d-flex justify-content-center align-items-center flex-column gap-3" style="top:6rem;">
                            <div class="bg-secondary p-3 rounded-circle mb-3 d-flex justify-content-center align-items-center" style="aspect-ratio: 1; width: 50%;">
                                <span class="fs-1">MP</span>
                            </div>
                            <a name="" id="" class="btn btn-secondary w-100 fs-5" href="#" role="button">Dades Personals</a>
                            <a name="" id="" class="btn btn-secondary w-100 fs-5" href="#" role="button">Configuracio</a>
                            <a name="" id="" class="btn btn-secondary w-100 fs-5" href="#" role="button">Tancar sessio</a>
                        </div>
                    </div>
                    <div class="col p-3 w-100 bg-white rounded">
                        <form action="">
                            <h2>Canviar Dades</h2>
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
                            <button class="btn btn-secondary mt-4 fs-5" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require("../common/body-end.php"); ?>
    </div>
</body>

</html>