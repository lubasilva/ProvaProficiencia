package Model;

public class Categoria {
	
	private int idCategoria;
	private String nomeCategoria;
	private String descricaoCategoria;
	
	public Categoria() {
		
	}
	
	public Categoria (int id, String nomeCategoria) {
		this.idCategoria = id;
		this.nomeCategoria = nomeCategoria;
		
	}
	
	public int getIdCategoria() {
		return idCategoria;
	}
	public void setIdCategoria(int id) {
		this.idCategoria = id;
	}
	public String getNomeCategoria() {
		return nomeCategoria;
	}
	public void setNomeCategoria(String nomeCategoria) {
		this.nomeCategoria = nomeCategoria;
	}
	
	public String getDescricaoCategoria() {
		return descricaoCategoria;
	}
	public void setDescricao(String descricaoCategoria) {
		this.descricaoCategoria = descricaoCategoria;
	}

}
