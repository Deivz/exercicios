export default class Triangulo
{
    constructor(ladoA, ladoB, ladoC){
        this.ladoA = parseFloat(ladoA);
        this.ladoB = parseFloat(ladoB);
        this.ladoC = parseFloat(ladoC);
    }

    calcularArea(){
        const p = (this.ladoA + this.ladoB + this.ladoC)/2;
        return Math.sqrt(p * (p - this.ladoA) * (p - this.ladoB) * (p - this.ladoC));
    }
}