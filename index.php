<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Declaração do título da página -->
	<title>JRF Form</title>

	<!-- Metatags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=320, initial-scale=1, minimum-scale=1.0, maximum-scale=1.3, user-scalable=yes">
	<meta name="mobile-web-app-capable" content="yes">

	<meta name="keywords" content="#"/>
	<meta name="description" content="#"/>

	<meta name="author" content="$"/>
	<meta name="name" content="$">
	<meta name="creator" content="#">
	<meta name="publisher" content="#">
	<meta name="title" content="#">
	<meta name="generator" content="#"/>
	<meta name="distributor" content="Local">
	<meta name="url" content="#" />
	<meta name="language" content="pt-br" />
	<link rev=made href="#" />

	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-After" content="7 days">

	<!-- Favicon -->
	<!-- Gen by: realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="media/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="media/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="media/favicon/favicon-16x16.png">
	<link rel="manifest" href="media/favicon/site.webmanifest">
	<link rel="mask-icon" href="media/favicon/safari-pinned-tab.svg" color="#0a1b1f">
	<meta name="msapplication-TileColor" content="#0a1b1f">
	<meta name="theme-color" content="#0a1b1f">

	<!-- css files -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="dist/allPages-min.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div class="jrfHero">
	<div class="c-hamburguer">
		<div class="c-hamburguer__hero">
			<span class="bar bar_1"></span>
			<span class="bar bar_2"></span>
			<span class="bar bar_3"></span>
		</div>
	</div>
	<main>
		<header>
			<a href="./"><img src="media/img/assets/brand.png" alt="Energy Broker"></a>
		</header>
		<form action="#" id="formJRF" class="c-simpleForm">
			<div class="u-container">
				<section id="sobre-voce" class="is-active fieldsetHero">
					<div class="c-simpleForm__fieldsetTitle">
						<div>
							<h2><strong>Sobre</strong> você:</h2>
						</div>
					</div>
					<div class="c-simpleForm__fields">
						<ul>
							<li class="u-fw50">
								<label for="formJRF_nome">Nome completo*</label>
								<input id="formJRF_nome" type="text" name="nome" class="field" required>
							</li>
							<li class="u-fw50">
								<label for="formJRF_telefone">Telefone*</label>
								<input id="formJRF_telefone" type="tel" class="field foneMask" name="telefone" required>
							</li>
						</ul>
					</div>
				</section>
				<section id="dados-veiculo" style="display: none" class="fieldsetHero">
					<div class="c-simpleForm__fieldsetTitle">
						<div>
							<h2><strong>Sobre</strong> o veículo:</h2>
						</div>
					</div>
					<div class="c-simpleForm__fields">
						<ul>
							<li class="u-fw50 liSelect">
								<label for="formJRF_marca1">Marca*</label>
								<div>
									<select name="marca" id="formJRF_marca1" class="field" required>
										<option value="" selected></option>
										<option value="m1">Marca 01</option>
										<option value="m2">Marca 02</option>
									</select>
								</div>
							</li>
							<li class="u-fw50 liSelect">
								<label for="formJRF_modelo1">Modelo*</label>
								<div>
									<select name="modelo" id="formJRF_modelo1" class="field" required>
										<option value="" selected></option>
										<option value="m1">Modelo 01</option>
										<option value="m2">Modelo 02</option>
									</select>
								</div>
							</li>
							<li class="u-fw100 liSelect">
								<label for="formJRF_versao">Versão do <strong class="js-selectedCar">Citroen C4</strong></label>
								<div>
									<select name="versao" id="formJRF_versao" class="field" required>
										<option value="" selected></option>
										<option value="v1">Versao 01</option>
										<option value="v2">Versao 02</option>
									</select>
								</div>
							</li>
							<li class="u-fw50 liSelect">
								<label for="formJRF_anoF">Ano de fabricação*</label>
								<div>
									<select name="anoF" id="formJRF_anoF" class="field" required>
										<option value="" selected></option>
										<option value="af1">Ano fabricação 01</option>
										<option value="af2">Ano fabricação 02</option>
									</select>
								</div>
							</li>
							<li class="u-fw50 liSelect">
								<label for="formJRF_anoM">Ano modelo*</label>
								<div>
									<select name="anoM" id="formJRF_anoM" class="field" required>
										<option value="" selected></option>
										<option value="am1">Ano modelo 01</option>
										<option value="am2">Ano modelo 02</option>
									</select>
								</div>
							</li>
							<li class="u-fw50 liRadio li0km">
								<div>
									<label for="optZeroKM">Zero KM</label>
									<input type="checkbox" id="optZeroKM">
								</div>
							</li>
							<li class="u-fw50 js-vehiclePlate">
								<label for="formJRF_placa">Placa do veículo*</label>
								<input id="formJRF_placa" type="text" class="field" name="placa" required>
							</li>
							<li class="u-fw50 u-dnone liRadio js-vehicleLocation">
								<div>
									<label for="radio1">está com o veículo ?</label>
									<input type="radio" id="radio1" name="radioGroup">
								</div>
								<div>
									<label for="radio2">está na agência?</label>
									<input type="radio" id="radio2" name="radioGroup">
								</div>
							</li>
							<li class="u-fw100 liBtn">
								<a href="#informacoes-veiculo" class="c-btn --primary js-goToStep js-openAside">Continuar</a>
							</li>
						</ul>
					</div>
				</section>
				<section id="informacoes-veiculo" style="display: none" class="fieldsetHero">
					<div class="c-simpleForm__fieldsetTitle">
						<div>
							<h2>+ Informações sobre seu veículo <strong class="js-selectedCarAndModel">CITROEN C4 LOUNGE</strong>:</h2>
						</div>
					</div>
					<div class="c-simpleForm__fields">
						<ul>
							<li class="u-fw100 liCheckbox liCarProperties">
								<div>
									<label for="caracteristica1">Alarme sonoro</label>
									<input type="checkbox" id="caracteristica1">
								</div>
								<div>
									<label for="caracteristica2">bloqueador de ignição</label>
									<input type="checkbox" id="caracteristica2">
								</div>
								<div>
									<label for="caracteristica3">dispositivo rastreador</label>
									<input type="checkbox" id="caracteristica3">
								</div>
								<div>
									<label for="caracteristica4">blindado</label>
									<input type="checkbox" id="caracteristica4">
								</div>
								<div>
									<label for="caracteristica5">kit gás</label>
									<input type="checkbox" id="caracteristica5">
								</div>
								<div>
									<label for="caracteristica6">financiado</label>
									<input type="checkbox" id="caracteristica6">
								</div>
								<div>
									<label for="caracteristica7">Isento de imposto (PCD)</label>
									<input type="checkbox" id="caracteristica7">
								</div>
								<div>
									<label for="caracteristica8">chassi remarcado</label>
									<input type="checkbox" id="caracteristica8">
								</div>
							</li>
							<li class="u-fw100 liBtn">
								<a href="#informacoes-complementares" class="c-btn --primary js-goToStep">Continuar</a>
							</li>
						</ul>
					</div>
				</section>
				<section id="informacoes-complementares" style="display: none" class="fieldsetHero">
					<div class="c-simpleForm__fields">
						<div class="c-toggleList --withCheckbox is-active">
							<input type="checkbox">
							<div class="c-toggleList__header">
								<h3><strong>Onde o </strong><strong class="js-selectedCarAndModel">CITROEN C4 LOUNGE</strong> passa a noite?</h3>
							</div>
							<div class="c-toggleList__content">
								<ul>
									<li class="u-fw25">
										<label for="formJRF_cep2">CEP*</label>
										<input id="formJRF_cep2" type="text" class="field" name="cep" placeholder="_____-___" required>
									</li>
									<li class="u-fw25 liSelect">
										<label for="formJRF_localNoite">Onde?*</label>
										<div>
											<select name="localNoite" id="formJRF_localNoite" class="field" required>
												<option value="" selected></option>
												<option value="m1">Local 01</option>
												<option value="m2">Local 02</option>
											</select>
										</div>
									</li>
									<li class="u-fw100 liLink">
										<a href="#">Não sei meu CEP</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="c-toggleList --withCheckbox">
							<input type="checkbox">
							<div class="c-toggleList__header">
								<h3><strong>Onde </strong>e como você usa seu <strong class="js-selectedCarAndModel">CITROEN C4 LOUNGE</strong>?</h3>
							</div>
							<div class="c-toggleList__content">
								<ul>
									<li class="u-fw20">
										<label for="formJRF_cep3">CEP*</label>
										<input id="formJRF_cep3" type="text" class="field" name="cep" placeholder="_____-___" required>
									</li>
									<li class="u-fw20 liSelect">
										<label for="formJRF_localGenerico">Local</label>
										<div>
											<select name="localGenerico" id="formJRF_localGenerico" class="field">
												<option value="" selected></option>
												<option value="m1">Local 01</option>
												<option value="m2">Local 02</option>
											</select>
										</div>
									</li>
									<li class="u-fw30 liSelect">
										<label for="formJRF_ondeDeixa">Onde o deixa?</label>
										<div>
											<select name="ondeDeixa" id="formJRF_ondeDeixa" class="field">
												<option value="" selected></option>
												<option value="m1">Local 01</option>
												<option value="m2">Local 02</option>
											</select>
										</div>
									</li>
									<li class="u-fw30 liSelect">
										<label for="formJRF_distanciaAproximada">Distância aproximada (km)</label>
										<input id="formJRF_distanciaAproximada" type="text" name="distanciaAproximada" class="field">
									</li>
									<li class="u-fw100 liLink">
										<a href="#">Não sei meu CEP</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="c-toggleList --withCheckbox">
							<input type="checkbox">
							<div class="c-toggleList__header">
								<h3><strong>Usa</strong> para alguma <strong>Atividade</strong>?</h3>
							</div>
							<div class="c-toggleList__content">
								<ul>
									<li class="u-fw25 liSelect">
										<label for="formJRF_finalidade">Finalidade</label>
										<div>
											<select name="finalidade" id="formJRF_finalidade" class="field">
												<option value="" selected></option>
												<option value="m1">Finalidade 01</option>
												<option value="m2">Finalidade 02</option>
											</select>
										</div>
									</li>
									<li class="u-fw25 liSelect">
										<label for="formJRF_ramo">Ramo</label>
										<div>
											<select name="ramo" id="formJRF_ramo" class="field">
												<option value="" selected></option>
												<option value="m1">Ramo 01</option>
												<option value="m2">Ramo 02</option>
											</select>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="c-toggleList --withCheckbox is-active">
							<input type="checkbox" id="optLazer">
							<div class="c-toggleList__content">
								<ul>
									<li class="u-fw100 liRadio liCheckboxSimilarToTitles">
										<div>
											<label for="optLazer"><strong>Lazer</strong>?</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<ul>
							<li class="u-fw100 liBtn">
								<a href="#final" class="c-btn --primary js-goToStep">Enviar</a>
							</li>
						</ul>
					</div>
				</section>
				<section id="final" style="display: none" class="fieldsetHero">
					<div class="js-load load">Por favor, aguarde</div>
					<div class="loadCaption">Estamos processando as informações da sua simulação</div>
					<ul class="gridCardsBuy">
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
						<li>
							<div class="c-cardPlan --withList">
			<figure class="c-cardPlan__figure">
				<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
			</figure>
			<div class="c-cardPlan__description">
				<ul class="description__list">
					<li><span class="label">DANOS CORPORAIS</span><span class="caption">R$ 20.000,00</span></li>
					<li><span class="label">DANOS MORAIS</span><span class="caption">R$ 10.000,00</span></li>
					<li><span class="label">MORTE</span><span class="caption">R$ 50.000,00</span></li>
					<li><span class="label">INVALIDEZ PERMANENTE</span><span class="caption">R$ 30.000,00</span></li>
					<li><span class="label">ASSISTÊNCIA 24HS PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">GUINCHO 200KM</span><span class="caption">SIM</span></li>
					<li><span class="label">VIDRO PLANO 1</span><span class="caption">SIM</span></li>
					<li><span class="label">CARRO RESERVA 07 DIAS</span><span class="caption">SIM</span></li>
					<li><span class="label">Danos Materiais</span><span class="caption">R$ 5.000,00</span></li>
					<hr>
				</ul>
				<div class="description__prices">
					<span class="priceMaster">R$ 4.456,02</span>
					<span class="label">Em até 10x de R$ 445,62</span>
				</div>
				<div class="description__btn">
					<a href="#" class="c-btn">Contratar</a>
				</div>
			</div>
		</div>
						</li>
					</ul>
				</section>
			</div>
		</form>
	</main>
	<aside>
		<div class="closeAside">
			<img src="media/img/icons/icon_x.svg" alt="Fechar">
		</div>
		<div class="asideSection asideHead">
			<h1>Rafael JK</h1>
			<span class="js-selectedCarAndModel">CITROEN C4 LOUNGE</span>
			<div class="editLine">
				<span class="zeroKm">zero km</span>
				<a href="#">
					<span>Editar</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.26 106.78"><g id="bbd14810-ed3c-41e8-942e-5a8a1451d024" data-name="Camada 2"><g id="f0e95d09-ef9a-4ae3-99de-eeba581fbb1a" data-name="Capa 1"><path fill="#666" d="M13.14,105.16,40.2,57.24c1.4-2.89,1.44-5,0-7.72L13.14,1.59a5.48,5.48,0,0,0-7.72,0L1.56,5.45c-2.12,2.12-1.59,5.08,0,7.72L25.07,53.38,1.56,93.58c-2,3.45-2.12,5.6,0,7.72l3.86,3.86A5.41,5.41,0,0,0,13.14,105.16Z"/></g></g></svg>
				</a>
			</div>
		</div>
		<ul class="asideSection asideTopics">
			<li><p>ALARME sonoro</p></li>
			<li><p>bloqueador de ignição</p></li>
		</ul>
		<ul class="asideSection asideEnd">
			<li>
				<h2>passa a noite na</h2>
				<p> GARAGEM DA Mario cOVAS juNIOR  E DURANTE O DIA USO PARA ME LEVAR A FACULDADE QUE FICA A 20KM DE CASA</p>
			</li>
		</ul>
	</aside>
</div>

<script defer src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script defer src="dist/libraries-min.js"></script>
<script defer src="dist/components-min.js"></script>
<script defer src="dist/allPages-min.js"></script>

</body>
</html>