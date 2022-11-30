package view;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JLabel;
import com.jgoodies.forms.factories.DefaultComponentFactory;
import javax.swing.JTextField;
import javax.swing.JButton;

public class Restiture {

	private JFrame frame;
	private JTextField textField;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Restiture window = new Restiture();
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
	public Restiture() {
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
		
		JLabel lblRestituer = DefaultComponentFactory.getInstance().createTitle("RESTITUER");
		lblRestituer.setBounds(174, 12, 136, 15);
		frame.getContentPane().add(lblRestituer);
		
		JLabel lblNIsbnDu = DefaultComponentFactory.getInstance().createLabel("N° ISBN du livre:");
		lblNIsbnDu.setBounds(29, 76, 136, 15);
		frame.getContentPane().add(lblNIsbnDu);
		
		textField = new JTextField();
		textField.setBounds(174, 74, 214, 19);
		frame.getContentPane().add(textField);
		textField.setColumns(10);
		
		JButton btnRestituer = new JButton("RENDRE");
		btnRestituer.setBounds(164, 141, 117, 25);
		frame.getContentPane().add(btnRestituer);
	}
}
