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
    <script>
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