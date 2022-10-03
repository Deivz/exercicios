using CalculoRetangulo.entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CalculoRetangulo
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Digite o valor da altura do retângulo: ");
            double altura = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Digite o valor da largura do retângulo: ");
            double largura = Convert.ToInt32(Console.ReadLine());

            Retangulo retangulo = new Retangulo(altura, largura);

            Console.WriteLine(retangulo.ToString());

            Console.ReadLine();
        }
    }
}
