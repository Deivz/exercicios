export default class Produto{
    constructor(nome, preco){
        this.nome = nome;
        this.preco = preco;
        this.quantidade = 0;
    }

    mostrarTotalEmEstoque(){
        return this.preco * this.quantidade;
    }

    adicionarAoEstoque(quantidade){
       this.quantidade += parseInt(quantidade);
    }

    removerDoEstoque(quantidade){
        this.quantidade -= quantidade;
    }

    toString(){
        return this.nome
                + ", $"
                + this.preco
                + ", "
                + this.quantidade
                + " unidades, Total: $"
                + this.mostrarTotalEmEstoque();
    }

}