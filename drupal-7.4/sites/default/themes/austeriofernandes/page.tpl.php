<div id="container">
	<div id="header">
		<div class="logo">
			<a href="/">austeriofernandes</a>
		</div>
		<?php print render($page['header']);?>
	</div>
	<div id="content-area">
		<div id="main-content" class="column">
			<?php print render($page['content']);?>
		</div>
		<div id="sidebar" class="column">
			<?php print render($page['sidebar']); ?>
		</div>
	</div>
	<div id="footer">
		<?php print render($page['footer']); ?>
		<div id="copyright"> © 2011 Austerio Fernandes</div>
	</div>
</div>
