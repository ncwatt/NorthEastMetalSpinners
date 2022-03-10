    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="news">
                        <h3 class="heading">Latest <span>News</span></h3>
                        <?php
                            $news = new WP_Query( array( 'category_name' => 'news' ) );
                            $post_counter = 0;

                            if ( $news->have_posts() ) {
                                while ( $news->have_posts() and $post_counter < 2 ) {
                                    $news->the_post();?>
                                    <h4><a href="<?php echo get_post_permalink( $id, $leavename, $sample ); ?>" class="post_title"><?php the_title(); ?></a></h4>
                                    <p><? echo get_the_excerpt() ?></p>
                                    <p class="post_date"><?php echo get_the_date( 'F j, Y' ); ?></p>
                                    <?php
                                    $post_counter++;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="company-info">
                        <h3 class="heading">Partscale <span>Ltd.</span></h3>
                        <p><i class="fa fa-map-marker highlight3"></i>&nbsp;42 Hutton Close, Crowther Industrial Estate, Washington, Tyne & Wear. NE38 0AH</p>
                        <p><i class="fa fa-phone highlight3"></i>&nbsp;<a href="tel:01914163440" class="highlight3 tel">(0191) 416 3440</a></p>
                        <p><i class="fa fa-clock highlight3"></i>&nbsp;Mon-Fri: 08:00-17:00</p>
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="heading">Get In <span>Touch</span></h3>
                    <p>Whether you are interested in our products or wanting to provide feedback we would love to hear from you.</p>
                    <a href="#" class="button-highlight highlight1">Contact Us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="copyright">
                        <p>&copy; Copyright <?php echo date("Y"); ?> Partscale Ltd., trading as North East Metal Spinners - All rights reserved.</p>
                        <p>Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a> | Theme by <a href="https://gtctek.co.uk" target="_blank">Gtctek</a> | Admin <a href="/wp-admin">Login</a></p>
                        <a target="_blank" href="#" class="social-icon color-icon border-icon rounded-icon social-icon soc-facebook"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>