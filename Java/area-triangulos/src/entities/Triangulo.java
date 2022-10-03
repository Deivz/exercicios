package entities;

public class Triangulo {
	double ladoA;
	double ladoB;
	double ladoC;
	
	public Triangulo(double ladoA, double ladoB, double ladoC) {
		this.ladoA = ladoA;
		this.ladoB = ladoB;
		this.ladoC = ladoC;
	}
	
	public double calcularArea() {
		double p = (this.ladoA + this.ladoB + this.ladoC)/2;
		return Math.sqrt(p * (p - this.ladoA) * (p - this.ladoB) * (p - this.ladoC));
	}
}
