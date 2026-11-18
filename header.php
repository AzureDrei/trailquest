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
                data-bs-target="#mainNavigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Shop</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>