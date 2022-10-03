using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CalculoRetangulo.entities
{
    internal class Retangulo
    {
        private double altura;
        private double largura;

        public Retangulo(double altura, double largura)
        {
            this.altura = altura;
            this.largura = largura;
        }

        public double calcularArea()
        {
            return altura * largura;
        }

        public double calcularDiagonal()
        {
            return Math.Sqrt(Math.Pow(altura, 2) + Math.Pow(largura, 2));
        }

        public double calcularPerimetro()
        {
            return 2 * (altura + largura);
        }

        public override string ToString()
        {
            return "Area: " + calcularArea().ToString("N2") + "\n"
               + "Perímetro: " + calcularPerimetro().ToString("N2") + "\n"
               + "Diagonal: " + calcularDiagonal().ToString("N2") + "\n";
        }
    }
}
