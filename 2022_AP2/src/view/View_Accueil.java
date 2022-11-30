package view;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.SQLException;
import java.awt.event.ActionEvent;

public class View_Accueil {

	private JFrame frame;

	/**
	 * Launch the application.
	 */

	/**
	 * Create the application.
	 */
	public View_Accueil() {
		initialize();
		frame.setVisible(true);
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(113, 100, 450, 354);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JButton btnNewButton = new JButton("EMPRUNTER UN LIVRE");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				View_Emprunter E = new View_Emprunter();
				E.main(null);
			}
		});
		btnNewButton.setBounds(89, 23, 271, 54);
		frame.getContentPane().add(btnNewButton);
		
		JButton btnNewButton_1 = new JButton("RESTITUER UN LIVRE");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Restiture r = new Restiture();
				r.main(null);
				
			}
		});
		btnNewButton_1.setBounds(89, 89, 271, 54);
		frame.getContentPane().add(btnNewButton_1);
		
		JButton btnCrationDadherent = new JButton("Espace Adhérent");
		btnCrationDadherent.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				View_Livre l = new View_Livre();
				l.main(null);
			}
		});
		btnCrationDadherent.setBounds(140, 221, 178, 54);
		frame.getContentPane().add(btnCrationDadherent);
		
		JButton btnListeDeLivres = new JButton("Liste de livres disponible");
		btnListeDeLivres.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				lstLivre lst = null;
				try {
					lst = new lstLivre();
				} catch (SQLException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
				}
				lst.main(null);
			}
		});
		btnListeDeLivres.setBounds(89, 155, 274, 54);
		frame.getContentPane().add(btnListeDeLivres);
	}
}
