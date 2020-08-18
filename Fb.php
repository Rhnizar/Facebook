<?php
include("Connexion/Connexion.php");
if(isset($_POST['submit']))
{
	if(!empty($_POST['prenom']) && !empty($_POST['nom_famille']) && !empty($_POST['mail']) && !empty($_POST['passe']) && !empty($_POST["radio1"]))
	{
		
		$a=$_POST['prenom'];
		$b=$_POST['nom_famille'];
		$c=$_POST['mail'];
		$d=$_POST['passe'];
		$e=$_POST['naissance'];
        $f=$_POST['radio1'];
		
		$query=mysqli_query($con,"INSERT INTO Utilisateur VALUES('','$a','$b','$c','$d','$e','$f')");
		if($query)
		{
			header('Location:Fb1.php');
		}else{
			
			echo '<script type="text/javascript">alert("error");</script>';
		}
	}
	else
		echo '<script type="text/javascript">alert("remplir tout les champs !!");</script>';
	
	
}
?>
<!doctype html>
 <html> 
  <head>
   <meta charset ="utf_8"/>
   <link rel ="stylesheet" href="Css/fb2.css"/>
   <title> Cree un compte  </title>
   </head>
    <body>
	<fieldset>
	 <legend>
	  inscription :
	  </legend>
	  <form method="post" action="">
	<h1> INSCRIPTION </h1>
	   <table>
	      <tr>
	    <td><b> Prenom :</b></td><td><input type ="Text" id="pre" name ="prenom"/></td>
		   </tr>
		   <tr>
		<td><b>Nom de famille :</b> </td><td><input type ="Text" id ="nom" name="nom_famille"/></td>
		   </tr>
		   <tr>
		<td><b>Numero de mobile ou e-mail:</b> </td><td><input type="text" id ="Numero" name ="mail"/></td>
		  </tr>
		  <tr>
		 <td><b> Nouveau mot de passe :</b></td><td><input type ="password" id="mot"name="passe"/></td>
		 
		   </tr>
		   <tr>
		 <td><b> Date de naissance :</b></td><td><input type ="date" id="date"name="naissance"/></td>
		  </tr>
		  <tr>
		  <td><b> Genre :</b></td>
		  </tr>
		  <tr>
		  <td><input type="radio"id="femme"value="homme" name="radio1"/> Homme </td>
		  <td><input type="radio"id="Personnalise"value="femme"name="radio1"/> Femme </td>
		  <td><input type="radio"id="homme"value="personnalise"name="radio1"/> Personnalise </td>
		  </tr>
		  <tr>
		  <td></td>
		  <td><button type ="submit" name="submit" > Inscription </button></td>
		  </tr>
		  </table>
		  </form>
		  </fieldset>
	</body>
	</html>