package Model;

public class Produto extends Categoria {
	private int id;
	private String descricao;
	private double precoVenda;
	private String nomeProduto;

	
	
	public Produto (int id, String descricao, double precoVenda, String nomeProduto) {
		super();
		this.id = id;
		this.descricao = descricao;
		this.precoVenda = precoVenda;
		this.nomeProduto = nomeProduto;
	}
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getDescricao() {
		return descricao;
	}
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	public double getPrecoVenda() {
		return precoVenda;
	}
	public void setPrecoVenda(double precoVenda) {
		this.precoVenda = precoVenda;
	}
	
	
	public String getNomeProduto() {
		return nomeProduto;
	}
	public void setNomeProduto(String nomeProduto) {
		this.nomeProduto = nomeProduto;
	}
	
}
