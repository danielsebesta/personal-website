<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daniel Šebesta</title>
	<link rel="stylesheet" href="./assets/css/halfmoon.min.css">
	<link rel="stylesheet" href="./assets/css/clash-grotesk.css">
	<script src="https://unpkg.com/@phosphor-icons/web"></script>
	<style>
		body {
			font-family: 'ClashGrotesk-Variable', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		}
	</style>

</head>

<body>
	<div class="container">
		<header class="d-flex justify-content-center py-3 fixed-top">
			<nav id="scrollspy-1-navbar" class="navbar px-3" style="background-color: var(--bs-content-bg); border-bottom: var(--bs-border-width) solid var(--bs-content-border-color);">
				<a class="navbar-brand" href="#">
					<img src="..." alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
					<span class="d-none d-sm-inline">Builder</span>
				</a>
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="#scrollspy-1-about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#scrollspy-1-pricing">Plans</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Products</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<h6 class="dropdown-header">Our products</h6>
							</li>
							<li><a class="dropdown-item" href="#scrollspy-1-page-builder">Page builder</a></li>
							<li><a class="dropdown-item" href="#scrollspy-1-form-builder">Form builder</a></li>
						</ul>
					</li>
				</ul>
			</nav>

		</header>
		<!-- Navbar scrollspy -->

		<main data-bs-spy="scroll" data-bs-target="#scrollspy-1-navbar" data-bs-smooth-scroll="true">
			<div class="px-4 pt-5 my-5 text-center justify-content-center align-items-center d-flex flex-column vh-100" id="scrollspy-1-about">
				<h1 class="display-4 fw-bold text-body-emphasis">Daniel Šebesta</h1>
				<div class="col-lg-6 mx-auto">
					<h6 class="display-6 mb-4" style="font-weight:500">Developer</h6>
					<div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
						<button type="button" class="btn btn-lg px-4 me-sm-3 rounded-pill">Projekty</button>
						<button type="button" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">Kontakt</button>
					</div>
				</div>
				<div class="overflow-hidden" style="max-height: 30vh;">
					<div class="container px-5">
						<img src="https://images.pexels.com/photos/276452/pexels-photo-276452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
					</div>
				</div>
			</div>
	</div>
	<h4 id="scrollspy-1-pricing">
		Plans
		<a href="#scrollspy-1-pricing" class="fw-normal text-decoration-none ms-1">#</a>
	</h4>
	<div>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>

	</div>
	<h4 id="scrollspy-1-page-builder">
		Page builder
		<a href="#scrollspy-1-page-builder" class="fw-normal text-decoration-none ms-1">#</a>
	</h4>
	<div>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>

	</div>
	<h4 id="scrollspy-1-form-builder">
		Form builder
		<a href="#scrollspy-1-form-builder" class="fw-normal text-decoration-none ms-1">#</a>
	</h4>
	<div>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam obcaecati tempora distinctio rem optio praesentium, corporis commodi placeat. Minus beatae ducimus distinctio sunt pariatur similique, consequatur deserunt odit quia quos.</p>

	</div>
	</main>

	<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>