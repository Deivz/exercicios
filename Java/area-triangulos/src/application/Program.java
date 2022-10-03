package application;

import java.util.InputMismatchException;
import java.util.Scanner;
import entities.Triangulo;

public class Program {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		try {
			System.out.println("Insira os valores dos tamanhos dos lados do triângulo X: ");
			double aX = sc.nextDouble();
			double bX = sc.nextDouble();
			double cX = sc.nextDouble();
			
			System.out.println("Insira os valores dos tamanhos dos lados do triângulo Y: ");
			double aY = sc.nextDouble();
			double bY = sc.nextDouble();
			double cY = sc.nextDouble();
			
			Triangulo trianguloX = new Triangulo(aX, bX, cX);
			Triangulo trianguloY = new Triangulo(aY, bY, cY);
			
			double areaTrianguloX = trianguloX.calcularArea();
			double areaTrianguloY = trianguloY.calcularArea();
			
			System.out.println("A área do triângulo X é: " + areaTrianguloX);
			System.out.println("A área do triângulo Y é: " + areaTrianguloY);
			
			if (areaTrianguloX > areaTrianguloY) {
				System.out.println("A maior área encontrada é a área do triângulo X.");
			}else {
				System.out.println("A maior área encontrada é a área do triângulo Y.");
			}
		}catch(InputMismatchException e) {
			System.out.println("O valor digitado deve ser um número.");
		}
	
		sc.close();
	}

}
