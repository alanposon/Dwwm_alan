package main;
 
import java.awt.BorderLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
 
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JPanel;
 
 
 
public class Jeu_Fenetre extends JFrame {
 
	//
    private Jeu_Panneau JPan1 =new Jeu_Panneau();
    JPanel pan =new JPanel();
 
    public Jeu_Fenetre(){
        this.setTitle("TP-Calculette");
          this.setSize(550, 500);
          this.setLocationRelativeTo(null);
          this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
          pan.setLayout(new BorderLayout());//indique qu'il faut prendre compte le positionnemt des touches
          getContentPane().add(pan);//ajout du JPanel pour le rendre visible
          //Apparence
          affichage01();
          pan.add(JPan1);//fond et autres
        //rendre visible
          this.setVisible(true);
          //
          go01();
    }
 
 
    //---------------------------------------------Animation du joueur---------------------------------------------
    //---------------------------------------------Action lors du clic--------------------------------------------- 	
    protected void affichage01(){
        //cretaion du JPanel qui contiendra des boutons
        JPanel pan_b=new JPanel();//b=bouton
        pan.add(pan_b , BorderLayout.SOUTH);
 
      //Creation des boutons
    	JButton bHaut=new JButton ("Haut");
    	JButton bBas=new JButton ("Bas");
        //Ajout d'action au boutons
        bHaut.addActionListener(new bH_Listener());
        bBas.addActionListener(new bB_Listener());
        //Ajout des boutonss dans le Panel
        pan_b.setLayout(new GridLayout(1,0,5,2));//ds l'ordre (ligne,colonne,espacement de 5px(x;y)
        pan_b.add(bHaut);
        pan_b.add(bBas);
    }
 
 
 
    //Var
    //"Thread"Variable qui permettra de lancer l'action
    private Thread t1;//vers le haut
    private Thread t2;//vers le bas
   //Va ns permettre de savoir quel bouton est cliqué
    boolean animated_bH;
    boolean animated_bB;
    //Va nous permettre de savoir la position du joueur
    int x_j=JPan1.getPosX_j();
    int y_j=JPan1.getPosY_j();
 
    //
    //---------Fct des animations-------
 
    //Animation vers le haut
    public void Jgo01(){
    		for(;<img src="images/smilies/icon_wink.gif" border="0" alt="" title=";)" class="inlineimg" />{
    			y_j--;
    			JPan1.setPosY_j(y_j);
    			JPan1.repaint();
    			if (Math.abs( y_j ) <=0){
    				JPan1.setPosY_j(0);
    			}try {
                    Thread.sleep(0);
                } catch (InterruptedException e) {
                  e.printStackTrace();
                }
 
    		}
    }
	//Animation vers le bas
	public void Jgo02(){
	for(;<img src="images/smilies/icon_wink.gif" border="0" alt="" title=";)" class="inlineimg" />{
		y_j++;
		JPan1.setPosY_j(y_j);
		JPan1.repaint();
		if (Math.abs( y_j ) >=0){
			JPan1.setPosY_j(getHeight());
		}try {
            Thread.sleep(0);
        } catch (InterruptedException e) {
          e.printStackTrace();
        }
 
	}
}