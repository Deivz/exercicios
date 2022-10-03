package application;

import java.util.Scanner;

import entities.Retangulo;

public class programa {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Digite o valor da altura do retângulo: ");
		double altura = sc.nextDouble();

		System.out.println("Digite o valor da largura do retângulo: ");
		double largura = sc.nextDouble();
		
		Retangulo retangulo = new Retangulo(altura, largura);
		
		System.out.println(retangulo);
	}

}
