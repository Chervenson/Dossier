package view;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.JLabel;
import com.jgoodies.forms.factories.DefaultComponentFactory;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class View_Emprunter {

	private JFrame frame;
	private JTextField textField;
	private JTextField textField_1;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					View_Emprunter window = new View_Emprunter();
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
	public View_Emprunter() {
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
		
		JButton btnEmprunter = new JButton("EMPRUNTER");
		btnEmprunter.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btnEmprunter.setBounds(156, 142, 136, 38);
		frame.getContentPane().add(btnEmprunter);
		
		JLabel lblEmprunter = DefaultComponentFactory.getInstance().createLabel("EMPRUNTER");
		lblEmprunter.setBounds(156, 12, 136, 15);
		frame.getContentPane().add(lblEmprunter);
		
		JLabel lblNisbnDuLivre = DefaultComponentFactory.getInstance().createLabel("N°ISBN du livre:");
		lblNisbnDuLivre.setBounds(24, 93, 136, 15);
		frame.getContentPane().add(lblNisbnDuLivre);
		
		textField = new JTextField();
		textField.setBounds(168, 91, 151, 19);
		frame.getContentPane().add(textField);
		textField.setColumns(10);
		
		JLabel lblNewJgoodiesLabel = DefaultComponentFactory.getInstance().createLabel("N°Adherent:");
		lblNewJgoodiesLabel.setBounds(24, 51, 136, 15);
		frame.getContentPane().add(lblNewJgoodiesLabel);
		
		textField_1 = new JTextField();
		textField_1.setBounds(166, 49, 151, 19);
		frame.getContentPane().add(textField_1);
		textField_1.setColumns(10);
		
		JButton btnNewButton = new JButton("Valider");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btnNewButton.setBounds(329, 51, 109, 15);
		frame.getContentPane().add(btnNewButton);
	}
}
