<?php get_header() ?>
<?php while (have_posts()) {
    the_post(); ?>


    <div class="container-fluid ">
        <section class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/houses-building-blue-sky-appartments-87223@1X.png') ?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>LOREM IPSUM DOLOR</h2>
                            <h3>sit amet consectetur adipiscing.</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/houses-building-blue-sky-appartments-87223@1X.png') ?>" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>LOREM IPSUM DOLOR</h2>
                            <h3>sit amet consectetur adipiscing.</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/houses-building-blue-sky-appartments-87223@1X.png') ?>" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>LOREM IPSUM DOLOR</h2>
                            <h3>sit amet consectetur adipiscing.</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><img class=" w-100" src="<?php echo get_theme_file_uri('/images/←@1X.png') ?>" alt="previous arrow"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><img class=" w-100" src="<?php echo get_theme_file_uri('/images/→ copy@1X.png') ?>" alt="next arrow"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="site-content">
            <div class="container">

                <div class="row justify-content-center perfect-place">
                    <div class="col-lg-5 perfect-place-desc">
                        <h4>Perfect place</h4>
                        <h5 class="title">Title</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu viverra est, sit amet pellentesque arcu. Pellentesque id ullamcorper dolor. Morbi finibus ullamcorper tellus, at eleifend mi scelerisque at. Cras sollicitudin purus sit amet venenatis facilisis. Nam at nisi metus. Sed quis urna pulvinar, condimentum turpis vel, scelerisque tortor.</p>
                        <button type="button" class="btn btn-light">View project</button>
                    </div>
                    <div class="col-lg-7 small-carousel">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo get_field('slide_1')['url']?>" alt="First slide">

                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php  echo get_field('slide_2')['url'] ?>" alt="Second slide">

                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_field('slide_3')['url'] ?>" alt="Third slide">

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><img class=" w-100" src="<?php echo get_theme_file_uri('/images/←@1X.png') ?>" alt="previous arrow"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><img class=" w-100" src="<?php echo get_theme_file_uri('/images/→ copy@1X.png') ?>" alt="next arrow"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center apartments">
                    <div class="col-lg-12 apartments-heading">
                        <h4>Apartments & Houses</h4>
                    </div>
                    <div class="col-lg-6 apartments-desc">
                        <img class="" src="<?php echo get_theme_file_uri('/images/Fill 8@1X.png') ?>" alt="Apartments">
                        <h6>Apartments & Houses</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="col-lg-6 apartments-list">
                        <ul>
                            <li class="item-apartments">
                
                                <img class="" src="<?php echo get_theme_file_uri('/images/Fill 8 (1).svg') ?>" alt="Apartments">
                                <a>Apartments & Houses</a>
                            </li>
                            <li class="item-blueprints"><img class="" src="<?php echo get_theme_file_uri('/images/Fill 7.svg') ?>" alt="Apartments"><a>Blueprints</a></li>
                            <li class="item-floor"><img class="" src="<?php echo get_theme_file_uri('/images/Fill 10.svg') ?>" alt="Apartments"><a >Floor</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 caro">
                        <div class="owl-carousel owl-theme">
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/sun-piercing-of-brown-concrete-house-near-sea-1732414@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-estate-exterior-280222@1X.png') ?>" alt="Apartments">
                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>
                            <div class="item"> <img class="" src="<?php echo get_theme_file_uri('/images/architecture-clouds-daylight-driveway-259588@1X.png') ?>" alt="Apartments">

                            </div>


                        </div>
                    </div>
                </div>
                <div class="row about-us justify-content-center">
                    <div class="col-lg-6 about-us-img" style="background-image:url(<?php echo get_theme_file_uri('/images/2-man-on-construction-site-during-daytime-159306@1X.png') ?>)">

                    </div>
                    <div class="col-lg-6 about-us-desc" data-aos="fade-left">
                        <h4>About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
              
                    </div>

                </div>
                <div class="row justify-content-center map" id="map">
                        <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2366.306358273678!2d10.69294771574133!3d53.62367538003805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b2000a1072f57b%3A0xbd82a774440a7380!2s1connect%20Software%20GmbH!5e0!3m2!1sen!2spl!4v1613260918411!5m2!1sen!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
            </div>
    </div>
    </section>
<?php }

get_footer(); ?>