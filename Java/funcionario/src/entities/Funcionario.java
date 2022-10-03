package entities;

public class Funcionario {
	
	private String nome;
	private double salarioBruto;
	private double imposto;
	
	public Funcionario(String nome, double salarioBruto, double imposto) {
		this.nome = nome;
		this.salarioBruto = salarioBruto;
		this.imposto = imposto;
	}
	
	public double calcularSalarioLiquido() {
		return salarioBruto - imposto;
	}
	
	public void aumentarSalario(double aumento) {
		salarioBruto += salarioBruto * aumento/100;
	}
	
	@Override
	public String toString() {
		return nome + ", $" + calcularSalarioLiquido();
	}
}
