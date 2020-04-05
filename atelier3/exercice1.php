<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <title>Atelier3_Ex1</title>
</head>
<body>
<form method="post"> 
    <label for="n">login:</label>   <input name="login" type="text"><br/><br/>

    <label for="n">Password:</label>   <input name="pass" type="password"><br/><br/>


<input name="iden" type="submit" value="identifier" action="#">
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
		echo 'Chkoun Tinak';
	}
}
?>
    </body>
</html>