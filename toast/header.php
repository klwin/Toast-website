<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!--wordpress head-->
        <?php wp_head(); ?> 
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>
            <header class="page-header page-header-sitebrand-topbar">
                <div class="row main-navigation">
                    <div class="col-md-12">
                        <!--static white navbar-->
                        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                            <!--toggle button when navbar collapse-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootstrap-basic4-topnavbar" aria-controls="bootstrap-basic4-topnavbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-basic4'); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!--put navbar brand-->
                            <a class="navbar-brand" href=""><img src="/wp-content/uploads/2018/01/toast.png" width="30" height="30"></a>

                            <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                                <?php 
                                wp_nav_menu(
                                    array(
                                        'depth' => '2',
                                        'theme_location' => 'primary', 
                                        'container' => false, 
                                        'menu_class' => 'navbar-nav mr-auto', 
                                        'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                    )
                                ); 
                                ?>
                                    <!--put searchbar on navbar-->
                                    <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline my-2 my-lg-0">
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
                                            </div>
                                        </fieldset>
                                    </form>
                                <div class="float-md-right">
                                    <?php dynamic_sidebar('navbar-right'); ?> 
                                </div>
                                <div class="clearfix"></div>
                            </div><!--.navbar-collapse-->
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                </div><!--.main-navigation-->
            </header><!--.page-header-->
            <div id="content" class="site-content row row-with-vspace">