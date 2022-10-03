import Produto from "./entities/Produto.js";
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

const nome = await perguntar("Nome: ");
const preco = await perguntar("Preço: ");
const produto = new Produto(nome, preco);

produto.adicionarAoEstoque(await perguntar("Quantidade em estoque: "));
console.log("Dados do produto: " + produto.toString());

produto.adicionarAoEstoque(await perguntar("Entre com a quantidade a ser adicionada ao estoque: "));
console.log("Produto adicionado ao estoque: " + produto.toString());

produto.removerDoEstoque(await perguntar("Entre com a quantidade a ser removida do estoque: "));
console.log("Produto removido do estoque: " + produto.toString());