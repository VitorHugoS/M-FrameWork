<?php
require "vendor/autoload.php";
require "controller/funcoes.php";
//carrega minhas views
$loader = new Twig_Loader_Filesystem('views');

//prepare ambiente de trabalho
$menu = new Menu();
$itensMenu = $menu->buscarMenu($PDO, 0);
$produto = new Produtos();
$twig = new Twig_environment($loader,array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());
$url=new Url();
$urlBase = "http://localhost/tita/";
$redirect=$url->rota($_SERVER['REQUEST_URI'], 2);

//mini rotas
switch ($redirect) {
	case 'tecidos':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Tecidos - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'confeccoes':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Confecções - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'bebe':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Bebê - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'cama':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Cama - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'mesa':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Mesa - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'banho':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Banho - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	case 'moda-casa':
	$itensProduto = $produto->buscar($PDO, 0,1);
	echo $twig->render('produtos.html', array(
		'Titulo' => 'Moda Casa - Tecidos Tita',
		'Quantidade' => count($itensProduto),
		'Pagina' => "Home",
		'Produtos' => $itensProduto,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
	
	default:
		echo $twig->render('index.html', array(
		'Titulo' => 'Home - Tecidos Tita',
		'Quantidade' => 0,
		'Pagina' => "Home",
		'Produtos' => 1,
		'Css' => "./views/",
		'Menu' => $itensMenu,
		'urlBase' => $urlBase
		));
	break;
}
