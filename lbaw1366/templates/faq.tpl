{include file="common/header.tpl" titulo="FAQ"}
{if $s_nome}
<div class="col-md-10 well">
{else}
<div class="col-md-12 well">
{/if}
<h3>Questões frequentes</h3>

<div class="panel-group faq" id="accordion">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse1" href="#collapse1">1) Como me registo no site?</a></h4>
		</div>
		<div id="collapse1" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Carregue no botão <a href="register.php">Registar</a>, no topo da página.</li>
					<li id="h3">Insira a informação requisitada no formulário de registo, incluindo um email válido.</li>
					<li id="h3">Pressione o botão "Registar".</li>
					<li id="h3">Verifique que recebeu um email no endereço que forneceu durante o registo e siga o link nele indicado para ativar a sua conta.</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse2" href="#collapse2">2) Como posso criar um projeto?</a></h4>
		</div>
		<div id="collapse2" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Após realizar <a href="login.php">Login</a>, pressione no botão <a href="project/projects.php">Projetos</a>, no menu lateral.</li>
					<li id="h3">Carregue em <a href="project/newproject.php">Criar um novo projeto</a>.</li>
					<li id="h3">Insira a informação pedida no formulário.</li>
					<li id="h3">Pressione o botão "Criar".</li>
					<li id="h3">Se a informação inserida for válida, será direcionado para a página do projeto criado.</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse3" href="#collapse3">3) Como posso adicionar elementos à equipa do meu projeto?</a></h4>
		</div>
		<div id="collapse3" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Após realizar <a href="login.php">Login</a>, pressione no botão <a href="project/projects.php">Projetos</a>, no menu lateral.</li>
					<li id="h3">Na lista dos seus projetos, selecione aquele a que pretende adicionar membros.</li>
					<li id="h3">Na vista do projeto, selecione a tab "Equipa".</li>
					<li id="h3">Pressione no botão "Adicionar elemento". (Se este botão não estiver visível, significa que não é o Coordenador deste projeto. Contacte o Coordenador para que ele adicione membros.)</li>
					<li id="h3">Escreva o nome do elemento a adicionar e pressione o botão "Adicionar".</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse4" href="#collapse4">4) Como posso criar uma tarefa?</a></h4>
		</div>
		<div id="collapse4" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Após realizar <a href="login.php">Login</a>, pressione no botão <a href="project/projects.php">Projetos</a>, no menu lateral.</li>
					<li id="h3">Na lista dos seus projetos, selecione aquele a que pretende adicionar uma tarefa.</li>
					<li id="h3">Na vista do projeto, selecione a tab "Tarefas".</li>
					<li id="h3">Pressione no botão "Adicionar nova tarefa".</li>
					<li id="h3">Preencha os campos da tarefa a criar e pressione o botão "Criar".</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse5" href="#collapse5">5) Como posso compor uma mensagem?</a></h4>
		</div>
		<div id="collapse5" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Após realizar <a href="login.php">Login</a>, pressione no botão <a href="user/messages.php">Mensagens</a>, no menu lateral.</li>
					<li id="h3">Pressione o botão "Compor".</li>
					<li id="h3">Preencha os campos "Destinatário", "Assunto" e componha o corpo da mensagem.</li>
					<li id="h3">Pressione o botão "Enviar Mensagem".</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse6" href="#collapse6">6) Como posso editar o meu perfil?</a></h4>
		</div>
		<div id="collapse6" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Após realizar <a href="login.php">Login</a>, selecione o seu nome na barra superior e escolha a opção Perfil.</li>
					<li id="h3">Nesse menu poderá:
					<ul>
					<li id="h3">Alterar os seus dados pessoais, assim como públicos, pressionando o ícon  <span class="glyphicon glyphicon-pencil"></span>, no canto superior direito, seguido de "Guardar".</li>
					<li id="h3">Alterar a sua password, pressionando o botão "Alterar password".</li>
					<li id="h3">Escolher um Avatar para o seu perfil, pressionando o botão "Escolha um avatar", seguido de "Enviar", para confirmar a sua escolha.</li>
					</ul>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse7" href="#collapse7">7) Como posso contatar a equipa do <i>Make It Easy™?</i></a></h4>
		</div>
		<div id="collapse7" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3">Pode contactar-nos clicando em <a href="contacts.php">Contactos</a>, na barra inferior.</li>
					<li id="h3">Poderá também contactar-nos para os respetivos emails pessoais, listados na página <a href="contacts.php">Contactos</a>.</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!--<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#collapse4" href="#collapse4">4) ?</a></h4>
		</div>
		<div id="collapse4" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
					<li id="h3"></li>
				</ul>
			</div>
		</div>
	</div>-->
</div>

<script type="text/javascript">
numberOfFaq = 3;
var divnumber = 0;
for (divnumber = 1; divnumber <= numberOfFaq; divnumber++) {
	$('#tab'+divnumber).hide();
}

function hide_show(shID) {
	$('#'+shID).toggle();
}
</script>
</div>

{include file="common/footer.tpl" menu_faq=1}