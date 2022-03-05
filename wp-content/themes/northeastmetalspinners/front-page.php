<?php get_header(); ?>
    <!-- Shop Now -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 g-0 d-md-none">
                <a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ) ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shop-now-xs.jpg" class="img-fluid" alt="Shop" />
                </a>
            </div>
            <div class="col-12 g-0 d-none d-md-block">
                <a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ) ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shop-now-md.jpg" class="img-fluid" alt="Shop" />
                </a>
            </div>
        </div>
    </div>
    <!-- Company Features -->
    <div class="features my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 my-3 my-lg-0">
                    <div class="shadow p-4 bg-white rounded h-100 d-inline-block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/feature_01.png" class="img-fluid" />
                        <h5 class="feature">Technical <span>Expertise</span></h5>
                        <hr />
                        <p class="text-block">
                            Our technical expertise allows us to produce highly complex components, keeping us at the forefront of the advanced metal spinning industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-3 my-lg-0">
                    <div class=" shadow p-4 bg-white rounded h-100 d-inline-block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/feature_02.png" class="img-fluid" />
                        <h5 class="feature">Consistent <span>Quality</span></h5>
                        <hr />
                        <p class="text-block">
                            Our company prides itself on manufacturing high quality, precision components that consistently meet the needs of the customer.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-3 my-lg-0">
                    <div class=" shadow p-4 bg-white rounded h-100 d-inline-block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/feature_03.png" class="img-fluid" />
                        <h5 class="feature">Competitive <span>Pricing</span></h5>
                        <hr />
                        <p class="text-block">
                            A carefully planned combination of metal spinning, press work, and in-house tooling allow us to remain competitive in the market place.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-3 my-lg-0">
                    <div class=" shadow p-4 bg-white rounded h-100 d-inline-block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/feature_04.png" class="img-fluid" />
                        <h5 class="feature">On Time <span>Delivery</span></h5>
                        <hr />
                        <p class="text-block">
                            Our structured program of in-house tool making and manufacturing processes allow us to deliver components on time, every time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome -->
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Welcome to <span>North East Metal Spinners</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h7>At North East Metal Spinners, we are specialists in the art and craft of high precision hand metal spinning and in series CNC machine metal spinning.</h7>
                    <p class="h7afterfix">If you need quality spun products or need advice on whether metal spinning is the answer to your manufacturing needs then you have come to the right company.</p>
                    <p>Our blend of traditional hand spinning and the latest in CNC machine metal spinning technology puts us in an enviable position to provide our clients with the products they need.</p>
                    <p>We have a well established track record of providing great service at competitive prices, but without any compromise on quality.</p>
                    <p>From blueprint to finished product, no shape is too simple or too complex. We can spin metal up to 42″ in diameter with thicknesses ranging from .010″ to .250″ and with tolerances up to .005″.</p>
                    <p>We can assist you with material selection and the range of finishing options available, as well as providing a range of additional services including welding, punching, beading, anodizing, plating, polishing and custom assembly.</p>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>