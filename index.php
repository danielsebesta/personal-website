<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daniel Šebesta</title>
	<link rel="stylesheet" href="./assets/css/bulma.min.css">
	<link rel="stylesheet" href="./assets/css/clash-grotesk.css">
	<script src="https://unpkg.com/@phosphor-icons/web"></script>
	<style>
		:root {
			--bulma-family-primary: 'ClashGrotesk-Variable', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		}
	</style>

</head>

<body>
	<section class="hero is-fullheight">
		<!-- Hero head: will stick at the top -->
		<div class="hero-head">
			<nav class="navbar container" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<button id="theme-toggler" class="button" style="margin:15px;"><i class="fas fa-sun"></i></button>
					<a class="navbar-item" href="https://bulma.io"><strong>Daniel Šebesta</strong></a>

					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>

				<div id="navbarBasicExample" class="navbar-menu">
					<div class="navbar-start">
						<a class="navbar-item">
							Home
						</a>

						<a class="navbar-item">
							Documentation
						</a>

						<div class="navbar-item has-dropdown is-hoverable">
							<a class="navbar-link">
								More
							</a>

							<div class="navbar-dropdown">
								<a class="navbar-item">
									About
								</a>
								<a class="navbar-item">
									Jobs
								</a>
								<a class="navbar-item">
									Contact
								</a>
								<hr class="navbar-divider">
								<a class="navbar-item">
									Report an issue
								</a>
							</div>
						</div>
					</div>

					<div class="navbar-end">
						<div class="navbar-item">
							<div class="buttons">
								<a class="button is-primary">
									<strong>Sign up</strong>
								</a>
								<a class="button is-light">
									Log in
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		</header>
		</div>
		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				<h1 style="font-size:4rem;" class="title">Vítejte na mém novém webu!</h1>
				<p class="subtitle">Web se již připravuje...</p>
			</div>
		</div>
	</section>
	<script>
		const themeToggler = document.getElementById('theme-toggler');

		const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
		const currentTheme = localStorage.getItem('theme') || (prefersDarkMode ? 'dark' : 'light');
		document.documentElement.setAttribute('data-theme', currentTheme);

		if (currentTheme === 'dark') {
			themeToggler.innerHTML = '🌞';
		} else {
			themeToggler.innerHTML = '🌙';
		}

		themeToggler.addEventListener('click', () => {
			const currentTheme = document.documentElement.getAttribute('data-theme');
			const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

			document.body.style.transition = 'background-color 0.1s ease-in-out';
			document.documentElement.setAttribute('data-theme', newTheme);
			localStorage.setItem('theme', newTheme);

			setTimeout(() => {
				document.documentElement.style.transition = '';
			}, 500);

			if (newTheme === 'dark') {
				themeToggler.innerHTML = '🌞';
			} else {
				themeToggler.innerHTML = '🌙';
			}
		});
	</script>
	<script src="./assets/js/bulma.js"></script>
</body>

</html>