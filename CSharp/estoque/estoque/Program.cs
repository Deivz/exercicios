using Estoque.Entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Estoque
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Entre com os dados do produto: ");
            
            Console.WriteLine("Nome: ");
            string nome = Console.ReadLine();
            
            Console.WriteLine("Preço: ");
            double preco = Convert.ToDouble(Console.ReadLine());

            Produto produto = new Produto(nome, preco);

            Console.WriteLine("Quantidade em estoque: ");
            produto.adicionarAoEstoque(Convert.ToInt32(Console.ReadLine()));

            Console.WriteLine("Dados do produto: " + produto.ToString());

            Console.WriteLine("Entre com a quantidade a ser adicionada ao estoque: ");
            produto.adicionarAoEstoque(Convert.ToInt32(Console.ReadLine()));

            Console.WriteLine("Produto adicionado ao estoque: " + produto.ToString());

            Console.WriteLine("Entre com a quantidade a ser removida do estoque: ");
            produto.removerDoEstoque(Convert.ToInt32(Console.ReadLine()));

            Console.WriteLine("Produto removido do estoque: " + produto.ToString());

            Console.ReadLine();
        }
    }
}
