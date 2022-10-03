package application;

import java.util.Scanner;

import entities.Funcionario;

public class programa {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		System.out.println("Informe o nome do funcionário: ");
		String nome = sc.nextLine();
		
		System.out.println("Informe o salário do funcionário " + nome + ": ");
		double salario = sc.nextDouble();
		
		System.out.println("Informe o imposto correspondente ao salário do funcionário " + nome + ": ");
		double imposto = sc.nextDouble();
		
		Funcionario funcionario = new Funcionario(nome, salario, imposto);
		
		System.out.println("Funcionário: " + funcionario);
		
		System.out.println("Qual a porcentagem do aumento de salário de " + nome + ": ");
		double salarioAumentado = sc.nextDouble();
		funcionario.aumentarSalario(salarioAumentado);
		
		System.out.println("Dados atualizados: " + funcionario);
	}

}
