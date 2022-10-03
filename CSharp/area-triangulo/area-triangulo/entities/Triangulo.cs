using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace area_triangulo.entities
{
    internal class Triangulo
    {
        private double ladoA;
        private double ladoB;
        private double ladoC;

        public Triangulo(double ladoA, double ladoB, double ladoC)
        {
            this.ladoA = ladoA;
            this.ladoB = ladoB;
            this.ladoC = ladoC;
        }

        public double calcularArea()
        {
            double p = (ladoA + ladoB + ladoC) / 2;
            return Math.Sqrt(p * (p - ladoA) * (p - ladoB) * (p - ladoC));
        }
    }
}
