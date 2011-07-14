<div id="container">
	<div class="header">
		<div class="logo">
			<a href="/">austeriofernandes</a>
		</div>
		<?php print render($page['header']);?>
	</div>
	<div class="column content">
		<?php print render($page['content']);?>
	</div>
	<div class="column sidebar">
		<?php print render($page['sidebar']); ?>
	</div>
	<div id="footer">
		<?php print render($page['footer']); ?>
	</div>
</div>
