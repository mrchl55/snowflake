<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function initMap(){
  //
}
</script>
    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="container-fluid masthead">
            <div class="container masthead-inner">
            <div class="row justify-content-md-space-between">
                <div class="col-md-4 logo">
                    <img src="<?php echo get_theme_file_uri('/images/Vector Smart Object@1X.png') ?>" />
                </div>
                <div class="col-md-8 nav-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
wp_nav_menu( array( 'theme_location' => 'primary_menu' ) );
?>
</nav>
                
                </div>
            </div>
</div>
        </div>
    </header>