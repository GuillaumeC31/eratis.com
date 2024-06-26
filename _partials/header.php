<?php

?>

<header class="header-sticky header-absolute">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-0" href="index.php">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo/LOGO-ERATIS2.png" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo/LOGO-ERATIS-BL2.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

					<li class="nav-item ">
						<a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i></a>
					</li>

					<!-- Nav item | NOTRE SOCIETE -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notre Société</a>
						<div class="dropdown-menu dropdown-menu-size-lg p-3">
							<div class="row">
								<!-- Image and button -->
								<div class="col-xl-6">
									<div class="card bg-light overflow-hidden h-100 p-3" style="background:url(assets/images/bg/saas-bg-6.jpg) no-repeat; background-size:cover; background-position:center;">
										<!-- Bg overlay -->
										<div class="bg-overlay bg-dark opacity-5"></div>
										<div class="card-body d-flex justify-content-center text-center flex-column align-items-center position-relative z-index-2 p-0">
											<h5 class="text-white">ERATIS <br>fait peau neuve</h5>
										</div>
									</div>
								</div>

								<!-- Index nav links -->
								<div class="col-xl-6">
									<ul class="list-unstyled pt-3">
										<li> <a class="dropdown-item" href="societe-index.php">Qui sommes-nous?</a> </li>
										<li> <a class="dropdown-item" href="societe-recrutement.php">Recrutement</a> </li>
									</ul>
								</div>

								<!-- CTA -->
								<div class="col-12">
									<hr class="mt-sm-4"> <!-- Divider -->
									<div class="d-sm-flex justify-content-between align-items-center px-2">
										<div class="me-3 mb-2 mb-sm-0">
											<h6 class="mb-2 mb-sm-0">une question, un besoin?</h6>
											<small class="mb-0">N'hésitez pas à nous contacter</small>
										</div>
										<a href="contact.php" class="btn btn-sm btn-primary">Contact</a>
									</div>
								</div>
							</div>
						</div>
					</li>

					<!-- Nav item | NOS PRODUITS -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Nos Produits</a>
						<ul class="dropdown-menu">
							<!-- Dropdown submenu -->
							<li> <a class="dropdown-item" href="produits-monobloc.php">Monobloc</a></li>
							<li> <a class="dropdown-item" href="produits-modulaire-int.php">Modulaire Interieure</a></li>
							<li> <a class="dropdown-item" href="produits-modulaire-ext.php">Modulaire Exterieure</a></li>

							<!-- Dropdown Multilevel -->
							<li> 
								<hr class="dropdown-divider">
								<a class="dropdown-item" href="produits-sur-mesure.php" target="">
									<i class="fa-fw bi bi-toggle-off me-2"></i>Sur mesure
								</a> 
							</li>
							
							<li> 
								<a class="dropdown-item" href="produits-occasion.php" target="">
									<i class="fa-fw bi bi-life-preserver me-2"></i>Occasions
								</a> 
							</li>
							
							<li> 
								<a class="dropdown-item" href="produits-location.php" target="">
									<i class="fa-fw bi bi-card-text me-2"></i>Location
								</a> 
							</li>
						</ul>
					</li>

					<!-- Nav item | NOS SERVICES -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos Services</a>
						<div class="dropdown-menu dropdown-menu-center dropdown-menu-size-xl p-3">
							<div class="row g-xl-3">

								<!-- Work -->
								<div class="col-xl-8 d-none d-xl-block">
									<div class="d-flex gap-4">

										<!-- Card | BE -->
										<div class="card bg-transparent">
											<!-- Image -->
											<img src="assets/images/portfolio/list/01.jpg" class="card-img" alt="">
											<!-- Card body -->
											<div class="card-body px-0 text-start pb-0">
												<h6><a href="service-be.php">Bureau d'études</a></h6>
												<p class="mb-2 small">Nous étudions tous vos projets.</p>
												<a class="icon-link icon-link-hover stretched-link mb-0" href="service-be.php">En savoir plus<i class="bi bi-arrow-right"></i> </a>
											</div>
										</div>

										<!-- Card | EXPERT -->
										<div class="card bg-transparent">
											<!-- Image -->
											<img src="assets/images/portfolio/list/02.jpg" class="card-img" alt="">
											<!-- Card body -->
											<div class="card-body px-0 text-start pb-0">
												<h6><a href="service-r&d.php">R & D</a></h6>
												<p class="mb-2 small">Tous nos produits sont conçus et tester au sein de notre laboratoire.</p>
												<a class="icon-link icon-link-hover stretched-link mb-0" href="service-r&d.php">En savoir plus<i class="bi bi-arrow-right"></i> </a>
											</div>
										</div>

										<!-- Divider line -->
										<div class="vr ms-2"></div>
									</div>
								</div>

								<!-- Index nav links -->
								<div class="col-xl-4">
									<ul class="list-unstyled">
										<li class="dropdown-header h6">Nos autres services</li>
										<li> <a class="dropdown-item" href="service-sav.php">Service Après Vente</a> </li>
										<li> <a class="dropdown-item" href="service-retrofit.php">Rétrofit</a> </li>
										<li> <a class="dropdown-item" href="service-metrologie.php">Métrologie</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					<!-- Nav item -->
					<li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>

				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Buttons -->
			<ul class="nav align-items-center dropdown-hover ms-sm-2">
				<!-- Dark mode option START -->
				<li class="nav-item dropdown dropdown-animation">
					<button class="btn btn-light mb-0 px-2 lh-1" id="bd-theme"
						type="button"
						aria-expanded="false"
						data-bs-toggle="dropdown"
						data-bs-display="static">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
							<use href="#"></use>
						</svg>
					</button>

					<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg>Clair
							</button>
						</li>
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg>Sombre
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>Auto
							</button>
						</li>
					</ul>
				</li>
				<!-- Dark mode option END -->

				<!-- Responsive navbar toggler -->
				<li class="nav-item">
					<button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
				</li>

			</ul>

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>