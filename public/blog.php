<!doctype html>
<html lang="ca">

<head>
    <!-- import common header -->
    <?php require("../common/header.html"); ?>

    <title>Blog</title>
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
            <div class="container my-5 p-0 w-100 d-flex gap-3">
                <div class="row w-100 m-0">
                    <div class="col row p-0 me-0 w-100">
                        <!-- blog -->
                        <?php
                        for ($i = 0; $i < 16; $i++) {
                            echo "  <div class=\"col-3 mb-3 p-0 ps-3\">
                                        <a href=\"blog-post.php\" class=\"card\">
                                            <img src=\"../assets/img/foto-local.jpg\" class=\"card-img-top\" alt=\"...\">
                                            <div class=\"card-body\" style=\"height: 15rem;\">
                                                <div class=\"\" style=\"overflow:hidden; text-overflow: ellipsis;\">
                                                    <div>
                                                        <h5 class=\"card-title\">Títol del post del blog</h5>
                                                        <h6 class=\"card-title\">01/01/2022</h6>
                                                    </div>
                                                    <p class=\"card-text\">Some quick example text to aabuild on thexxxx card title and make up the bulk of the card's content.</p>
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