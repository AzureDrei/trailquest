<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header-default">
    <nav class="navbar navbar-expand-lg site-navbar-default">
        <div class="container">

            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                TRAILQUEST
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
                aria-controls="mainNavigation"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/explore/')); ?>">
                            Explore
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/about/')); ?>">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php
                            echo esc_url(
                                function_exists('wc_get_page_permalink')
                                    ? wc_get_page_permalink('shop')
                                    : home_url('/shop/')
                            );
                        ?>">
                            Shop
                        </a>
                    </li>

                    <?php if ( function_exists('wc_get_cart_url') ) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(wc_get_cart_url()); ?>">
                                Cart
                                <span class="cart-count">
                                    (<?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>)
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>

                </ul>

            </div>
        </div>
    </nav>
</header>