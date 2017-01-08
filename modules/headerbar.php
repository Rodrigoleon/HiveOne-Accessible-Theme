<header class="navbar navbar-default" role="banner">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>" lang="fr"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 322.65 345.23" role="presentation" aria-hidden="true"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:url(#linear-gradient);}</style><linearGradient id="linear-gradient" x1="161.07" y1="38.68" x2="161.07" y2="309.2" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="0.03" stop-color="#efeef2" stop-opacity="0"/><stop offset="0.99" stop-color="#262262" stop-opacity="0.3"/></linearGradient></defs><title>JQ_Logo1</title><path class="cls-1" d="M251.78,132.57a97.68,97.68,0,0,0-4-28.36c-3.81-12.54-16.68-45.11-51.25-59.34-32.9-13.54-62.82-1.14-70.63,2.25-9.35,4.05-35.24,17.07-48.05,46.31-7.9,18-7.3,34.06-6.74,44.5C72.56,165.78,83,186.4,92.66,204A845.68,845.68,0,0,0,161.44,309.2C182.85,283,209.38,246.75,231.57,204,242.55,182.86,252.2,160.63,251.78,132.57Zm-90.71,66.16a69.52,69.52,0,1,1,69.52-69.52A69.52,69.52,0,0,1,161.07,198.73Z"/><path class="cls-1" d="M195.31,123.71a5.94,5.94,0,0,0-4.58-1.78l-20.67,1.15,11.38-13a7,7,0,0,0,1.46-6.51,5.9,5.9,0,0,0-2.64-3.75l-27.2-15.8a5.93,5.93,0,0,0-6.92.7L132.86,96.59a5.93,5.93,0,1,0,7.89,8.85l10.06-9,8.31,4.83L144.45,118a30.24,30.24,0,0,0-15.86,7.84l7.66,7.66A19.49,19.49,0,0,1,163.79,161l7.66,7.66a30.32,30.32,0,0,0,5.15-34.11l8-.45L182.65,158a5.93,5.93,0,0,0,5.43,6.39l0.49,0a5.93,5.93,0,0,0,5.9-5.45l2.5-30.66A5.93,5.93,0,0,0,195.31,123.71Z"/><path class="cls-1" d="M184.33,98.31a9.93,9.93,0,1,0-9.93-9.93A9.92,9.92,0,0,0,184.33,98.31Z"/><path class="cls-1" d="M149.36,167.43A19.49,19.49,0,0,1,133.23,137l-7.75-7.75A30.31,30.31,0,0,0,168,171.81l-7.75-7.75A19.39,19.39,0,0,1,149.36,167.43Z"/><path class="cls-2" d="M251.56,132.57a97.68,97.68,0,0,0-4-28.36c-3.81-12.54-16.68-45.11-51.25-59.34-32.9-13.54-62.82-1.14-70.63,2.25-9.35,4.05-35.24,17.07-48.05,46.31-7.9,18-7.3,34.06-6.74,44.5,1.47,27.85,11.9,48.48,21.58,66.08A845.68,845.68,0,0,0,161.22,309.2C182.63,283,209.16,246.75,231.35,204,242.33,182.86,252,160.63,251.56,132.57Zm-90.71,66.16a69.52,69.52,0,1,1,69.52-69.52A69.52,69.52,0,0,1,160.85,198.73Z"/></svg><?php bloginfo('name'); ?></a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'items_wrap' => '<nav  id="bs-example-navbar-collapse-1" class="collapse navbar-collapse"><ul id="%1$s" class="%2$s" role="menu" >%3$s</ul></nav>',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</header>
<?php if ( is_home() || is_front_page() ) {} else { ?>
    <?php if ( get_header_image() ) : ?>
    <?php
        /**
         * Filter the default twentysixteen custom header sizes attribute.
         *
         * @since Twenty Sixteen 1.0
         *
         * @param string $custom_header_sizes sizes attribute
         * for Custom Header. Default '(max-width: 709px) 85vw,
         * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
         */
        $custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
    ?>
    <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div><!-- .header-image -->
    <?php endif; // End header image check. ?>
<?php } ?>