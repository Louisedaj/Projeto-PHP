<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	
	include_once("conexao.php");	
?>
<br>
<a href="sair.php">Sair</a><br><br>
<?php
	$result_vistorias = "SELECT * FROM vistorias";
	$resultado_vistoria = mysqli_query($conn, $result_vistorias);
	while($row_vistorias = mysqli_fetch_assoc($resultado_vistoria)){
		?>
			<a href="listar_itens.php?id=<?php echo $row_vistorias['id']; ?>"><?php echo $row_vistorias['id']; ?> </a><br>
		<?php
	}
?>


