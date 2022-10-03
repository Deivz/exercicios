import Triangulo from "./models/Triangulo.js";
import * as readline from 'node:readline';

async function perguntar(pergunta) {

    const rl = readline.createInterface({
        input: process.stdin,
        output: process.stdout
    });

    return new Promise(resolve => {
        rl.question(pergunta, (resposta) => {
            rl.close();
            resolve(resposta);
        })
    });
}

console.log("Digite os tamanhos dos lados do triângulo X: ");
const aX = await perguntar("");
const bX = await perguntar("");
const cX = await perguntar("");
const trianguloX = new Triangulo(aX, bX, cX);

console.log("Digite os tamanhos dos lados do triângulo X: ");
const aY = await perguntar("");
const bY = await perguntar("");
const cY = await perguntar("");
const trianguloY = new Triangulo(aY, bY, cY);

console.log("A área do triângulo X é: " + trianguloX.calcularArea());
console.log("A área do triângulo Y é: " + trianguloY.calcularArea());

if (trianguloX > trianguloY){
    console.log("A maior área encontrada foi a do triângulo X.");
}else{
    console.log("A maior área encontrada foi a do triângulo Y.");
}