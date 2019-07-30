<?php //MENU DINAMICO
// MENU LINKS EXTERNOS
// VERIFICA URL
foreach ($_REQUEST as $___opt => $___val) {
	$$___opt = $___val;
}
if(empty($pagina)) {
	// * AQUI DEVE CHAMAR O MENU SIMPLES *
	// echo "voce esta na index";
	// links dinamicos para o menu simples
		$inicio = "#topo";
		$sobre = "#about";
		$servicos = "#servicos";
		$intro = "#intro";
		$portfolio = "#portfolio";
		$novidades = "#blog-link";
		$contato = "index.php?pagina=nav/common/contato";
	//
	//
}
elseif(substr($_pagina, 0, 4)=='http' or substr($pagina, 0, 1)=="/" or substr($pagina, 0, 1)==".")
{
	echo "<script>window.location='http://www.marcelomotta.com/index.php?pagina=404'</script>";
}
else {
	// * AQUI DEVE CHAMAR O MENU LINKS EXTERNOS *
	// echo "pagina extra"; #
	// links dinamicos para o menu externo
		$inicio = "index.php#topo";
		$sobre = "index.php#about";
		$servicos = "index.php#servicos";
		$intro = "index.php#intro";
		$portfolio = "index.php#portfolio";
		$novidades = "index.php#blog-link";
		$contato = "index.php?pagina=nav/common/contato";
	//
	//
}
?>
