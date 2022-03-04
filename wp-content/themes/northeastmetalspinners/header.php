<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<link href="<?php bloginfo('template_directory');?>/css/fontawesome.all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <section class="brand-bar">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="col-12 col-lg-4 top-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo_header.png" class="img-fluid" alt="North East Metal Spinners Logo" />
                    </div>
                    <div class="color2 d-none d-md-block promo-section">
                        <div class="promo-box">
						    <div class="promo-icon">
					            <div class="icon-small icon-wrap">
						            <i class="fa fa-map-marker highlight2"></i>
					            </div>
				            </div>
						    <div class="promo-details">
							    <h6>Our location</h6>
							    <span class="text">42 Hutton Close, Washington</span>
                            </div>
                        </div>
                        <div class="promo-box">                            
						    <div class="promo-icon">
					            <div class="icon-small icon-wrap">
						            <i class="fa fa-clock highlight3"></i>
					            </div>
				            </div>
						    <div class="promo-details">
							    <h6>We are open</h6>
							    <span class="text">08:00 - 16:00</span>
                            </div>
                        </div>
                        <div class="promo-box">
						    <div class="promo-icon">
					            <div class="icon-small icon-wrap">
						            <i class="fa fa-phone highlight1"></i>
					            </div>
				            </div>
						    <div class="promo-details">
							    <h6>Get in touch</h6>
							    <span class="text"><a href="tel:01914163440" class="highlight1">(0191) 416 3440</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header>
        <nav id="topNavigation" class="navbar navbar-expand-md navbar-light shadow-sm">
		    <div class="container">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
				    <?php 
					    wp_nav_menu (
						    array ( 
							    'theme_location'	=> 'top-menu',
							    'container'			=> 'div',
							    'container_class'	=> 'me-auto mb-2 mb-lg-0',
							    'menu_class'		=> 'top-menu navbar-nav',
							    'add_li_class'		=> 'nav-item'
						    )
					    ); 
				    ?>
			    </div>
				<!-- Right elements -->
				<div class="d-flex align-items-center">
      				<!-- Cart -->
      				<a class="text-reset me-3" href="<?php echo get_permalink( get_page_by_path( 'cart' ) ) ?>">
        				<i class="fas fa-shopping-cart"></i>
      				</a>

      				<!-- Notifications -->
      				<div class="dropdown">
        				<a
          					class="text-reset me-3 dropdown-toggle hidden-arrow"
          					href="#"
          					id="navbarDropdownMenuLink"
          					role="button"
          					data-mdb-toggle="dropdown"
          					aria-expanded="false"
        				>
          					<i class="fas fa-bell"></i>
          					<span class="badge rounded-pill badge-notification bg-danger">1</span>
        				</a>
      				</div>

					<!-- Account -->
					<a class="text-reset me-3" href="#">
						<i class="fas fa-user"></i>
      				</a>
    			</div>
    			<!-- Right elements -->
  			</div>
	    </nav>
    </header>