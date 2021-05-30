<footer>
    <div class="container">
        <div class="row footer-top justify-content-center">
            <div class="col-lg-5 contact">
                <div class="row">
                    <div class="col-md-4 snowflake-icon">
                        <img class="" src="<?php echo get_theme_file_uri('/images/footerlogo.png') ?>" alt="Apartments">
                    </div>
                    <div class="col-md-5">

                        <p class="bold">Contact</p>
                        <p>Snowflake Co.<br />
                            4804 Blackwell Street <br />
                            Dry Creek 99737, AK <br />
                            <a class="mail" href="mailto:office@snowflake.com">office@snowflake.com</a> <br />
                            <a class="tel" href="tel:19072008318">+1 907-200-8318</a>
                        </p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="col-lg-7 footer-nav">
                <div class="row">
                    <div class="col-md-4">
                        <p class="bold">Navigation</p>
                        <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
                    </div>
                    <div class="col-md-4">
                        <p class="bold">Connect</p>
                        <ul>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <p class="bold">Connect</p>
                        <ul>
                            <li>
                                <a href="#">Terms and conditions</a>
                            </li>
                            <li>
                                <a href="#">Legal</a>
                            </li>
                            <li>
                                <a href="#">Pattents</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom">
            <div class="col-md-12">
            © Snowflake Co. – 2021
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>