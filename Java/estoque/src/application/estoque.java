package application;

import java.util.Scanner;

import entities.Produto;

public class estoque {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Entre com os dados do produto: ");
		
		System.out.println("Nome: ");
		String nome = sc.nextLine();
		
		System.out.println("Preço: ");
		double preco = sc.nextDouble();
		
		Produto produto = new Produto(nome, preco);
		
		System.out.println("Quantidade em estoque: ");
		produto.adicionarAoEstoque(sc.nextInt());
		
		System.out.println("Dados do produto: " + produto);
		
		System.out.println("Entre com a quantidade a ser adicionada ao estoque: ");
		produto.adicionarAoEstoque(sc.nextInt());
		
		System.out.println("Produto adicionado ao estoque: " + produto);
		
		System.out.println("Entre com a quantidade a ser removida do estoque: ");
		produto.removerDoEstoque(sc.nextInt());
		
		System.out.println("Produto removido do estoque: " + produto);
		
		sc.close();
	}

}