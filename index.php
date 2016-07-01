<?php 
if(file_exists('config.php')){
	include('config.php');
}else{
	echo "Vous devez configurer votre base de donnée.";
} 
?>
<?php include('header.php'); ?>
	<div>
		Page d'acceuil
	</div>
<?php include('footer.php'); ?>