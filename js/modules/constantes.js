export const PI = Math.PI;

let usuario = "john";
let password = "322";

export default function saludar(){
    console.log("hola 322");
}

export class Saludar{
    constructor(valor1){
        this.valor1 = valor1
    }

    saludar(){
        console.log(`hola ${this.valor1}`)
    }
}
