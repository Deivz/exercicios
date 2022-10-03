package entities;

public class Produto {
	private String nome;
	private double preco;
	private int quantidade;
	
	public Produto() {
	}
	
	public Produto(String nome, double preco) {
		super();
		this.nome = nome;
		this.preco = preco;
	}

	public double mostrarTotalEmEstoque() {
		return preco * quantidade;
	}
	
	public void adicionarAoEstoque(int quantidade) {
		this.quantidade += quantidade;
	}
	
	public void removerDoEstoque(int quantidade) {
		this.quantidade -= quantidade;
	}
	
	public String toString() {
		return	nome
				+ ", $"
				+ String.format("%.2f", preco)
				+ ", "
				+ quantidade
				+ " unidades, Total: $"
				+ String.format("%.2f", mostrarTotalEmEstoque());
	}

	public String nome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}

	public double preco() {
		return preco;
	}
	
	public void setPreco(double preco) {
		this.preco = preco;
	}

	public int quantidade() {
		return quantidade;
	}

}
