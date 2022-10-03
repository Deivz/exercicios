using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Estoque.Entities
{
    internal class Produto
    {
        private string nome { get; set; }
        private double preco { get; set; }
        private int quantidade;

        public Produto()
        {

        }

        public Produto(string nome, double preco)
        {
            this.nome = nome;
            this.preco = preco;
        }

        public double mostrarTotalEmEstoque()
        {
            return preco * quantidade;
        }

        public void adicionarAoEstoque(int quantidade)
        {
            this.quantidade += quantidade;
        }

        public void removerDoEstoque(int quantidade)
        {
            this.quantidade -= quantidade;
        }

        public override string ToString()
        {
            return nome
                + ", $"
                + string.Format("{0}", preco)
                + ", "
                + quantidade
                + " unidades, Total: $"
                + string.Format("{0}", mostrarTotalEmEstoque());
        }
    }
}
