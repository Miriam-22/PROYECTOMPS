<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
    <?php include_once("include/encabezado.php"); ?>
    <div class="container" style="text-align: center;">
        <h2>REPORTES DE USUARIOS</h2>
        <div class="row">
            <div class="col">
                <a href="R_usu_pdf.php">
                    <img src="../Cliente/img/pdf.png" width="150px" height="150px">
                </a>

            </div>

            <div class="col">
            <a href="R_usu_excel.php">
                    <img src="../Cliente/img/excel.png" width="150px" height="150px">
                </a>
            </div>

            <div class="col">
            <a href="R_usu_gra.php">
                    <img src="../Cliente/img/gra.jpg" width="150px" height="150px">
                </a>
                
            </div>
        </div>
    </div>

    <h2>----------------------------------------------------------------------------------------------------------------</h2>

    <div class="container" style="text-align: center;">
        <h2>REPORTES DE PRODUCTOS</h2>
        <div class="row">
            <div class="col">
                <a href="R_prod_pdf.php">
                    <img src="../Cliente/img/pdf.png" width="150px" height="150px">
                </a>

            </div>

            <div class="col">
            <a href="R_prod_excel.php">
                    <img src="../Cliente/img/excel.png" width="150px" height="150px">
                </a>
            </div>

            <div class="col">
            <a href="R_prod_gra.php">
                    <img src="../Cliente/img/gra.jpg" width="150px" height="150px">
                </a>
                
            </div>
        </div>
    </div>

    <h2>----------------------------------------------------------------------------------------------------------------</h2>

    <div class="container" style="text-align: center;">
        <h2>REPORTES DE CATEGORIAS</h2>
        <div class="row">
            <div class="col">
                <a href="R_cat_pdf.php">
                    <img src="../Cliente/img/pdf.png" width="150px" height="150px">
                </a>

            </div>

            <div class="col">
            <a href="R_cat_excel.php">
                    <img src="../Cliente/img/excel.png" width="150px" height="150px">
                </a>
            </div>

            <div class="col">
            <a href="R_cat_gra.php">
                    <img src="../Cliente/img/gra.jpg" width="150px" height="150px">
                </a>
                
            </div>
        </div>
    </div>


    </header>

    <footer style="text-align: center; padding: 10px ; ">

        <?php
    include_once("include/pie.php")
    ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>