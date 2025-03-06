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

        //class Pelicula{
        //    constructor(id,titulo,director,anio,pais,genero,calificacion){
        //        // ID
        //        if(!id) throw new Error("Insertar ID");
        //        this.id = id;
        //        this.validarID(id)
        //        
        //        // Titulo
        //        if(!titulo) throw new Error("Insertar titulo");
        //        let validadorTitulo = /^.{0,100}$/i;
        //        this.titulo = titulo;
        //        if(!validadorTitulo.test(this.titulo)) throw new Error("Titulo muy largo, max. 100 caracteres");
//
        //        // Director
        //        if(!director) throw new Error("Insertar director");
        //        let validadorDirector= /^[a-z ]{0,50}$/i;
        //        this.director = director;
        //        if(!validadorDirector.test(this.director)) throw new Error("Nombre de director muy largo o incorrecto, //max. 50 caracteres");
//
        //        // Año
        //        if(!anio) throw new Error("Insertar año");
        //        this.anio = anio;
        //        let validadorAnio = /^[0-9]{4}$/i;
        //        if(!validadorAnio.test(anio)) throw new Error("Año invalido");
//
        //        // Pais
        //        if(!pais) throw new Error("Insertar pais");
        //        this.pais = pais;
        //        if(!Array.isArray(this.pais)) throw new Error("Los paises no son un arreglo");
//
        //        //Genero
        //        if(!genero) throw new Error("Insertar genero");
        //        const generosAceptados = ["action", "adult", "adventure", "animation", "biography", "comedy", "crime", //"documentary", "drama", "family", "Fantasy", "Film Noir", "Game-Show", "History", "Horror", "Musical", //"Music", "mystery", "News", "reality-tv", "romance", "Sci-Fi", "short", "sport", "talk-Show", //"Thriller", "War", "Western" ];
        //        this.genero = genero;
        //        if(!Array.isArray(this.genero)) throw new Error("Los generos no son un arreglo");
        //        this.genero.map(
        //            function(n){
        //                if(generosAceptados.indexOf(n.toLowerCase())===-1){
        //                    throw new Error(`El Genero: ${n} es invalido; para ver generos consulte con Pelicula.//generos`) 
        //                }
        //            }
        //        );
//
        //        // Calificacion
        //        if(!calificacion && !calificacion===0) throw new Error("Insertar calificacion");
        //        let validadorCalificacion = /^(10|[0-9](\.[0-9]{1,2})?)$/;
        //        this.calificacion = calificacion;
        //        if(!validadorCalificacion.test(this.calificacion)) throw new Error("Puntuacion invalido");
        //    }
//
        //    validarID(id){
        //        let validadorID = /^[a-z]{2}[0-9]{7}$/i;
        //        if(!validadorID.test(id)) throw new Error("IMDB: Debe tener 2  letras y 7  números");
        //    }
//
        //    static generos = function() {
        //        console.warn("Generos aceptados: Action, Adult, Adventure, Animation, Biography, Comedy, Crime, //Documentary ,Drama, Family, Fantasy, Film Noir, Game-Show, History, Horror, Musical, Music, Mystery, //News, Reality-TV, Romance, Sci-Fi, Short, Sport, Talk-Show, Thriller, War, Western")
        //    }
//
        //    fichatecnica = function () {
        //        return {
        //            id:this.id,
        //            titulo:this.titulo,
        //            director:this.director,
        //            anio:this.anio,
        //            pais:this.pais,
        //            genero:this.genero,
        //            calificacion:this.calificacion
        //        }
        //    }
        //}
        //
        //const generarFichasTecnicas = function(arrayPelis) {
        //    for(peli of arrayPelis){
        //        let aux = new Pelicula(...peli);
        //        console.log(aux.fichatecnica());
        //    }
        //}

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

    
        //function cuadroPromise(valor){
        //   if (typeof valor !== "number") return Promise.reject("Valor no aceptado")
        //   return new Promise((resolve,reject)=>{
        //       setTimeout(()=>{
        //           resolve(
        //               {
        //                   valor,
        //                   resultado: valor *valor
        //               }
        //           );
        //       }, 0 | Math.random()*1500)
        //   });
        //}

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

        //async function functionAsincrona() {
        //    try {
        //        console.log("Start");
//
        //        let obj1 = await cuadroPromise(2    );
        //        console.log(`Datos ${obj1.valor} y ${obj1.resultado}`);
//
        //        let obj2 = await cuadroPromise(obj1.resultado);
        //        console.log(`Datos ${obj2.valor} y ${obj2.resultado}`);
//
        //        let obj3 = await cuadroPromise(obj2.resultado);
        //        console.log(`Datos ${obj3.valor} y ${obj3.resultado}`);
//
        //        console.log("End");
//
        //    } catch (e) {
        //        
        //    }
        //}

        //functionAsincrona();

        //const functionAsincrona2 = async () => {
        //    try {
        //        console.log("Start");
//
        //        let obj1 = await cuadroPromise(3);
        //        console.log(`Datos ${obj1.valor} y ${obj1.resultado}`);
//
        //        let obj2 = await cuadroPromise(obj1.resultado);
        //        console.log(`Datos ${obj2.valor} y ${obj2.resultado}`);
//
        //        let obj3 = await cuadroPromise(obj2.resultado);
        //        console.log(`Datos ${obj3.valor} y ${obj3.resultado}`);
//
        //        console.log("End");
//
        //    } catch (e) {
        //        console.warn(e)
        //    }
        //}

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

        // map()?

        //const objUsuarios = {};
        //let arrayValues = ["1","2","3","4"];
//
        //console.log(objUsuarios);
//
        //arrayValues.forEach((value,index)=>{
        //    objUsuarios[`id_${index}`]=value;
        //});
//
        //console.log(objUsuarios);
//
//
        //const objUsuarios2 = {
        //    [`id_${Math.round(Math.random()*100)}`]: "Valor aleatorio"
        //};
//
        //console.log(objUsuarios2);

        //

        //this.nombre = "322"
        //console.log(this.nombre)
//
        //const imprimir = function(){
        //    console.log(this.nombre)
        //}
//
        //const obj = {
        //    nombre: "322 322 obj",
        //    imprimir
        //}
//
        //const obj2 = {
        //    nombre: "322 322 obj",
        //    imprimir: ()=>{
        //    console.log(this.nombre)
//
        //    }
        //}
//
        //obj.imprimir();
        //obj2.imprimir();
//
        //function Persona(nombre){
        //    this.nombre = nombre;
//
        //    return function(){
        //        console.log(this.nombre)
        //    }
        //}
//
        //function Persona2(nombre){
        //    this.nombre = nombre;
//
        //    return ()=>{
        //        console.log(this.nombre)
        //    }
        //}
//
        //let prueba = new Persona("no global")
        //prueba();
//
        //let prueba2 = new Persona2("no global")
        //prueba2();

        
       //this.prueba = "global"

       //function saludar(call1,call2){
       //    console.log(`${call1}, ${call2} --- ${this.prueba}`)
       //}

       //saludar();

       //const objeto ={
       //    prueba: " no es global",
       //}

       //saludar.call(objeto,"call-1","call-2")
       //saludar.call(null,"call-1","call-2")
       //saludar.call(objeto)

       //saludar.apply(objeto,["call-1","call-2"])
       //saludar.apply(null,["call-1","call-2"])

        //this.nombre = "global";
//
        //const persona = {
        //    nombre: "local",
        //    saludar: function(){
        //        console.log(this.nombre)
        //    }
        //}
//
        //const persona2 = {
        //   saludar: persona.saludar.bind(this)
        //}
        //persona2.saludar();
//
        //const persona3 = {
        //   saludar: persona.saludar.bind(persona)
        //}
        //persona3.saludar();



        const objetoPruebe = {
           cadena: "local",
           numero: 15,
           booleano: false,
           array: ["1","2","3"],
           vacio: null,
           objeto:{
            obj1: 1,
            obj2: "local"
           }
        }

        console.log(objetoPruebe);

        //console.log(JSON);
        //console.log(JSON.parse("{}"));
        //console.log(JSON.parse("[1,2,3]"));
        //console.log(JSON.parse("true"));
        //console.log(JSON.parse("25"));

        //console.log(JSON.parse("undefinded"));
        //console.log(JSON.parse("'hi'"));
        
        //console.log(JSON.parse('{"cadena":"local","numero":15,"booleano":false,"array":["1","2","3"],"vacio":null,//"objeto":{"obj1":1,"obj2":"local"}}'));
//
        //console.log(JSON.stringify({}));
        //console.log(JSON.stringify([1,2,3]));
        //console.log(JSON.stringify(true));
//
        //console.log(JSON.stringify(objetoPruebe));

    </script>

    <?php include __DIR__ . '/part/dom.php'; ?>


    <div class="container py-5"></div>  
    <div class="container py-5"></div>    
    <div class="container py-5"></div>

        

    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="container py-5"></div>

</body>
</html>