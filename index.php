<?php 
if(file_exists('config.php')){
	include('config.php');
}else{
	echo "Vous devez configurer votre fichier config.php.";
} 
?>
<?php include('header.php'); ?>
	<div>
		Page d'acceuil
	</div>
<?php include('footer.php'); ?>