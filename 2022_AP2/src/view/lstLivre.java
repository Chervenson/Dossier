package view;

import java.awt.EventQueue;
import java.awt.List;
import java.sql.SQLException;

import javax.swing.JFrame;
import javax.swing.JLabel;
import com.jgoodies.forms.factories.DefaultComponentFactory;

import controller.mainMVC;

import javax.swing.JTextField;
import javax.swing.JList;

public class lstLivre {

	private JFrame frame;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					lstLivre window = new lstLivre();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 * @throws SQLException 
	 */
	public lstLivre() throws SQLException {
		mainMVC.getM().getAll();
		initialize();

	}

	/**
	 * Initialize the contents of the frame.²
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 450, 300);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JLabel lblListeDeLivres = DefaultComponentFactory.getInstance().createLabel("Liste de livres");
		lblListeDeLivres.setBounds(162, 12, 136, 15);
		frame.getContentPane().add(lblListeDeLivres);
		
		List list_box = new List();
		list_box.setBounds(75, 59, 308, 161);
		frame.getContentPane().add(list_box);
		
		
		System.out.println(mainMVC.getM().getListLivre().size());
		
		for(int i=0;i!=mainMVC.getM().getListLivre().size();i++)
		{
			
			list_box.add(mainMVC.getM().getListLivre().get(i).Ligne());
		}
	}
}
