<?php
	#base
	$http = 'http://';
	$urllocal = '/luma_JRF_form';
	$title = 'JRF - Form';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	# define a pagina
	$home = false;
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	switch ($pagina) {
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;

		case '' :
		case 'home' :
		default :
			$file = 'page_home.php';
			$title_page = $title;
			$home = true;
			break;
	}

	#Monta a base url
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>