<?php
include("Connexion/Connexion.php");
if(isset($_POST['submit']))
{
	if(!empty($_POST['Prenom']) && !empty($_POST['Nom_de_famille']) && !empty($_POST['email_or_Numero']))
	{
		$a=$_POST['Prenom'];
		$b=$_POST['Nom_de_famille'];
		$c=$_POST['email_or_Numero'];
		$query=mysqli_query($con,"select * from Utilisateur where Prenom='$a' and Nom_de_famille='$b' and Numero_de_mobile_ou_email='$c'");
		$rows=mysqli_fetch_assoc($query);
		$q=$rows['mot_de_passe'];
		if(!query)
		{
			echo'<script type="text/javascript">alert("error");</script>';
		}
		if(mysqli_num_rows($query)>0)
		{
			//echo'<script type="text/javascript">alert("Votre mot_de_passe est :".$q);</script>';
			echo"Password is : ".$q;
		}
		else
			echo'<script type="text/javascript"alert("an incorrect field check the fields !!");</script>';
	}
	 else
		 echo'<script type="text/javascript">alert("fill in all the fields !!");</script>';
}
?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
    <link rel="stylesheet" href="Css/oublier.css"/>
   <title>Show Password</title>
</head>
 <body>
  <fieldset>
    <legend>Show Password :</legend>
	  <form method="post"action="">
	    <h1> Show Password </h1>
	     <table>
		    <tr>
			<td>Prenom :</td><td><input type="text" name="Prenom"></td>
			</tr>
			   <tr>
			   <td>Nom_de_famille :</td><td><input type="text" name="Nom_de_famille"></td>
               </tr>
                 <tr>
                  <td>email_or_Numero :</td><td><input type="text" name="email_or_Numero"></td>
                 </tr>   				  
				 <tr>
				<td></td>
              <td><input type="submit" value="Valider" name="submit"></td>			
		 </table>
	  </form>
  </fieldset>

 </body>
</html> 
 