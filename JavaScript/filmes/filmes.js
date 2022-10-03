//Criar uma função que receba a idade de uma pessoa e diga quais filmes ela pode assistir
//Use como base o seguinte objeto

let filmes = [
    {
        nome: "Deadpool",
        classificacaoEtaria: 18
    },
    {
        nome: "Your Name",
        classificacaoEtaria: 0
    },
    {
        nome: "Kill bill",
        classificacaoEtaria: 18
    },
    {
        nome: "Shrek",
        classificacaoEtaria: 0
    },
    {
        nome: "Matrix",
        classificacaoEtaria: 14
    },
    {
        nome: "Você nem imagina",
        classificacaoEtaria: 12
    },
    {
        nome: "Brilho eterno de uma mente sem lembranças",
        classificacaoEtaria: 14
    },
    {
        nome: "Scott Pilgrim contra o mundo",
        classificacaoEtaria: 12
    },
    {
        nome: "Capitão Fantástico",
        classificacaoEtaria: 14
    },
    {
        nome: "El Camino",
        classificacaoEtaria: 16
    },
    {
        nome: "Parasita",
        classificacaoEtaria: 18
    }
];

function verificarFaixaEtaria(idade){
    return filmes.filter(filme => {
        return filme.classificacaoEtaria >= idade;
    });
}

console.log(verificarFaixaEtaria(18));

// console.log(filmes[0].classificacaoEtaria);

// function verificarFaixaEtaria(filme){
//     if ('classificacaoEtaria' in filme && filme.classificacaoEtaria >= 18){
//         return true;
//     }else{
//         return false;
//     }
// }

// var filtrarFilmes = filmes.filter(verificarFaixaEtaria);

// console.log("Os filmes são \n", filtrarFilmes);