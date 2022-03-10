<?php
require_once('../connexion.php');
session_start();

if (isset($_POST['login']))
{
	if (empty($_POST['mail']) || empty($_POST['mdp']))
	{
		header("location:Login.php?Empty=Cases vides");	
	}
	else
	{
		$query="SELECT * FROM admintable WHERE mail='".$_POST['mail']."' AND mdp='".$_POST['mdp']."'";
		$result=mysqli_query($con,$query);

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['mail']=$_POST['mail'];
			header("location:Admin.php");
		}
		else
		{
			header("location:Login.php?Invalid=Entrez vos identifiants");
		}
	}
}
else
{
echo "Not working now";
}

?>