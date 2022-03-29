<?php
	$id = 0; 
if (!empty($_GET['id'])) {
	$id =$_REQUEST['id'];
}
if (!empty($_POST)){
	$id = $_POST['id'];
	echo "Funciona $id";
}

?>
<form action="teste.php" method="post">
	<input type="hidden" name="id" value="<?php echo($id); ?>">
	<input type="submit" value="Testar">	
</form>