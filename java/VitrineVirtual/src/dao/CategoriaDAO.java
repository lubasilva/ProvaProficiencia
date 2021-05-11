package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import Model.Categoria;

public class CategoriaDAO {
	
	private final Connection connection;
	
	public CategoriaDAO(Connection connection) {
		this.connection = connection;
	}
	
	public void insert(Categoria categoria) throws SQLException {

			  
			String sql = "insert into categoria values ('"+categoria.getIdCategoria()+"', '"+categoria.getnomeCategoria()+"');";
			PreparedStatement statement = connection.prepareStatement(sql);
			statement.execute();
			connection.close();
		
	}

}
