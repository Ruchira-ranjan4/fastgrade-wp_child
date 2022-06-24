<?php
/*
Template Name:tutors-booking-requests
*/



get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

                <h3>Welcome, Fastgrade</h3>
                <nav class="navbar navbar-expand-md" role="navigation">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'Tutoring_request-menu',
            'depth'             => 2,
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'nav-side-menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
				</nav>
            </div>

            <div class="col-sm-6">
            <h1 class="headings">ALL BOOKINGS</h1>
            </div>
           
        </div>
    </div>

</section>
<?php get_footer(); ?>