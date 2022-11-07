<header>
    <div class="logo">
        <h1>Zebra Katz</h1>
    </div>

</header>

<nav id="navigation">
    <ul>
        <li class="navigation-item top left <?php echo strtolower(get_the_title(get_theme_mod('top-left'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('top-left'))) ?>">
            <?php echo get_the_title(get_theme_mod('top-left')); ?>
        </li>
        <li class="navigation-item top right <?php echo strtolower(get_the_title(get_theme_mod('top-right'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('top-right'))) ?>">
            <?php echo get_the_title(get_theme_mod('top-right')); ?>
        </li>

        <li class="navigation-item center left <?php echo strtolower(get_the_title(get_theme_mod('center-left'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('center-left'))) ?>">
            <?php echo get_the_title(get_theme_mod('center-left')); ?>
        </li>
        <li class="navigation-item center right <?php echo strtolower(get_the_title(get_theme_mod('center-right'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('center-right'))) ?>">
            <?php echo get_the_title(get_theme_mod('center-right')); ?>
        </li>

        <li class="navigation-item bottom left <?php echo strtolower(get_the_title(get_theme_mod('bottom-left'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('bottom-left'))) ?>">
            <?php echo get_the_title(get_theme_mod('bottom-left')); ?>
        </li>
        <li class="navigation-item bottom right <?php echo strtolower(get_the_title(get_theme_mod('bottom-left'))) ?>"
            title="<?php echo strtolower(get_the_title(get_theme_mod('bottom-right'))) ?>">
            <?php echo get_the_title(get_theme_mod('bottom-right')); ?>
        </li>

    </ul>

</nav>