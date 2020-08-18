
<?php
include("Connexion/Connexion.php");
if(isset($_POST['submit']))
{
	if(!empty($_POST['email']) && !empty($_POST['Passe']))
	{
		$a=$_POST['email'];
		$b=$_POST['Passe'];
		$query=mysqli_query($con,"SELECT * FROM Utilisateur WHERE Numero_de_mobile_ou_email='$a'and mot_de_passe='$b'");
		if(mysqli_num_rows($query)>0)
		{
			header("Location:new 1.php");
		}
		else
			echo'<script type="text/javascript">alert("email or password incorect,please check the fields !!");</script>';
	}
	else
		echo '<script type="text/javascript">alert("fill in all the fields !!");</script>';
}
?>
<!doctype html>
<html>
 <head>
  <meta charset ="utf-8"/>
  <link rel="stylesheet" href="Css/fb1.css"/>
  <title> Facebook </title>
  </head>
   <body>
   <fieldset>
    <legend>
	 <b>Facebook</b>
	 </legend>
    <form method="post" action="">
	<h1> FACEBOOK </h1> 
	  <label for ="id"> Adresse e-mail ou mobile :</label>
	   <input type="Text" id ="Adresse" name="email"/>
	 
	  <label for ="id"> Mot de passe :</label>
	   <input type="password" id ="Mot" name="Passe"/>
	
	  
         <button type="submit" name="submit">Connexion</button>	 
		  </br></br>
		   <a href="Oublier.php"><span class="yes">Informations de compte oublies ?</span></a>
		   </br></br>
		   <button type="submit"formaction="Fb.php" > Crée un compte </button>
		   </form>
	 </fieldset>
	 </body>
	 </html>