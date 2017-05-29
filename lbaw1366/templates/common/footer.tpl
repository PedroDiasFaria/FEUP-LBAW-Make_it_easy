<div class="push"></div> <!-- Pushes content away from footer -->
</div> <!-- Closes container div-->

<footer id="footer" class="footer navbar navbar-default navbar-fixed-bottom">
	<div class="navbar-inner">
		<div class="container footer-mg-top">
			<p {if $menu_faq} style="text-decoration: underline;" {/if} class="muted pull-left footer-txt"><a href="{$BASE_URL}faq.php">FAQ</a></p>
			<p {if $menu_functionalities} style="text-decoration: underline;" {/if} class="muted pull-left footer-txt"><a href="{$BASE_URL}functionalities.php">Funcionalidades</a></p>
			<p {if $menu_about} style="text-decoration: underline;" {/if} class="muted pull-right footer-txt"><a href="{$BASE_URL}aboutus.php">Acerca</a></p>
			<p {if $menu_contacts} style="text-decoration: underline;" {/if} class="muted pull-right footer-txt"><a href="{$BASE_URL}contacts.php">Contactos</a></p>
			<p {if $menu_privacy} style="text-decoration: underline;" {/if} class="muted pull-right footer-txt"><a href="{$BASE_URL}privacy.php">Privacidade</a></p>
			<!--
			<img style="border:0;width:88px;height:31px;" src="http://www.w3.org/Icons/valid-xhtml10" alt="" 
				onClick="window.open('http://validator.w3.org/check?uri='+location.href)" /> -->
		</div>
	</div>
</footer>
<!-- final rodapé -->

</div>
<!-- final wrapper -->
</body>
</html>
