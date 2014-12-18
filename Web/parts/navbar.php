<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
	<div class='container'>
		<div class='navbar-header'>
			<button type="button" class="navbar-toggle" data-toggle="collapse" 
			data-target=".main-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class='navbar-brand' ref='index.php'>
				<img src='logo.png' alt='VIRGO' />
			</a>

			</div>

		<div id='navbar' class='navbar-collapse collapse main-navbar-collapse'>
			<ul class='nav navbar-nav'>
				<?php echo navbar_gen($page_list, $path_list, $this_page); ?>
			</ul>	
		</div>
	</div>
</nav>
