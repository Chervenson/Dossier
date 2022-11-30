import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;






public class main {

	private static ArrayList<COMPTE> ListCompte;
	private static ArrayList<CLIENT> ListClient;
	private static ArrayList<CATEGORIE> ListCategorie;
	
	public static COMPTE findcompte(String numero)
	{
		for(int i=0;i!=ListCompte.size();i++)
		{
			if(ListCompte.get(i).getNumero().equals(numero))
			{
				return ListCompte.get(i);
			}
		}
		return null;
	}
	
	public static CLIENT findclient(String nom)
	{
		for(int i=0;i!=ListClient.size();i++)
		{
			if(ListClient.get(i).getNom().equals(nom))
			{
				return ListClient.get(i);
			}
		}
		return null;
	}
	
	public static CATEGORIE findcategorie(String nom)
	{
		for(int i=0;i!=ListCategorie.size();i++)
		{
			if(ListCategorie.get(i).getNom().equals(nom))
			{
				return ListCategorie.get(i);
			}
		}
		return null;
	}
	
	public static void main(String[] args) throws ClassNotFoundException, SQLException  {
		// TODO Auto-generated method stub
		
		String BDD = "DS_JAVA_Connector";
		String url = "jdbc:mysql://localhost:3306/" + BDD;
		String user = "root";
		String passwd = "";
		
		ListCompte=new ArrayList<COMPTE> ();
		ListClient=new ArrayList<CLIENT> ();
		ListCategorie=new ArrayList<CATEGORIE> ();
		
		Class.forName("com.mysql.jdbc.Driver");
		Connection conn = DriverManager.getConnection(url,user,passwd);
		
		      
		        //charger les comptes
				Statement stmt = conn.createStatement();
				String sql="SELECT * from compte";
				ResultSet resultat;
				resultat = stmt.executeQuery(sql);
				while(resultat.next())
				{
					COMPTE a = new COMPTE(resultat.getString("numero"),resultat.getFloat("solde"),resultat.getString("devise"));
					ListCompte.add(a);
			
				}
				
				
				//charger les clients
				Statement stmt1 = conn.createStatement();
				String sql1="SELECT * from client";
				ResultSet resultat1;
				resultat1 = stmt1.executeQuery(sql1);
				while(resultat1.next())
				{
					CLIENT a = new CLIENT(resultat1.getString("nom"),resultat1.getString("prenom"),resultat1.getInt("genre"),resultat1.getInt("date"),resultat1.getCATEGORIE("categ"),resultat1.getString("adresse"),resultat1.getString("tel"),resultat1.getString("email"));
					ListClient.add(a);
			
				}
				
				
				//charger les categorie
				Statement stmt11 = conn.createStatement();
				String sql11="SELECT * from categorie";
				ResultSet resultat11;
				resultat11 = stmt11.executeQuery(sql11);
				while(resultat11.next())
				{
					CATEGORIE a = new CATEGORIE(resultat1.getString("nom"));
					ListCategorie.add(a);
			
				}
				
				 //inserer la categorie du client dans la liste des clients
				stmt = conn.createStatement();
				sql="SELECT categorie.nom, client.nom FROM categorie,client WHERE categorie.client=client.nom ";
				resultat = stmt.executeQuery(sql);
				while(resultat.next())
				{
					String numero=resultat.getString(1);
					String nom=resultat.getString(2);
					CATEGORIE ca=findcategorie(nom);
					CLIENT t=findclient(nom);
					ca.setLetitulaire(t);
				}
				
				
				 //insere la liste des comptes dans la liste du client
				stmt = conn.createStatement();
				sql="SELECT compte.numero, client.nom FROM compte,client WHERE compte.client=client.nom ";
				resultat = stmt.executeQuery(sql);
				while(resultat.next())
				{
					String numero=resultat.getString(1);
					String nom=resultat.getString(2);
					COMPTE c=findcompte(numero);
					CLIENT t=findclient(nom);
					c.setLetitulaire(t);
				}
				
				
				
		
		
 
	}

	

}