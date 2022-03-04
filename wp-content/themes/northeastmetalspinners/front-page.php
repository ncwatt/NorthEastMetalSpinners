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