export default class Funcionario{
    constructor(nome, salarioBruto, imposto){
        this.nome = nome;
        this.salarioBruto = parseFloat(salarioBruto);
        this.imposto = parseFloat(imposto);
    }

    calcularSalarioLiquido(){
        return this.salarioBruto - this.imposto;
    }

    aumentarSalario(taxaDeAumento){
        this.salarioBruto += this.salarioBruto*taxaDeAumento/100;
    }

    toString(){
        return `${this.nome}, $${this.calcularSalarioLiquido()}`;
    }
}