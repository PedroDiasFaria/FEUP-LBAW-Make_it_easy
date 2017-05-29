{include file="common/header.tpl" titulo="Homepage" menu_index=1}
<script type='text/javascript' src='js/jquery.fittext.js'></script>
<script type='text/javascript'>
function runFittext() {
	$('h2').fitText(4, { minFontSize: '12px', maxFontSize: '30px' });
};
</script>
<!-- conteúdo da página -->
	<!-- jumbotron -->
	<div class="jumbotron text-center">
		<div class="centerfy col-md-12"><img class="img-responsive" src="{$BASE_URL}images/index.png"/>
		<h2 class="slogan-text">A melhor forma de gerir os seus projetos</h2>
		</div>
		<!-- botão para demonstração do sistema com abertura de um modal -->
		<a href="#modal-state" class="btn btn-default btn-info" data-toggle="modal">Demonstração</a>
		<a href="{$BASE_URL}register.php" class="btn btn-default btn-info">Registar</a>
		<a href="{$BASE_URL}login.php" id="button-login" class="btn btn-default btn-success">Login</a>
	</div><!-- final jumbotron -->
<script type='text/javascript'>
runFittext();
</script>
	<!-- Algumas funcionalidades do sistema em 4 colunas-->
	<div class="container last-cont">
		<!-- row -->
		<div class="row">
			<div class="col-md-3 text-center">
				<h3>Criação de projetos</h3>
				<a href="{$BASE_URL}functionalities.php"><img id="project.png"  class="text-center" src="{$BASE_URL}images/index/project.png" width="100px" height="100px" alt="project" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Neste sistema pode criar o seu projeto para ser mais fácil construí-lo. Convide toda a sua equipa para ser mais fácil comunicar e dividir responsabilidades.
				</p>
			</div>
			<div class="col-md-3 text-center">
				<h3>Fóruns de projeto</h3>
				<a href="{$BASE_URL}functionalities.php"><img id="forum.png" class="text-center" src="{$BASE_URL}images/index/forum.png" width="100px" height="100px" alt="forum" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Todos os projetos têm disponível um fórum individual onde se podem discutir temas relacionados com o projeto, como novas tarefas ou bugs.
				</p>
			</div>
			<div class="col-md-3 text-center">
				<h3>Gestão de tarefas</h3>
				<a href="{$BASE_URL}functionalities.php"><img  id="icon_tarefa.png"  class="text-center" src="{$BASE_URL}images/index/icon_tarefa.png" width="100px" height="100px" alt="icon_tarefa" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Neste sistema é possível gerir todas as tarefas do seu projeto. Podem ser adicionadas tarefas por cada elemento da equipa e podem ser anuladas pelo coordenador do projeto.
				</p>
			</div>
			<!--<div class="col-md-3 text-center">
				<h3>Informações</h3>
				<a href="{$BASE_URL}functionalities.php"><img id="email.png" class="text-center" src="{$BASE_URL}images/index/email.png" width="100px" height="100px" alt="Smiley face" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Sempre que houver uma atualização sobre um projeto, o utilizador tem a opção de receber um e-mail com essa informação para estar sempre a par de tudo sobre o projeto.
				</p>
			</div>-->
			<div class="col-md-3 text-center">
				<h3>Calendário</h3>
				<a href="{$BASE_URL}functionalities.php"><img id="calendar.png" class="text-center" src="{$BASE_URL}images/index/calendar.png" width="100px" height="100px" alt="calendar" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Cada utilizador tem acesso a um calendário pessoal, onde pode adicionar eventos. Uma ferramenta fundamental na gestão do seu tempo.
				</p>
			</div>
		</div><!-- final row -->
	</div><!-- final algumas funcionalidades do sistema em 4 colunas-->

<!-- modal para demonstração do sistema -->		
<div class="modal fade text-center" id="modal-state" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4> Demonstração </h4>
				</div>
				<div class="modal-body">
					<div class="video">
						<iframe width="560" height="315" src="http://www.youtube.com/embed/Fvs5AYlgzuk"></iframe>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center pad-rht-15 pad-bot-15">
						<a href="{$BASE_URL}register.php" id="btn-st-reg" class="btn btn-primary btn-login">Registar</a>
						<a class="btn btn-default btn-login" data-dismiss="modal">Fechar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><!-- final modal para demonstração do sistema -->
{include file="common/footer.tpl"}
