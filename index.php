<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styles</title>
    
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  -->

    <!-- Flat pickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body>
    <script src="./node_modules/aos/dist/aos.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>

    <div class="container">
        <div class="datepicker-container">
            <input type="text" id="datepicker" placeholder="Select Date">
          </div>          
    </div>

    <script>
        flatpickr("#datepicker", {
            dateFormat: "Y-m-d", 
        });
    </script>



    <script>
    
    // consolek.log(Math.round(Math.random()*100))
    
    //function saludar(nombre) {
    //    nombre = nombre || 'desconocido';
    //    console.log(`hola ${nombre}`);
    //}

    //saludar('pedro');
    //saludar();

    //let aux = null;
    //console.log(aux || "aux332");
//
    //let aux2 = null;
    //console.log(aux2 && "aux332");

    //let aux1 = alert("alerta");
    //let aux2 = confirm("confirmacion");
    //let aux3 = prompt("aviso");
//
    //console.log(aux1, aux2, aux3)


    //let cadena = "Lorem Ipsum is simply dummy text of the printing and //typesetting industry. Lorem Ipsum has been the industry's standard dummy //text ever since the 1500s, when an unknown printer took a galley of type and //scrambled it to make a type specimen book. It has survived not only five //centuries, but also the leap into electronic typesetting, remaining //essentially unchanged. It was popularised in the 1960s with the release of //Letraset sheets containing Lorem Ipsum passages, and more recently with //desktop publishing software like Aldus PageMaker including versions of Lorem //Ipsum."
    //let expresion = new RegExp("lorem","ig");
//
    //console.log(expresion.test(cadena));
    //console.log(expresion.exec(cadena));
    //console.log(cadena.match(expresion));


    ////clasico
    //(function(){
    //    console.log("anonimo 1");
    //})();
//
    //(function(){
    //    console.log("anonimo 2");
    //})();

    
    //class Sea{
    //    constructor(valor1, valor2){
    //        this.valor1 = valor1;
    //        this.valor2 = valor2;
    //    }
    //    get valorA() {
    //        return this.valor1;
    //    }
    //    get valorB() {
    //        return this.valor2;
    //    }
    //}
//
    //let aux = new Sea(8,4);
    //
    //console.log(aux.valor1);
    //console.log(aux.valor2);

    </script> 

    <!-- <script src="./js/main-modules.js" type="module"></script>
    <script src="./js/main-modules.js" nomodule=""></script> -->


    <script>

        // Programa una función que cuente el número de caracteres de una cadena de texto, pe. miFuncion("Hola Mundo") devolverá 10.

        const contarCaracteres = function(text){
            if(typeof(text) == "string"){
                let contadorAux = 0;
                let expRegAux = /[a-zA-Z]/;
                for(let i=0 ; i<text.length; i++){
                    if(text[i].match(expRegAux)){
                        contadorAux++;
                    }  
                }
                console.log(`La cadena ${text} con tamaño ${text.length} tiene ${contadorAux} caracteres`);
            }else{
                console.log("inserte un texto");
            }
        }

        //contarCaracteres("n23")

        // Programa una función que te devuelva el texto recortado según el número de caracteres indicados, pe. miFuncion("Hola Mundo", 4) devolverá "Hola".

        // slice
        const cortarCadena = function(text,limit){
            if(typeof(text) == "string" && text){
                let textAux = "";
                let i = 0
                while(i<limit){
                    textAux = textAux + text[i]
                    i++
                }
                console.log(textAux);
            }else{
                console.log("inserte un texto");
            }
        }

        //cortarCadena("",5)

        //  Programa una función que dada una String te devuelva un Array de textos separados por cierto caracter, pe. miFuncion('hola que tal', ' ') devolverá ['hola', 'que', 'tal'].

        //split
        const arregloCaracteres = function(text,separador) {
            if(typeof(text) == "string" && text && separador){
                let arrayAux = []
                let textAux = ""
                for(let i=0 ; i < text.length; i++){
                    if(text[i]!=separador){
                        textAux= textAux + text[i]
                    }
                    else{
                        arrayAux.push(textAux)
                        textAux = ""
                    }
                }
                if(textAux){
                    arrayAux.push(textAux)
                    textAux = ""
                }
                console.log(arrayAux)
            }else{
                console.log("inserte un texto o separador")
            }
        }

        //arregloCaracteres("lorem lorem lorum"," ");

        // Programa una función que repita un texto X veces, pe. miFuncion('Hola Mundo', 3) devolverá Hola Mundo Hola Mundo Hola Mundo.

        const repetirTexto = function (text,n) {
            if(typeof(text) == "string" && text){
                textAux = "";
                for(let i = 0; i<n ; i++){
                    textAux = textAux + " " + text;
                }
                console.log(textAux)

            }else{
                console.log("inserte un texto no vacio")
            }  
        }

        //repetirTexto("repetir",3)


        // Programa una función que invierta las palabras de una cadena de texto, pe. miFuncion("Hola Mundo") devolverá "odnuM aloH".

        // split , reverse , join
        const operacionRevertirCadena = (text)=> {
            let auxText = "";
            for(let i=text.length-1;i>-1;i--) auxText= auxText +text[i];
            console.log(auxText);
        }

        const revertir2Cadena = (text) => !text ? console.warn("insertar texto"): console.log(text.split("").reverse().join(""));

        const revertirCadena = (text)=> text ? (operacionRevertirCadena(text)):(console.warn("insertar cadena"));

        //revertir2Cadena("hola mundo")

        // Programa una función para contar el número de veces que se repite una palabra en un texto largo, pe. miFuncion("hola mundo adios mundo", "mundo") devolverá 2.

        const operacionContarRepeticiones = (text = "",search) => {
            let arrayText = text.split(" ");
            let contadorAux = 0;
            arrayText.forEach(e => {
                if(e === search) contadorAux++;
            });
            console.log(contadorAux);
        }

        //operacionContarRepeticiones("Programa una función que valide si una palabra o frase dada, es un palíndromo ( que se lee igual en un sentido que en otro), pe. mifuncion devolverá true. función","que")



        // Programa una función que valide si una palabra o frase dada, es un palíndromo (que se lee igual en un sentido que en otro), pe. mifuncion("Salas") devolverá true.

        const palindromoString = (text="") => { 
            text = text.toLowerCase();
            if((text.split("").reverse().join("") === text)) return true
            else return false
        }

       //console.log(palindromoString("oso baboso"));


        // Programa una función que elimine cierto patrón de caracteres de un texto dado, pe. miFuncion("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz") devolverá  "1, 2, 3, 4 y 5.

        const deleteString = (text="",deleteText="") =>{
            let aux = 0;
            let textAux = text;
            while(aux !== -1){
                aux = textAux.indexOf(deleteText);
                textAux =textAux.split("");
                textAux.splice(aux,deleteText.length);
                textAux =textAux.join("");
                aux = textAux.indexOf(deleteText);
            }
            console.log(textAux);
        }

        const deleteString2 = (text="",deleteText="")=>{
            console.log(text.replace(new RegExp(deleteText,"ig"),""))
        }
        //deleteString("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz");
        //deleteString2("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz");

        // Programa una función que obtenga un numero aleatorio entre 501 y 600.
        const randomEntre = (a=undefined,b=undefined) => {
            if(a &&b){
                console.log(Math.round( a + ((((Math.random()*1000))-1)*(b-a)/999)));
            }else{
                console.warn("rangos")
            }
        }

        //randomEntre(501,600)

        // Programa una función que reciba un número y evalúe si es capicúa o no (que se lee igual en un sentido que en otro), pe. miFuncion(2002) devolverá true.

        const verificarCapicua = (numero) => {
            let auxCapicua = 0;
            let auxnumero = numero;
            for(let i=numero.toString().length;i>-1;i--){
                auxCapicua = auxCapicua + Math.floor(auxnumero/Math.pow(10,i-1))*Math.pow(10,numero.toString().length-i);
                auxnumero = auxnumero%Math.pow(10,i-1);
            }
            return numero === auxCapicua ? true : false;
        }

        const verificarCapicua2 = (numero) => {
            let stringNumero = numero.toString();
            let reverserNumero = stringNumero.split("").reverse().join("");
            return stringNumero===reverserNumero? true : false;
        }

        //console.log(verificarCapicua(159951));
        //console.log(verificarCapicua2(159951));

        // Programa una función que calcule el factorial de un número (El factorial de un entero positivo n, se define como el producto de todos los números enteros positivos desde 1 hasta n), pe. miFuncion(5) devolverá 120.

        const factorialN = (n) => {
            let result = 1;
            for(let i=1;i<n+1;i++){
                result = result*i;
            }
            console.log(result);
        }

        //factorialN(5);      

        //12) Programa una función que determine si un número es primo (aquel que solo es divisible por sí mismo y 1) o no, pe. miFuncion(7) devolverá true.

        const esPrimo = (n) =>{
            let aux = 0;
            for (let index = 1; index < n+1; index++) {
                if(n%index === 0) aux++;
                if(aux>2) break;
            }
            return aux>2?false:true;
        }
        //console.log(esPrimo(42));

        //13) Programa una función que determine si un número es par o impar, pe. miFuncion(29) devolverá Impar.

        const esPar = (n) => n%2===0?"Es par":"Es impar";

        // console.log(esPar(-2));

        //14) Programa una función para convertir grados Celsius a Fahrenheit y viceversa, pe. miFuncion(0,"C") devolverá 32°F.

        const convertirGrados = (n,G) => {
            G = G.toLowerCase();
            switch (G) {
                case "c":
                    console.log(n*10);
                    break;
                case "f":
                    console.log(n/10);
                    break;
                default:
                    console.log("No se reconocio");
                    break;
            }
        } 

        //convertirGrados(5,"C")

        // 15) Programa una función para convertir números de base binaria a decimal y viceversa, pe. miFuncion(100,2) devolverá 4 base 10.

        const binarioToDecimal = (n) => {
            let digitos = n.toString().length;
            let result = 0;
            for(let i=0;i<digitos;i++){
                result = result + Math.floor(n/Math.pow(10,digitos-1-i)) * Math.pow(2,digitos-1-i);
                n = n%Math.pow(10,digitos-1-i);
            }
            return result;
        }

        //console.log(binarioToDecimal(1101001));

        const decimalToBinario = (n) => {
            let result = "";
            while(n > 1){
                result = result + n%2;
                n = Math.floor(n/2);
            }
            result = result + n%2;
            result.split("").reverse().join("");
            return Number(result);
        }

        //console.log(decimalToBinario(105));


        // 16) Programa una función que devuelva el monto final después de aplicar un descuento a una cantidad dada, pe. miFuncion(1000, 20) devolverá 800.

        const aplicasDescuento = (n,d) => n*(100-d)/100;
        
        //console.log(aplicasDescuento(10,30));

        // 17) Programa una función que dada una fecha válida determine cuantos años han pasado hasta el día de hoy, pe. miFuncion(new Date(1984,4,23)) devolverá 35 años (en 2020).

        function calcularAnios(fecha) {
            let hoy = new Date();
            let anios = hoy.getFullYear() - fecha.getFullYear();

            // Ajustar si aún no ha pasado el cumpleaños este año
            if (
                hoy.getMonth() < fecha.getMonth() || 
                (hoy.getMonth() === fecha.getMonth() && hoy.getDate() < fecha.getDate())
            ) {
                anios--;
            }

            return anios;
        }

        // Ejemplo de uso
        //console.log(calcularAnios(new Date(1984, 4, 23))); // Devuelve 39 si estamos en 2024

        // 18) Programa una función que dada una cadena de texto cuente el número de vocales y consonantes, pe. miFuncion("Hola Mundo") devuelva Vocales: 4, Consonantes: 5.

        const contarVocalesConsonantes = (text)=>{
            let countVocales = 0,
            countConsonantes = 0;
            let auxExpReg1 = /[a-z]/i;
            let auxExpReg2 = /a|e|i|o|u/i;
            let arrayText = text.split("");
            arrayText.forEach(function(e) {
                if(auxExpReg2.test(e))  {
                    countVocales++;
                }
                else{
                    if(auxExpReg1.test(e)) countConsonantes++;
                }
            })
            return `Vocales: ${countVocales} - Consonantes: ${countConsonantes}`;
        }

        //console.log(contarVocalesConsonantes("Hola @Mundo"));

        // 19) Programa una función que valide que un texto sea un nombre válido, pe. miFuncion("Jonathan MirCha") devolverá verdadero.

        const detectarNombre = (text) => {
            let auxExpReg = /^[a-zÁÉÍÓÚÜÑ ']+$/i;
            return auxExpReg.test(text);
        }
        
        //console.log(detectarNombre("Jona%t3han MirCha"));
        //console.log(detectarNombre("joHn Kevin"));

        //20) Programa una función que valide que un texto sea un email válido, pe. miFuncion("jonmircha@gmail.com") devolverá verdadero.

        const detectarEmail = (text) => {
            let auxExpReg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
            return auxExpReg.test(text);
        }
        
        //console.log(detectarEmail("Jona%@outk.xd"));

        // 21) Programa una función que dado un array numérico devuelve otro array con los números elevados al cuadrado, pe. mi_funcion([1, 4, 5]) devolverá [1, 16, 25].

        const elevarNumero = (arrayNumbers) => {
            for(let i=0; i<arrayNumbers.length;i++) arrayNumbers[i] = Math.pow(arrayNumbers[i],2);
            return arrayNumbers;
        }

        const elevarNumero2 = (arrayNumbers) => {
            let arrayAux = arrayNumbers.map(n=>n*n);
            return arrayAux;
        }

        //let arrayXd = [2, 4, 5];
        //console.log(elevarNumero([2, 4, 5]));
        //console.log((arrayXd));

        //22) Programa una función que dado un array devuelva el número mas alto y el más bajo de dicho array, pe. miFuncion([1, 4, 5, 99, -60]) devolverá [99, -60].

        const mayorMenorNumber = (arrayNumbers) => {
            arrayNumbers.sort(function (a,b) {
                return a-b;
            });
            return `El menor es ${arrayNumbers[0]} y el mayor es ${arrayNumbers[arrayNumbers.length-1]}`;
        }

        //console.log(mayorMenorNumber([1, 4, 500, 99, -60]));
        //console.log(Math.max(...[1, 4, 50, 99, -60]))
        //console.log(Math.min(...[1, 4, 50, 99, -60]))

        //23) Programa una función que dado un array de números devuelva un objeto con 2 arreglos en el primero almacena los números pares y en el segundo los impares, pe. miFuncion([1,2,3,4,5,6,7,8,9,0]) devolverá {pares: [2,4,6,8,0], impares: [1,3,5,7,9]}.

        const paresImpares = (arrayNumbers) => {
            let arrayPar = [], arrayImpar = [];
            for(let n of arrayNumbers){
                if(n%2===0) arrayPar.push(n);
                else arrayImpar.push(n);
            }

            console.log(`Arreglo Par: ${arrayPar} y Arreglo impar: ${arrayImpar}`);
        }
        const paresImpares2 = (arrayNumber) => `Pares: ${arrayNumber.filter(n => n%2===0)} e Impares: ${arrayNumber.filter(n=> n%2!==0)}`;

        //paresImpares([1,2,3,4,5,6,7,8,9,0]);
        //console.log([1,2,3,4,5,6,7,8,9,0].filter(n=> n%2===0));
        //console.log([1,2,3,4,5,6,7,8,9,0].filter(n=> n%2!==0));
        //console.log(paresImpares2([1,2,3,4,5,6,7,8,9,0]));

        //24) Programa una función que dado un arreglo de números devuelva un objeto con dos arreglos, el primero tendrá los numeros ordenados en forma ascendente y el segundo de forma descendiente, pe. miFuncion([7, 5,7,8,6]) devolverá { asc: [5,6,7,7,8], desc: [8,7,7,6,5] }.

        const ordenadosArray = (arrayNumber) => {
            let objetOrdenado = {};
            objetOrdenado.asc = [...arrayNumber].sort((a,b)=>{
                return a-b;
            });
            objetOrdenado.des = [...arrayNumber].sort(function(a,b){
                return b-a;
            });
            console.log(objetOrdenado);
        }

        //ordenadosArray([7, 5,7,8,6]);

        //25) Programa una función que dado un arreglo de elementos, elimine los duplicados, pe. miFuncion(["x", 10, "x", 2, "10", 10, true, true]) devolverá ["x", 10, 2, "10", true].

        const deleteRepeat = (arrayNumber)=>{
            let auxArray = [];
            for(number of arrayNumber){
                if(auxArray.indexOf(number)===-1) auxArray.push(number);
            }
            return auxArray;
        }

        const deleteRepeat2 = (arrayNumber)=> arrayNumber.filter((n,index,arr)=> arr.indexOf(n) === index);

        const deleteRepeat3 = (arrayNumber) => [...new Set(arrayNumber)]; 

        //console.log(deleteRepeat(["x", 10, "x", 2, "10", 10, true, true]));
        //console.log(deleteRepeat2(["x", 10, "x", 2, "10", 10, true, true]));
        //console.log(deleteRepeat3(["x", 10, "x", 2, "10", 10, true, true]));

        //26) Programa una función que dado un arreglo de números obtenga el promedio, pe. promedio([9,8,7,6,5,4,3,2,1,0]) devolverá 4.5.

        const promedioArray = (arrayNumber) => {
            let auxSum = 0;
            for(number of arrayNumber) auxSum+=number;
            return auxSum/arrayNumber.length;
        }

        //??????  const promedioArray2 = (arrayNumber) =>{
        //    arrayNumber.reduce((total, num , index , arr)=>{
        //        total+=num;
        //        if(index===arr.length-1) {
        //            return arr;
        //        }
        //        else{
        //            return total;
        //        }
        //    }) 
        //}

        //console.log(promedioArray([9,8,7,6,5,4,3,2,1,0]));
        //console.log(promedioArray2([9,8,7,6,5,4,3,2,1,0]));

        //27) Programa una clase llamada Pelicula.

        //La clase recibirá un objeto al momento de instanciarse con los siguentes datos: id de la película en IMDB, titulo, director, año de estreno, país o países de origen,géneros y calificación en IMBD.
        //Todos los datos del objeto son obligatorios. **
        //Valida que el id IMDB tenga 9 caracteres, los primeros 2 sean letras y los 
        //    7 restantes números.
        //Valida que el título no rebase los 100 caracteres.
        //Valida que el director no rebase los 50 caracteres.
        //Valida que el año de estreno sea un número entero de 4 dígitos.
        //Valida que la calificación sea un número entre 0 y 10 pudiendo ser 
        //    decimal de una posición.
        //Crea un método estático que devuelva los géneros aceptados*.
        //Valida que el país o paises sea introducidos en forma de arreglo.
        //Valida que los géneros sean introducidos en forma de arreglo.
        //Valida que los géneros introducidos esten dentro de los géneros aceptados*.
        //Crea un método que devuelva toda la ficha técnica de la película.
        //Apartir de un arreglo con la información de 3 películas genera 3 
        //instancias de la clase de forma automatizada e imprime la ficha técnica 
        //de cada película.

        //Géneros Aceptados: Action, Adult, Adventure, Animation, Biography, Comedy, Crime, Documentary ,Drama, Family, Fantasy, Film Noir, Game-Show, History, Horror, Musical, Music, Mystery, News, Reality-TV, Romance, Sci-Fi, Short, Sport, Talk-Show, Thriller, War, Western.

        class Pelicula{
            constructor(id,titulo,director,anio,pais,genero,calificacion){
                // ID
                if(!id) throw new Error("Insertar ID");
                this.id = id;
                this.validarID(id)
                
                // Titulo
                if(!titulo) throw new Error("Insertar titulo");
                let validadorTitulo = /^.{0,100}$/i;
                this.titulo = titulo;
                if(!validadorTitulo.test(this.titulo)) throw new Error("Titulo muy largo, max. 100 caracteres");

                // Director
                if(!director) throw new Error("Insertar director");
                let validadorDirector= /^[a-z ]{0,50}$/i;
                this.director = director;
                if(!validadorDirector.test(this.director)) throw new Error("Nombre de director muy largo o incorrecto, max. 50 caracteres");

                // Año
                if(!anio) throw new Error("Insertar año");
                this.anio = anio;
                let validadorAnio = /^[0-9]{4}$/i;
                if(!validadorAnio.test(anio)) throw new Error("Año invalido");

                // Pais
                if(!pais) throw new Error("Insertar pais");
                this.pais = pais;
                if(!Array.isArray(this.pais)) throw new Error("Los paises no son un arreglo");

                //Genero
                if(!genero) throw new Error("Insertar genero");
                const generosAceptados = ["action", "adult", "adventure", "animation", "biography", "comedy", "crime", "documentary", "drama", "family", "Fantasy", "Film Noir", "Game-Show", "History", "Horror", "Musical", "Music", "mystery", "News", "reality-tv", "romance", "Sci-Fi", "short", "sport", "talk-Show", "Thriller", "War", "Western" ];
                this.genero = genero;
                if(!Array.isArray(this.genero)) throw new Error("Los generos no son un arreglo");
                this.genero.map(
                    function(n){
                        if(generosAceptados.indexOf(n.toLowerCase())===-1){
                            throw new Error(`El Genero: ${n} es invalido; para ver generos consulte con Pelicula.generos`) 
                        }
                    }
                );

                // Calificacion
                if(!calificacion && !calificacion===0) throw new Error("Insertar calificacion");
                let validadorCalificacion = /^(10|[0-9](\.[0-9]{1,2})?)$/;
                this.calificacion = calificacion;
                if(!validadorCalificacion.test(this.calificacion)) throw new Error("Puntuacion invalido");
            }

            validarID(id){
                let validadorID = /^[a-z]{2}[0-9]{7}$/i;
                if(!validadorID.test(id)) throw new Error("IMDB: Debe tener 2  letras y 7  números");
            }

            static generos = function() {
                console.warn("Generos aceptados: Action, Adult, Adventure, Animation, Biography, Comedy, Crime, Documentary ,Drama, Family, Fantasy, Film Noir, Game-Show, History, Horror, Musical, Music, Mystery, News, Reality-TV, Romance, Sci-Fi, Short, Sport, Talk-Show, Thriller, War, Western")
            }

            fichatecnica = function () {
                return {
                    id:this.id,
                    titulo:this.titulo,
                    director:this.director,
                    anio:this.anio,
                    pais:this.pais,
                    genero:this.genero,
                    calificacion:this.calificacion
                }
            }
        }
        
        const generarFichasTecnicas = function(arrayPelis) {
            for(peli of arrayPelis){
                let aux = new Pelicula(...peli);
                console.log(aux.fichatecnica());
            }
        }

        //let aux = new Pelicula("AA1234567","Titulo 111","Pedro marco",2223,["pais"],["Reality-TV","Biography"],8);
        //console.log(aux.fichatecnica());

        //let array1= ["AA1234567","Titulo 111","Pedro marco",2223,["pais"],["Reality-TV",//"Biography"],8],
        //array2 = ["bb1234567","Titulo 222","Pedro marco",2223,["pais"],["Reality-TV",//"Biography"],8];
        //array3 = ["CC1234567","Titulo 333","Pedro marco",2223,["pais"],["Reality-TV",//"Biography"],8];
        //generarFichasTecnicas([array1,array2,array3]);

    </script>  

    <script>
        // async

        //setTimeout(()=>{
        //    clearInterval(timer);
        //},3100);

        //let timer = setInterval(()=>{
        //    console.log("322");
        //},1000);

    
        function cuadroPromise(valor){
           if (typeof valor !== "number") return Promise.reject("Valor no aceptado")
           return new Promise((resolve,reject)=>{
               setTimeout(()=>{
                   resolve(
                       {
                           valor,
                           resultado: valor *valor
                       }
                   );
               }, 0 | Math.random()*1500)
           });
        }

        // Promise
        //cuadroPromise(2)
        //.then(e=>{
        //    //console.log("start promise");
        //    //console.log(`Datos ${e.valor} y ${e.resultado}`);
        //    return cuadroPromise(3);
        //})
        //.then(e=>{
        //    //console.log(`Datos ${e.valor} y ${e.resultado}`);
        //    return cuadroPromise(4);
        //})
        //.then(e=>{
        //    //console.log(`Datos ${e.valor} y ${e.resultado}`);
        //})
        //.catch(e=> console.error(e));

        async function functionAsincrona() {
            try {
                console.log("Start");

                let obj1 = await cuadroPromise(2    );
                console.log(`Datos ${obj1.valor} y ${obj1.resultado}`);

                let obj2 = await cuadroPromise(obj1.resultado);
                console.log(`Datos ${obj2.valor} y ${obj2.resultado}`);

                let obj3 = await cuadroPromise(obj2.resultado);
                console.log(`Datos ${obj3.valor} y ${obj3.resultado}`);

                console.log("End");

            } catch (e) {
                
            }
        }

        //functionAsincrona();

        const functionAsincrona2 = async () => {
            try {
                console.log("Start");

                let obj1 = await cuadroPromise(3);
                console.log(`Datos ${obj1.valor} y ${obj1.resultado}`);

                let obj2 = await cuadroPromise(obj1.resultado);
                console.log(`Datos ${obj2.valor} y ${obj2.resultado}`);

                let obj3 = await cuadroPromise(obj2.resultado);
                console.log(`Datos ${obj3.valor} y ${obj3.resultado}`);

                console.log("End");

            } catch (e) {
                console.warn(e)
            }
        }

        //functionAsincrona2();

        let id = Symbol("id");
        let id2 = Symbol("id2");

        //console.log(id === id2)
        //console.log(id)
        //console.log(typeof id)

        //const sett = new Set([1,2,3,4,56,7,8,9,1,23,4,5,6,7,8,9]);

        //console.log(sett);
        //console.log([...sett][1]);
        //
        //sett.delete(56);
        //console.log(sett.keys);

        //console.log(sett.has(56));

        //sett.clear();
        //console.log(sett);


        
    </script>

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>


    <section class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0 d-flex justify-content-center w-100">
                  <li class="nav-item">
                    <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-4" href="#">Link</a>
                  </li>
                  <li class="nav-item  content-sub-menu">
                    <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu w-100 content-mega-menu px-3">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav row w-100">
                                    <li class="nav-item col-4">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item col-4">
                                        <a class="nav-link" href="#">Features</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item col-4">
                                        <a class="nav-link" href="#">Pricing</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled px-4" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0 d-flex justify-content-center w-100">
                  <li class="nav-item">
                    <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-4" href="#">Link</a>
                  </li>
                  <li class="nav-item  content-sub-menu">
                    <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu w-100 content-mega-menu px-3">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav row w-100">
                                    <li class="nav-item col-4">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item col-4">
                                        <a class="nav-link" href="#">Features</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item col-4">
                                        <a class="nav-link" href="#">Pricing</a>
                                        <ul class="sub-sub-menu">
                                            <li><a href="#">item1</a></li>
                                            <li><a href="#">item2</a></li>
                                            <li><a href="#">item3</a></li>
                                            <li><a href="#">item4</a></li>
                                            <li><a href="#">item5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled px-4" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </section>

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <script src="./js/index.js" type="module"></script>


    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="container-fluid py-5 wrapper-locales-page">
        <div class="container">
            <div class="row">   
                <div class="col-md-6">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiperTop">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper swiperBottom">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 content-text-locales">
                    <img src="https://monalisaspacusco.com/wp-content/uploads/2024/12/logo_monalisa.webp" alt="logo">
                    <h2 class="mb-3">Nosotros</h2>
                    <p><i class="bi bi-geo-alt"></i>Triunfo Street 374, Office 102</p>
                    <div class="row mb-3">
                        <div class="col-md-auto h3">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="col-md-6 content-horario-locales">
                            <p><strong>Monday - Saturday:</strong></p>  
                            <p>9:00am - 10:00pm</p>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.4338007568906!2d-71.97979370859747!3d-13.516936922653922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd6739cd7f175%3A0x27c9a9082fc6343!2sPlaza%20Mayor%20de%20Cuzco!5e0!3m2!1ses!2spe!4v1740071487394!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div> 
        </div>

    </div>
    <script>
        var swiper = new Swiper(".swiperBottom", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".swiperTop", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="container-fluid wrapper-productos-items">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-primary d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-primary d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-primary d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-primary d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-primary d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-item-producto">
                        <img src="https://monalisaspacusco.com/wp-content/uploads/2025/02/opi-nail.webp" alt="">
                        <div class="text-item-producto">
                            <h3 class="h4">Nail Lacquer</h3>
                            <p><strong>O.P.I</strong></p>
                            <p>40 mL</p>
                        </div>
                        <a href="#" class="btn btn-whatsapp d-block"><i class="bi bi-whatsapp"></i> Consular Precio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="cotainer-fluid wrapper-galley-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-2.jpg" class="glightbox" data-gallery="gallery1">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </a>
                </div>
                <div class="col-lg-6 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-3.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </a>
                </div>
                <div class="col-lg-6 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-12 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 px-1 py-1">
                    <a href="https://swiperjs.com/demos/images/nature-1.jpg" class="glightbox" data-gallery="gallery2">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>


    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="container-fluid">
        <div class="container">
            <div class="row position-relative wrapper-comments-page">
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques. The shop is always clean and well-maintained, and they take hygiene seriously, which is especially important these days. I leave feeling refreshed and confident after every visit. Highly recommended! I leave feeling refreshed and confident after every visit. Highly recommended!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques. The shop is always clean and well-maintained, and they take hygiene seriously, which is especially important these days. I leave feeling refreshed and confident after every visit. Highly recommended! I leave feeling refreshed and confident after every visit. Highly recommended! The shop is always clean and well-maintained, and they take hygiene seriously, which is especially important these days. I leave feeling refreshed and confident after every visit. Highly recommended! I leave feeling refreshed and confident after every visit. Highly recommended!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques. The shop is always clean and well-maintained, and they take hygiene seriously, which is especially important these days. I leave feeling refreshed and confident after every visit. Highly recommended!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques. The shop is always clean and well-maintained, and they take hygiene seriously, which is especially important these days. I leave feeling refreshed and confident after every visit. Highly recommended! I leave feeling refreshed and confident after every visit. Highly recommended! I leave feeling refreshed and confident after every visit. Highly recommended!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <p>I've been going to this barbershop for years, and I wouldn't trust anyone else with my hair. The barbers are skilled and knowledgeable, and they always keep up with the latest trends and techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const arrayComments = document.querySelectorAll(".wrapper-comments-page > div");
        document.addEventListener("scroll",()=>{
            let auxW = window.innerWidth;
            let aux = 3;
            if(auxW>768) {
                arrayComments.forEach((item,index)=>{
                    item.style.position = "absolute";
                    if(arrayComments[index-aux]) item.style.top = `calc(${arrayComments[index-aux].scrollHeight}px + 1rem)`;
                    if((index+1)%aux===1) item.style.left = `0%`;
                    if((index+1)%aux===2) item.style.left = `${100/3}%`;
                    if((index+1)%aux===0) item.style.left = `${100/3*2}%`;
                });
            }
            else{
                arrayComments.forEach((item,index)=>{
                    item.style.position = "relative";
                    item.style.left = `0`;
                    item.style.top = `0`;
                });
            }          
        });
    </script>

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="container-fluid content-svg">
        <img src="./images/bullseye-gradient.svg" alt="">
    </div>

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

    <div class="container-fluid content-svg">
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'><rect fill='#ee5522' width='2000' height='1500'/><defs><radialGradient id='a' gradientUnits='objectBoundingBox'><stop  offset='0' stop-color='#FB3'/><stop  offset='1' stop-color='#ee5522'/></radialGradient><linearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='750' x2='1550' y2='750'><stop  offset='0' stop-color='#f7882b'/><stop  offset='1' stop-color='#ee5522'/></linearGradient><path id='s' fill='url(#b)' d='M1549.2 51.6c-5.4 99.1-20.2 197.6-44.2 293.6c-24.1 96-57.4 189.4-99.3 278.6c-41.9 89.2-92.4 174.1-150.3 253.3c-58 79.2-123.4 152.6-195.1 219c-71.7 66.4-149.6 125.8-232.2 177.2c-82.7 51.4-170.1 94.7-260.7 129.1c-90.6 34.4-184.4 60-279.5 76.3C192.6 1495 96.1 1502 0 1500c96.1-2.1 191.8-13.3 285.4-33.6c93.6-20.2 185-49.5 272.5-87.2c87.6-37.7 171.3-83.8 249.6-137.3c78.4-53.5 151.5-114.5 217.9-181.7c66.5-67.2 126.4-140.7 178.6-218.9c52.3-78.3 96.9-161.4 133-247.9c36.1-86.5 63.8-176.2 82.6-267.6c18.8-91.4 28.6-184.4 29.6-277.4c0.3-27.6 23.2-48.7 50.8-48.4s49.5 21.8 49.2 49.5c0 0.7 0 1.3-0.1 2L1549.2 51.6z'/><g id='g'><use href='#s' transform='scale(0.12) rotate(60)'/><use href='#s' transform='scale(0.2) rotate(10)'/><use href='#s' transform='scale(0.25) rotate(40)'/><use href='#s' transform='scale(0.3) rotate(-20)'/><use href='#s' transform='scale(0.4) rotate(-30)'/><use href='#s' transform='scale(0.5) rotate(20)'/><use href='#s' transform='scale(0.6) rotate(60)'/><use href='#s' transform='scale(0.7) rotate(10)'/><use href='#s' transform='scale(0.835) rotate(-40)'/><use href='#s' transform='scale(0.9) rotate(40)'/><use href='#s' transform='scale(1.05) rotate(25)'/><use href='#s' transform='scale(1.2) rotate(8)'/><use href='#s' transform='scale(1.333) rotate(-60)'/><use href='#s' transform='scale(1.45) rotate(-30)'/><use href='#s' transform='scale(1.6) rotate(10)'/></g></defs><g  transform='translate(1000 0)'><g  transform='translate(0 750)'><circle fill='url(#a)' r='3000'/><g opacity='0.5'><circle fill='url(#a)' r='2000'/><circle fill='url(#a)' r='1800'/><circle fill='url(#a)' r='1700'/><circle fill='url(#a)' r='1651'/><circle fill='url(#a)' r='1450'/><circle fill='url(#a)' r='1250'/><circle fill='url(#a)' r='1175'/><circle fill='url(#a)' r='900'/><circle fill='url(#a)' r='750'/><circle fill='url(#a)' r='500'/><circle fill='url(#a)' r='380'/><circle fill='url(#a)' r='250'/></g><g  transform='rotate(-360 0 0)'><use href='#g' transform='rotate(10)'/><use href='#g' transform='rotate(120)'/><use href='#g' transform='rotate(240)'/></g><circle fill-opacity='0' fill='url(#a)' r='3000'/></g></g></svg>
    </div>

    
    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>


    <div class="container">
        <div class="card border-1 mt-2 rounded-0 d-none" id="wrapper-travellers-cards-clone">
            <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                <h2 class="fw-bold fs-6 mb-0 text-primary">PASSENGER INFORMATION</h2>
            </div>
            <div class="card-body" id-base="item-travellers-card-" id="item-travellers-card-clone">
                <div class="row mb-3 pb-3 border-bottom border-primary">
                    <div class="col-11 fw-bold" id="title-traveller">PASSENGER 1</div>
                    <div class="col-1 d-flex justify-content-end"><a class="btn btn-close buttonFormSearch" id-base="close-traveller-" id="close-traveller-0" id-form="0"></a></div>
                </div>
                <div class="row gy-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-name-" name="travellers-name-0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control rounded-0" base-name="travellers-email-" name="travellers-email-0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Country</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-country-" name="travellers-country-0" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Doc. Type</label>
                        <select type="text" class="form-control rounded-0" base-name="travellers-doc-type-" name="travellers-doc-type-0" required>
                            <option value="value1" selected>Passport</option>
                            <option value="value1">DNI / ID</option>
                            <option value="value1">Driver Licence</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Passport Number</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-doc-" name="travellers-doc-0" required>         
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Date of Birth</label>
                        <input type="text" class="form-control rounded-0" id="datebirthday" base-name="travellers-doc-" name="travellers-doc-0" required>         
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                id="inlineRadio1" value="Male" checked>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Are you a student?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                id="inlineRadio1" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                id="inlineRadio2" value="No" checked>
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Food Restrictions / Allergies?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                id="inlineRadio1" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                id="inlineRadio2" value="No" checked>
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-1 mt-2 rounded-0" id="wrapper-travellers-cards">
            <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                <h2 class="fw-bold fs-6 mb-0 text-primary">PASSENGER INFORMATION</h2>
            </div>
            <div class="card-body" id-base="item-travellers-card-" id="item-travellers-card-0">
                <div class="row mb-3 pb-3 border-bottom border-primary">
                    <div class="col-11 fw-bold" id="title-traveller">PASSENGER 1</div>
                    <div class="col-1 d-flex justify-content-end"><a class="btn btn-close buttonFormSearch" id-base="close-traveller-" id="close-traveller-0" id-form="0"></a></div>
                </div>
                <div class="row gy-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-name-" name="travellers-name-0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control rounded-0" base-name="travellers-email-" name="travellers-email-0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Country</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-country-" name="travellers-country-0" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Doc. Type</label>
                        <select type="text" class="form-control rounded-0" base-name="travellers-doc-type-" name="travellers-doc-type-0" required>
                            <option value="value1" selected>Passport</option>
                            <option value="value1">DNI / ID</option>
                            <option value="value1">Driver Licence</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Passport Number</label>
                        <input type="text" class="form-control rounded-0" base-name="travellers-doc-" name="travellers-doc-0" required>         
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Date of Birth</label>
                        <input type="text" class="form-control rounded-0" id="datebirthday" base-name="travellers-doc-" name="travellers-doc-0" required>         
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                id="inlineRadio1" value="Male" checked>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Are you a student?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                id="inlineRadio1" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                id="inlineRadio2" value="No" checked>
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold w-100">Food Restrictions / Allergies?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                id="inlineRadio1" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                id="inlineRadio2" value="No" checked>
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end my-3">
            <button id="add-traveler" class="btn btn-primary">
                <i class="bi bi-person-plus-fill"></i> Travel
            </button>
        </div>
    </div>
       
    <script>
        //selecionar botones y formulario
        let buttomAddTraveler = document.querySelector("#add-traveler");
        let itemTraveler = document.querySelector("#item-travellers-card-clone");
        let itemInitTraveler = document.querySelector("#item-travellers-card-0");
        let wrapperTraveler = document.querySelector("#wrapper-travellers-cards");

        //variables
        let arrayForms = [itemInitTraveler];
        let valorItemsTraveler = 1;

        // colocar un id a cada campo de un form
        const idFormFields = (form,id)=>{
            let inputClone = form.querySelectorAll("input");
            inputClone.forEach(item=>{
                item.setAttribute("name",item.getAttribute("base-name")+id);
            });
        }
        //actualizar valores
        const updateFormsField = (arrayForm=[])=>{
            arrayForms.forEach((form,index)=>{
                idFormFields(form,index); // actualizar inputs
                form.id = form.getAttribute("id-base") + (index); // actualizar nuevo id al form
                let titleForm = form.querySelector("#title-traveller"); // actualizar titulo del form
                titleForm.textContent = "PASSENGER " + (index+1);
                // Id del buttom close y cerrar
                let buttonClose = form.querySelector(".buttonFormSearch");
                buttonClose.setAttribute("id-form",(index));
                buttonClose.id = buttonClose.getAttribute("id-base") + (index);
            });
        }
        // eliminar un form
        const deleteForm = (id) => {
            let form = document.querySelector("#item-travellers-card-"+id);
            if(form && arrayForms.length>1) {
                form.remove();
                arrayForms.splice(id,1);
                valorItemsTraveler--;
                updateFormsField(arrayForms);
            }
        }

        let buttonClose = itemInitTraveler.querySelector(".buttonFormSearch");
        buttonClose.addEventListener("click",()=>{
            deleteForm(buttonClose.getAttribute("id-form"));
        })
        //agregar formularios
        buttomAddTraveler.addEventListener("click",()=>{
            // clone form y agregar Id
            let auxClone = itemTraveler.cloneNode(true);
            auxClone.id = auxClone.getAttribute("id-base") + valorItemsTraveler;
            // Id del buttom close y cerrar
            let buttonClose = auxClone.querySelector(".buttonFormSearch");
            buttonClose.setAttribute("id-form",valorItemsTraveler);
            buttonClose.id = buttonClose.getAttribute("id-base") + valorItemsTraveler;
            buttonClose.addEventListener("click",()=>{
                deleteForm(buttonClose.getAttribute("id-form"));
            })
            //Id de los campos agregados
            idFormFields(auxClone,valorItemsTraveler);
            //titulo del form
            let titleForm = auxClone.querySelector("#title-traveller");
            titleForm.textContent = "PASSENGER " + (valorItemsTraveler+1);
            arrayForms.push(auxClone);
            wrapperTraveler.appendChild(auxClone);
            valorItemsTraveler++;

        });

    </script>



    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

</body>
</html>