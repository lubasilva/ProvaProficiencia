package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import Model.Produto;

public class ProdutoDAO {
	
	private final Connection connection;
	
	public ProdutoDAO(Connection connection) {
		this.connection = connection;
	}
	
	public void insert(Produto produto) throws SQLException {

			
			String sql = "insert into produto values ('"+produto.getId()+"', '"+produto.getNomeProduto()+"', '"+produto.getDescricao()+"', "+produto.getPrecoVenda()+", '"+produto.getIdCategoria()+"');";
			PreparedStatement statement = connection.prepareStatement(sql);
			statement.execute();
			connection.close();
		
	}

}
