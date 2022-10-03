package entities;

public class Retangulo {
	
	private double altura;
	private double largura;
	
	public Retangulo(double altura, double largura) {
		this.altura = altura;
		this.largura = largura;
	}
	
	public double calcularArea() {
		return altura * largura;
	}
	
	public double calcularDiagonal() {
		return Math.sqrt(Math.pow(altura, 2) + Math.pow(largura, 2));
	}
	
	public double calcularPerimetro() {
		return 2*(altura + largura);
	}
	
	@Override
	public String toString() {
		return "Area: " +String.format("%.2f", calcularArea()) + "\n"
	               + "Perímetro: " + String.format("%.2f", calcularPerimetro()) + "\n"
	               + "Diagonal: " + String.format("%.2f", calcularDiagonal()) + "\n";
	}
}
