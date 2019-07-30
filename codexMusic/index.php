
<?php
include("parts/php/common/header.php"); // CABEÇALHO
include("parts/php/common/menu.php"); // MENU
?>

<?php // CHAMA PAGINA
	$host = "http://localhost/";
	foreach ($_REQUEST as $___opt => $___val) {
		$$___opt = $___val;
	}
		if(empty($pagina))
		{
			include("parts/php/common/home.php");
		}
		elseif(substr($_pagina, 0, 4)=='http' or substr($pagina, 0, 1)=="/" or substr($pagina, 0, 1)==".")
		{
			echo "<script>window.location=" . $host . "'parts/php/index.php?pagina=404'</script>";
		}
		else
		{
			include("$pagina.php");
		}
?>

<?php // CHAMA RODAPÉ
	include("parts/php/common/footer.php");
?>
