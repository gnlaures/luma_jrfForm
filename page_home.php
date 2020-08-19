<div class="jrfHero">
	<main>
		<form action="#" id="formJRF" class="c-simpleForm">
			<fieldset id="intro">
				<div class="c-simpleForm__fieldsetTitle"></div>
				<div class="c-simpleForm__fields">
					<h1><strong>Bem vindo</strong> ao seguro simplificado</h1>
					<p>A partir de agora você será direcionado a passos que nos darão informações importantes para ajuda-lo a encontrar a melhor opção de seguro para seu bem.</p>
				</div>
			</fieldset>
			<fieldset id="dados-pessoais">
				<div class="c-simpleForm__fieldsetTitle">
					<div>
						<h2>Dados pessoais</h2>
						<p>Para que possamos identificar a melhor opção para o seu veículo precisaremos de alguns dados iniciais.</p>
					</div>
				</div>
				<div class="c-simpleForm__fields">
					<ul>
						<li class="u-fw50">
							<label for="formJRF_nome">Nome completo</label>
							<input id="formJRF_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
						</li>
						<li class="u-fw50">
							<label for="formJRF_email">E-mail</label>
							<input id="formJRF_email" type="email" name="email" class="field" placeholder="example@site.com" required>
						</li>
						<li class="u-fw50">
							<label for="formJRF_telefone">Telefone</label>
							<input id="formJRF_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
						</li>
						<li class="u-fw50 u-dflex">
							<label for="formJRF_data" class="u-fw40">Data</label>
							<input id="formJRF_data" type="text" class="u-fw60 field dataMask" name="data" placeholder="__/__/____" required>
						</li>
						<li class="u-fw50">
							<label for="formJRF_cpf">CPF</label>
							<input id="formJRF_cpf" type="text" class="field cpfMask" name="cpf" placeholder="___.___.___-__" required>
						</li>
					</ul>
				</div>
			</fieldset>
			<fieldset id="dados-veiculo">
				<div class="c-simpleForm__fieldsetTitle">
					<div>
						<h2>Dados do veículo</h2>
						<p>Informe os dados do veículo para que possamos entender a melhor opção de seguro</p>
					</div>
				</div>
				<div class="c-simpleForm__fields">
					<ul>
						<li class="u-fw100 liSelect">
							<label for="formJRF_marca">Marca</label>
							<div>
								<select name="marca" id="formJRF_marca" class="field" required>
									<option value="" selected></option>
									<option value="m1">Marca 01</option>
									<option value="m2">Marca 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_modelo">Modelo</label>
							<div>
								<select name="modelo" id="formJRF_modelo" class="field" required>
									<option value="" selected></option>
									<option value="m1">Modelo 01</option>
									<option value="m2">Modelo 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_versao">Versão</label>
							<div>
								<select name="versao" id="formJRF_versao" class="field" required>
									<option value="" selected></option>
									<option value="v1">Versao 01</option>
									<option value="v2">Versao 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_anoF">Ano de fabricação</label>
							<div>
								<select name="anoF" id="formJRF_anoF" class="field" required>
									<option value="" selected></option>
									<option value="af1">Ano fabricação 01</option>
									<option value="af2">Ano fabricação 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_anoM">Ano modelo</label>
							<div>
								<select name="anoM" id="formJRF_anoM" class="field" required>
									<option value="" selected></option>
									<option value="am1">Ano modelo 01</option>
									<option value="am2">Ano modelo 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw30">
							<label for="formJRF_placa">Placa do veículo</label>
							<input id="formJRF_placa" type="text" class="field" name="placa" required>
						</li>
						<li class="u-fw20 liCheckbox">
							<div>
								<label for="optZeroKM">Zero KM</label>
								<input type="checkbox" id="optZeroKM">
							</div>
						</li>
						<li class="u-fw50 liBtn">
							<span class="c-btn js-goToStep3">Continuar</span>
						</li>
					</ul>
				</div>
			</fieldset>
			<fieldset id="informacoes-complementares">
				<div class="c-simpleForm__fieldsetTitle">
					<div>
						<h2><strong>Informações </strong>complementares</h2>
						<p>Algumas informações sobre acessórios ou características podem fazer diferença na hora de gerar uma cotação de seguro</p>
					</div>
				</div>
				<div class="c-simpleForm__fields">
					<ul>
						<li class="u-fw100 liCheckbox">
							<div>
								<label for="caracteristica1">Alarme</label>
								<input type="checkbox" id="caracteristica1">
							</div>
							<div>
								<label for="caracteristica2">Financiado</label>
								<input type="checkbox" id="caracteristica2">
							</div>
							<div>
								<label for="caracteristica3">É um taxi</label>
								<input type="checkbox" id="caracteristica3">
							</div>
							<div>
								<label for="caracteristica4">Transporte de pessoas por aplicativo, exceto táxi</label>
								<input type="checkbox" id="caracteristica4">
							</div>
							<div>
								<label for="caracteristica5">É blindado; de empresa; de leilão ou com chassi remarcado</label>
								<input type="checkbox" id="caracteristica5">
							</div>
							<div>
								<label for="caracteristica6">Isento de imposto (PCD)</label>
								<input type="checkbox" id="caracteristica6">
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_sexo">Sexo</label>
							<div>
								<select name="sexo" id="formJRF_sexo" class="field" required>
									<option value="" selected></option>
									<option value="m">Masculino</option>
									<option value="f">Feminino</option>
								</select>
							</div>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formJRF_estadoCivil">Estado Civil</label>
							<div>
								<select name="estadoCivil" id="formJRF_estadoCivil" class="field" required>
									<option value="" selected></option>
									<option value="ec1">Estado Civil 01</option>
									<option value="ec2">Estado Civil 02</option>
								</select>
							</div>
						</li>
						<li class="u-fw50">
							<label for="formJRF_cep">CEP</label>
							<input id="formJRF_cep" type="text" class="field cepMask" name="cep" placeholder="___.___.___-__" required>
						</li>
						<li class="u-fw50 liLink">
							<a href="#">Não sei o meu CEP</a>
						</li>
						<li class="u-fw100 liAdress">
							<p>R MÁRIO C JÚNIOR - BARRA DA TIJUCA , RIO DE JANEIRO - RJ</p>
						</li>
						<li class="u-fw50 liBtn">
							<button class="c-btn">Enviar</button>
						</li>
					</ul>
				</div>
			</fieldset>
		</form>
	</main>
	<aside>
		<h1><strong>Resumo </strong>de suas informações</h1>
		<p>Abaixo você poderá acompanhar de forma simples todos os passos a serem executadods e poderá retornar a qualquer um para editar ao longo de sua simulação.</p>
		<p>Se tiver alguma dúvida entre em contato com nossa central de atendimento e teremos imenso prazer em ajuda-lo</p>
		<ul class="c-formSteps">
			<li class="is-active">
				<div><strong>Dados </strong> pessoais</div>
				<span class="jrfForm --step1 is-checked">
			</li>
			<li class="is-active">
				<div><strong>Dados </strong> do veículo</div>
				<span class="jrfForm --step2">
			</li>
			<li>
				<div>Acessórios</div>
				<span class="jrfForm --step3">
			</li>
			<li>
				<div>Acessórios</div>
				<span class="jrfForm --step4">
			</li>
		</ul>
	</aside>
</div>