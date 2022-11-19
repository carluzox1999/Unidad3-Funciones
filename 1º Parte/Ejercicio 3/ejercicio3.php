<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <p>
        <b>Ejercicio 3:</b> Realizar un programa que 
        contenga las diferencias entre los loops:
        <b>for, forEach, for in y for of</b> .
        En el mismo código explicar las diferencias, pros y contras, de cada uno de ellos.
        Vídeo que sirve de apoyo: 
        <a href="https://www.youtube.com/watch?v=Xax0GUlSjpk">Video</a> 
    </p>
    <hr>
    <p>

    </p>
    <script type="text/javascript">
        // Inicializamos el array que vamos a utilizar.
        let nombres = ["Carlos", "Samanta", "Arlette", "Kevin"];
    </script>


    <h3>FOR</h3>
    <p>* PROS : </p>
    <p>
        - Universalmente conocido y comodo de usar.
    </p>
    <p>
        - Es muy rapido cuanto tenemos que hacer varias 
        iteraciones.
    </p>
    <p>
        - Podemos utilizar las propiedades nativas de este 
        -   for loop como "Break" y "Continue" para detener
        -   y saltar elementos del loop.
    </p>
    <p>
        - Va a saltar ese elemento y sale de el loop: 
    </p>
    <code>
        for (let i = 0; i < nombres.length; i++) {
            if(nombres[i] === "Samanta") {
                break;
            }
            console.log(nombres[i]);
        }
    </code>
    <p>
        - Saltamos el elemento y continuamos el ciclo
    </p>
    <code>
        for (let i = 0; i < nombres.length; i++) {
            if(nombres[i] === "Samanta") {
                continue;
            }
            console.log(nombres[i]);
        }
    </code>
    <p>* CONTRAS : </p>
    <p>
        - La sintaxis es poco ilegible, sobretodo en sus
        condiciones.  
    </p>
    <input type="button" onclick="fornormal()" value="Activar For">
    
    
    <script type="text/javascript">
            function fornormal(){
                for (let i = 0; i < nombres.length; i++) {
                    document.write(nombres[i] + " - ");
                }

                document.write("<br><a href='ejercicio3.php'><input type='button' value='Volver Atrás'></a>");

            }
    </script>


    <h3>ForEach</h3>
    <p>* PROS : </p>
    <p> 
        - La sintaxis es muchisimo más limpia.
    </p>
    <p>
        - Podemos hacer una función más corta
        haciendo la sintaxis más corta.
    </p>
    <code>
        nombres.forEach(nombre => console.log(nombre));
    </code>
    <p>* CONTRAS : </p>
    <p>
        - No nos permite utilizar "continue" y "break".
    </p>
    <p>
        <code>
            nombres.forEach((nombre) => {
                if (nombre => "Arlette") 
                    break; continue;
                console.log(nombre);
            });
        </code>
    </p>
    <input type="button" onclick="foreachFE()" value="Activar For Each">
    
    
    <script type="text/javascript">
            function foreachFE(){
                nombres.forEach((nombre) => {
                    document.write(nombre + " - ");
                });

                document.write("<br><a href='ejercicio3.php'><input type='button' value='Volver Atrás'></a>");

            }
    </script>

    <h3>For In</h3>
    <p>* PROS : </p>
    <p>
                - La sintaxis es bastante limpia.
    </p>
    <p>
                - Si se agrega otro elemento al array de nombres
                que no está en el array original lo busca con una
                propiedad totalmente diferente. El bucle for in
                tambien itera sobre los elementos que fueron 
                agregados al prototipo del array que está modificando 
                este y cualquier otro elemento que esté modificando el array
                original como en este caso una propiedad. Puede ser una contra.
    </p>
    <code>
                nombres.numero = 10;
    </code>
    <p>            
                - Utilizamos index como elemento para iterar
                sobre el array.
    </p>
    <p>* CONTRAS : </p>
    <p>
                - El último pro también es una desventaja, 
                porque si quieres iterar rapidamente 
                sobre los elementos del loop, tienes que 
                utilizar el index y utilizar el array para 
                poder iterar sobre estos elementos. Si necesitas
                el index este loop te va ser gran ayuda.
    </p>
    <input type="button" onclick="forin()" value="Activar For In">


    <script type="text/javascript">
            function forin(){
                for(const index in nombres) {
                    salida = nombres[index];
                    document.write(salida + " - ");

                    // document.write(nombres[index]);

                }

                document.write("<br><a href='ejercicio3.php'><input type='button' value='Volver Atrás'></a>");

            }
    </script>

    <h3>For of</h3>
    <p>* PROS : </p>
    <p>
        - Depende del caso, si solo quieres iterar sobre 
        los elementos, sirve de gran ayuda.
    </p>
    <p>
        - Se puede utilizar el "Continue" y el "Break".
    </p>
    <p>
        <code>
            for(const nombre of nombres) {
                if (nombre => "Kevin") {
                    continue; break;                    
                }
                console.log(nombre);
            }
        </code>
    </p>
    
    <script type="text/javascript">
        // -> For of

            function forof(){
                for(const nombre of nombres) {
                    let salida = nombre;
                    document.write(salida + " - ");
                }

                document.write("<br><a href='ejercicio3.php'><input type='button' value='Volver Atrás'></a>");
            }
        

        
    </script>
    <input type="button" onclick="forof()" value="Activar For Of">

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>