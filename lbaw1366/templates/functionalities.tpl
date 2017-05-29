{include file="common/header.tpl" titulo="Funcionalidades" menu_func=1}
<script type='text/javascript' src='js/jquery.fittext.js'></script>
<script type='text/javascript'>
function runFittext() {
	$('p').fitText(2, { minFontSize: '15px', maxFontSize: '20px' });
};
</script>
{if $s_nome}
<div class="col-md-10 well">
{else}
<div class="col-md-12 well">
{/if}
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">
					Funcionalidades
                    <small>Tudo o que o nosso sistema disponibiliza</small>
                </h1>
            </div>
        </div>

        <div class="row">
			  <div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-facetime-video"></span> Vídeo demonstrativo</h3>
                <p style="text-align:justify;">Este vídeo serve como uma demonstração para a utilização do nosso site. 
                    <br> Podemos ver como navegar pelas páginas, como criar um projeto e convidar membros para a equipa, como enviar uma mensagem para outro utilizaro ou ainda como contactar a equipa de desenvolvimento do site. <br><br>
                    Se, após a visualização do vídeo, ainda restarem dúvidas sobre a utilização do nosso sistema, pedimos que nos informe, na zona "contactar", para, posteriormente, actualizarmos o vídeo para uma fácil orientação para todos os utilizadores.</p>
            </div>
			<div class="col-lg-7">
				<div class="video">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/"></iframe>
				</div>
            </div>

        </div>

        <hr>

		
		<div class="row">
			<div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-globe"></span> Tudo no sítio certo</h3>
                <p style="text-align:justify;">Neste site de gestão de projetos, a organização das páginas foi tida em conta. Desta forma, torna-se simples navegar pelo nosso sistema e utilizá-lo de forma adequada. <br> Por outro lado, também a gestão dos projetos é facilitada. Fornecemos uma técnica para organizar o desenvolvimento do projeto em partes e de modo a ter entregas de tarefas planeadas.</p>
            </div>
			<div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/tudoSitioCerto.png" alt="tudoSitioCerto">
                </a>
            </div>
        </div>

        <hr>
		
		
        <div class="row">
			<div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-tasks"></span> Gestão de Tarefas</h3>
                <p style="text-align:justify;">Cada projeto criado pode (e deve) ser dividido em várias tarefas, utilizando técnicas de scrumDesta forma, podemos gerir facilmente as tarefas dos nossos projetos, marcando-as como terminadas e ainda associar um prazo e um utilizador responsável por elas.</p>
            </div>
			
            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/gestaoTarefas.png" alt="gestao de Tarefas">
                </a>
            </div>	
        </div>

        <hr>
		
        <div class="row">
			<div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-comment"></span> Fóruns de discussão</h3>
                <p style="text-align:justify;">Dentro de cada projeto os developers, por forma a facilitar a comunicação, podem participar num fórum de discussão onde criam tópicos e podem ter respostas a cada tópico, formando um género de árvore de um comentário (facilitando a leitura e a organização por temas). </p>
            </div>
			
			            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/forumDiscussao.png" alt="forum de Discussao">
                </a>
            </div>
			
        </div>

        <hr>
		
		<div class="row">
			<div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-calendar"></span> Calendário</h3>
                <p style="text-align:justify;"> O sistema oferece um calendário onde é possível marcar as metas dos projetos e ainda acrescentar eventos pessoais do utilizador. Desta forma, tornamos o nosso sistema abrangente e passível de ser utilizado para outros meios, que não só gestão de projetos. </p>
            </div>
			
            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/calendario.png" alt="calendario">
                </a>
            </div>

        </div>
		
		<hr>

		<div class="row">
			<div class="col-lg-5 col-md-5">
                <h3><span class="glyphicon glyphicon-dashboard"></span> Relógio</h3>
                <p style="text-align:justify;"> Na criação de cada projeto, podemos definir uma data limite para a conclusão do mesmo. Posteriormente, aquando do desenvolvimento, vamos ter uma zona que mostra quanto tempo falta para o prazo terminar. </p>
            </div>
			
            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/relogio.png" alt="relogio">
                </a>
            </div>
        </div>
		
		<hr>
		
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<h3><span class="glyphicon glyphicon-phone"></span> Sistema responsivo</h3>
                <p style="text-align:justify;">Este sistema é responsivo, podendo ser utilizado em todas as plataformas móveis, como um smartphone, tablet ou computador, bastando aceder ao link através do browser e utilizar.</p>
            </div>
			
            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive functionalities-img" src="{$BASE_URL}images/sistemaResponsivo.png" alt="sistema Responsivo">
                </a>
			</div>
        </div>
		
		<hr>

		<div class="row last" id="functionalities-last-row">
		    <div class="col-lg-12 text-center">
			 <h3>Por tudo isto e muito mais acreditamos que vai adorar o nosso sistema. Experimente!</h3>
					<a class="btn btn-primary" href="{$BASE_URL}register.php">Registar <span class="glyphicon glyphicon-chevron-right"></span></a>
		    </div>
        </div>
<script type='text/javascript'>
runFittext();
</script>
{include file="common/footer.tpl" menu_functionalities=1}
