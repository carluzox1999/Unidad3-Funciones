<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Moneda</title>
</head>
<body>
    <script type="text/javascript">
        var imagenes = ['./IMG/moenda-cara.png', './IMG/moenda-cruz.png'];

        let contador = 0;

        function crearMoneda(){
            var img = document.createElement('img');
            img.scr = imagenes[contador];
            document.getElementById('content').appendChild(img);
        }

        function lanzarMoneda(){
            if(contador <= 6) {
                var img = document.getElementById('content').getElementsByTagName('img')[0];

                contador = contador % imagenes.length;
                img.src = imagenes[contador];
            }
            // contador++;
            
        }
    </script>
    <div>
        <h1>Cara o cruz</h1>
    </div>
    <div class="container">
        <h4>Elije una opción</h4>
        <form action="moneda.php" method="post">
            <div class="form-check">
                <label class="form-check-label" for="cara" value="Cara">Cara</label>
                <input class="form-check-input" type="radio" name="cara" id="cara">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="cruz" value="Cruz">Cruz</label>
                <input class="form-check-input" type="radio" name="cruz" id="cruz">
            </div>
        </form>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <button type="button" onclick="lanzarMoneda()">
                <div class="col-12" id="content">
                    <span>
                        <img src="./IMG/moenda-cara.png" alt="Moneda">
                    </span>
                </div>
            </button>
        </div>
        <h2></h2>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>