<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form method="Post">
		Login : <input type="text" name="login" value="" placeholder=""><br><br>
		Password : <input type="password" name="mdp" value="" placeholder=""><br><br>
		<input type="submit" name="submit" value="Identifier" action="#">
		


	</form>
<?php


$conn=mysqli_connect("localhost","root","","authentification");

if(isset($_POST['submit'])){

	$login=$_POST['login'];
	$mdp=$_POST['mdp'];


$req="select * from utilisateurs";
$res=mysqli_query($conn,$req);
$t=0;

	While($don=mysqli_fetch_array($res))

	{

		 if ($don[0]==$login && $don[1]==$mdp){
		 	$t=1;
		 }
	}
	if($t==1){
		echo 'Bienvenue Cher Membre';
	}
	else{
		echo 'erreur';
	}
	





}
?>




	
</body>
</html>