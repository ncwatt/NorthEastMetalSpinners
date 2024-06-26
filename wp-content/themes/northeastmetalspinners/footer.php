    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3 class="heading">Get In <span>Touch</span></h3>
                    <p>Whether you are interested in our products or wanting to provide feedback we would love to hear from you.</p>
                    <a href="<?php echo get_permalink( get_page_by_path( '/contact' ) ); ?>" class="button-highlight highlight1">Contact Us</a>
                </div>
                <div class="col-sm">
                    <div class="company-info">
                        <h3 class="heading">North East <span>Metal Spinners</span></h3>
                        <p><i class="fa fa-map-marker highlight3"></i>&nbsp;42 Hutton Close, Crowther Industrial Estate, Washington, Tyne & Wear. NE38 0AH</p>
                        <p><i class="fa fa-phone highlight3"></i>&nbsp;<a href="tel:01914163440" class="highlight3 tel">(0191) 416 3440</a></p>
                        <p><i class="fa fa-clock highlight3"></i>&nbsp;Mon-Wed: 07:00-17:00<br />Thurs: 07:00-16:00</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="news">
                        <h3 class="heading">Our <span>Policies</span></h3>
                        <p>We are currently finalising or privacy and returns policy pages. Links will appear here when completed.</p>
                        <p>
                            If you require this information in the meantime please use our
                            <a href="<?php echo get_permalink( get_page_by_path( '/contact' ) ); ?>">contact page</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="copyright">
                        <p>&copy; Copyright <?php echo date("Y"); ?> North East Metal Spinners Ltd. - All rights reserved.</p>
                        <p>Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a> | Theme by <a href="https://gtctek.co.uk" target="_blank">Gtctek</a> | Admin <a href="/wp-admin">Login</a></p>
                        <a target="_blank" href="#" class="social-icon color-icon border-icon rounded-icon social-icon soc-facebook"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>