package View;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

import Model.Categoria;
import Model.Produto;
import dao.CategoriaDAO;
import dao.Conexao;
import dao.ProdutoDAO;

import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.SQLException;
import java.awt.event.ActionEvent;

public class CadastraCategoria {

	private JFrame frame;
	private JTextField textIdCategoria;
	private JTextField TextDescricaoCategoria;
	private JButton ButtonSalvarCategoria;
	private JTextField TextFieldNomeCategoria;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CadastraCategoria window = new CadastraCategoria();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public CadastraCategoria() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 450, 300);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JLabel LabelId = new JLabel("Id");
		LabelId.setBounds(83, 44, 46, 14);
		frame.getContentPane().add(LabelId);
		
		textIdCategoria = new JTextField();
		textIdCategoria.setBounds(140, 41, 86, 20);
		frame.getContentPane().add(textIdCategoria);
		textIdCategoria.setColumns(10);
		
		JLabel LabelDescricao = new JLabel("Nome");
		LabelDescricao.setBounds(67, 96, 46, 14);
		frame.getContentPane().add(LabelDescricao);
		
		TextDescricaoCategoria = new JTextField();
		TextDescricaoCategoria.setBounds(140, 148, 247, 20);
		frame.getContentPane().add(TextDescricaoCategoria);
		TextDescricaoCategoria.setColumns(10);
		
		ButtonSalvarCategoria = new JButton("Salvar");
		ButtonSalvarCategoria.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				String idCategoria = textIdCategoria.getText();
				String descricaoCategoria = TextDescricaoCategoria.getText();
				String nomeCategoria = TextFieldNomeCategoria.getText();
				
				
				Categoria categoria = new Categoria(5, "Tenis");
				
				try {
					Connection conexao = new Conexao().getConnection();
					CategoriaDAO categoriaDao = new CategoriaDAO(conexao);
					
					categoriaDao.insert(categoria);
					
				} catch (SQLException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
				}
				
			}
		});
		ButtonSalvarCategoria.setBounds(156, 211, 89, 23);
		frame.getContentPane().add(ButtonSalvarCategoria);
		
		TextFieldNomeCategoria = new JTextField();
		TextFieldNomeCategoria.setBounds(140, 93, 247, 20);
		frame.getContentPane().add(TextFieldNomeCategoria);
		TextFieldNomeCategoria.setColumns(10);
		
		JLabel LabelDescricao_1 = new JLabel("Descricao");
		LabelDescricao_1.setBounds(67, 151, 46, 14);
		frame.getContentPane().add(LabelDescricao_1);
	}
}
