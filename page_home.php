<div class="jrfHero">
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
										<label for="formId_cep">CEP</label>
										<input id="formId_cep" type="text" class="field cepMask" name="cep" placeholder="_____-___" required>
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
										<label for="formId_cep">CEP</label>
										<input id="formId_cep" type="text" class="field cepMask" name="cep" placeholder="_____-___" required>
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
										<label for="formId_distanciaAproximada">Distância aproximada (km)</label>
										<input id="formId_distanciaAproximada" type="text" name="distanciaAproximada" class="field">
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
							<input type="checkbox">
							<div class="c-toggleList__content">
								<ul>
									<li class="u-fw100 liRadio liCheckboxSimilarToTitles">
										<div>
											<label for="optLazer"><strong>Lazer</strong>?</label>
											<input type="checkbox" id="optLazer">
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
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
									</div>
									<div class="description__btn">
										<a href="#" class="c-btn">Contratar</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
									</div>
									<div class="description__btn">
										<a href="#" class="c-btn">Contratar</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
									</div>
									<div class="description__btn">
										<a href="#" class="c-btn">Contratar</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
									</div>
									<div class="description__btn">
										<a href="#" class="c-btn">Contratar</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
									</div>
									<div class="description__btn">
										<a href="#" class="c-btn">Contratar</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="c-cardPlan">
								<figure class="c-cardPlan__figure">
									<img src="https://via.placeholder.com/130x60" alt="SUHAI Seguros">
								</figure>
								<div class="c-cardPlan__description">
									<div class="description__prices">
										<span class="label"><strong>3x R$</strong></span>
										<span class="priceMaster"><strong>20.896,00</strong></span>
										<span class="label"><strong>Sem Juros</strong></span>
										<hr>
										<span class="label"><strong>R$ 2.689,30</strong></span>
										<span class="label">À Vista</span>
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
		<div class="asideSection asideHead">
			<h1>Rafael JK</h1>
			<span class="js-selectedCarAndModel">CITROEN C4 LOUNGE</span>
			<div class="editLine">
				<span class="zeroKm">zero km</span>
				<a href="#">
					<span>Editar</span>
					<?php include('media/img/assets/caret-right.svg'); ?>
				</a>
			</div>
		</div>
		<div class="asideSection asideTopics">
			<li><p>ALARME sonoro</p></li>
			<li><p>bloqueador de ignição</p></li>
		</div>
		<ul class="asideSection asideEnd">
			<li>
				<h2>passa a noite na</h2>
				<p> GARAGEM DA Mario cOVAS juNIOR  E DURANTE O DIA USO PARA ME LEVAR A FACULDADE QUE FICA A 20KM DE CASA</p>
			</li>
		</ul>
	</aside>
</div>