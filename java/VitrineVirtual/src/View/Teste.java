package View;

import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.JLabel;

public class Teste extends JPanel {
	private JTextField textField;

	/**
	 * Create the panel.
	 */
	public Teste() {
		setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setBounds(182, 45, 46, 14);
		add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setBounds(182, 8, 46, 14);
		add(lblNewLabel_1);
		
		textField = new JTextField();
		textField.setBounds(233, 5, 86, 20);
		add(textField);
		textField.setColumns(10);

	}

}
