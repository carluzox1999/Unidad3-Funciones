<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad 2</title>
</head>
<body>
    <script type="text/javascript">
        function sumaParametros() {
            let x = prompt("Introduce un número");
            let y = prompt("Introduce un número");

            if (x > y) {
                alert("El valor del primer parámetro es mayor que el segundo.");
                alert("Vuelva a intentarlo");
            } else {
                let suma = Number(x) + Number(y);
                return alert(suma);
            }
        }
    </script>
    
    <div class="container">
        <div class="p-2">
            <h6>
                <b>Actividad 2:</b> Defina una función que acepte 
                dos parámetros númericos. Si el valor del primer 
                parámetro es mayor que el segundo, muestre al 
                visitante una alerta. Si el valor del primer 
                parámetro es menor o igual que el segundo, 
                devuelva la suma de ambos parámetros
            </h6>
        </div>
    </div>
    <div class="p-2 d-flex justify-content-center">
        <input type="button" onclick="sumaParametros()" value="Activar Función">
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>