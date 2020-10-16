
<?php 
session_start();


if(!isset($_SESSION['age'])){
	echo " Da xoa ten";
	unset($_SESSION['name']);
}else{
	echo "adsad";
}print_r($_SESSION);
	?>
