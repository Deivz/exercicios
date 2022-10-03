using area_triangulo.entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace area_triangulo
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Digite os tamanhos dos lados do triângulo X: ");
            double aX = Convert.ToDouble(Console.ReadLine());
            double bX = Convert.ToDouble(Console.ReadLine());
            double cX = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Digite os tamanhos dos lados do triângulo Y: ");
            double aY = Convert.ToDouble(Console.ReadLine());
            double bY = Convert.ToDouble(Console.ReadLine());
            double cY = Convert.ToDouble(Console.ReadLine());

            Triangulo trianguloX = new Triangulo(aX, bX, cX);
            Triangulo trianguloY = new Triangulo(aY, bY, cY);

            double areaTrianguloX = trianguloX.calcularArea();
            double areaTrianguloY = trianguloY.calcularArea();

            Console.WriteLine("A área do triângulo X é: " + areaTrianguloX.ToString("N2"));
            Console.WriteLine("A área do triângulo Y é: " + areaTrianguloY.ToString("N2"));

            if(areaTrianguloX > areaTrianguloY)
            {
                Console.WriteLine("A maior área encontrada foi a do triângulo X.");
            }
            else
            {
                Console.WriteLine("A maior área encontrada foi a do triângulo Y.");
            }

            Console.ReadLine();
        }
    }
}
