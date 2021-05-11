package View;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

import Model.Produto;
import dao.Conexao;
import dao.ProdutoDAO;

import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.awt.event.ActionEvent;

public class CadastraProduto {

	private JFrame frame;
	private JTextField textId;
	private JTextField textDescricao;
	private JTextField textPreco;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CadastraProduto window = new CadastraProduto();
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
	public CadastraProduto() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 604, 388);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JLabel LabelId = new JLabel("Id");
		LabelId.setBounds(275, 44, 46, 14);
		frame.getContentPane().add(LabelId);
		
		textId = new JTextField();
		textId.setBounds(235, 71, 86, 20);
		frame.getContentPane().add(textId);
		textId.setColumns(10);
		
		JLabel LabelDescricao = new JLabel("Descricao");
		LabelDescricao.setBounds(254, 121, 46, 14);
		frame.getContentPane().add(LabelDescricao);
		
		textDescricao = new JTextField();
		textDescricao.setBounds(166, 160, 228, 62);
		frame.getContentPane().add(textDescricao);
		textDescricao.setColumns(10);
		
		JLabel LabelPreco = new JLabel("Preco");
		LabelPreco.setBounds(264, 247, 46, 14);
		frame.getContentPane().add(LabelPreco);
		
		textPreco = new JTextField();
		textPreco.setBounds(233, 272, 101, 20);
		frame.getContentPane().add(textPreco);
		textPreco.setColumns(10);
		
		JButton ButtonProduto = new JButton("Cadastrar");
		ButtonProduto.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Produto produto = new Produto(6, "Tenis preto", 4312, "Tenis");
				
				try {
					Connection conexao = new Conexao().getConnection();
					ProdutoDAO produtoDao = new ProdutoDAO(conexao);
					
					produtoDao.insert(produto);
					
				} catch (SQLException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
				}
				
				
			}
		});
		ButtonProduto.setBounds(235, 303, 89, 23);
		frame.getContentPane().add(ButtonProduto);
	}
}
