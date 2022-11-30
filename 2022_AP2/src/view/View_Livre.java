package view;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JLabel;
import com.jgoodies.forms.factories.DefaultComponentFactory;
import javax.swing.JTextField;
import javax.swing.JEditorPane;
import java.awt.Panel;
import javax.swing.JButton;

public class View_Livre {

	private JFrame frame;
	private JTextField textField;
	private JTextField txtListeDesLivres;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					View_Livre window = new View_Livre();
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
	public View_Livre() {
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
		
		JLabel lblEspaceAdherent = DefaultComponentFactory.getInstance().createLabel("ESPACE ADHERENT");
		lblEspaceAdherent.setBounds(155, 12, 136, 15);
		frame.getContentPane().add(lblEspaceAdherent);
		
		JLabel lblNAdherent = DefaultComponentFactory.getInstance().createLabel("N° ADHERENT:");
		lblNAdherent.setBounds(44, 39, 108, 15);
		frame.getContentPane().add(lblNAdherent);
		
		textField = new JTextField();
		textField.setBounds(154, 39, 114, 19);
		frame.getContentPane().add(textField);
		textField.setColumns(10);
		
		JEditorPane editorPane = new JEditorPane();
		editorPane.setBounds(106, 110, 221, 88);
		frame.getContentPane().add(editorPane);
		
		txtListeDesLivres = new JTextField();
		txtListeDesLivres.setText("Liste des livres empruntés:");
		txtListeDesLivres.setBounds(44, 79, 186, 19);
		frame.getContentPane().add(txtListeDesLivres);
		txtListeDesLivres.setColumns(10);
		
		JButton btnRestituer = new JButton("RESTITUER");
		btnRestituer.setBounds(155, 224, 117, 25);
		frame.getContentPane().add(btnRestituer);
	}
}
