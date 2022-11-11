<header>
    <div class="logo">

        <h1 id="logo">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 250.2 157.8"
                style="enable-background:new 0 0 250.2 157.8;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: var(--color-red);
                        width: 100%;
                        height: 100%;
                    }

                    h1#logo.open .st0 {
                        fill: var(--color-black);

                    }
                </style>
                <path class="st0" d="M151.3,1.3v74.6h11V44.1h14.4l6.4,31.8h11.2l-6.6-32.7c12.2-3.2,16.5-14,16.9-20.2l0-21.7H151.3z M193.7,22.4
	c-0.1,1.4-1.2,7.7-8.2,10l-1.9-9.5h-11.1v0.6l2,9.7h-12.2V12.3h31.4V22.4z M197.4,75.9h52.8L223.8,0.4L197.4,75.9z M211.3,65.9
	l12.2-36.8l12.8,36.8H211.3z M80.5,157.8H70.2l-13.1-43.1l-0.2,0.2l-0.3-0.9l-8.9,11.7v32.1h-11V83.6h11v27.2l21-27.2h10.6
	l-15.2,20.3L80.5,157.8z M139.9,28c0.3-1.6,0.5-3.3,0.5-5.1c0-16.3-13.9-22.1-21.3-22.9l-17.2,0v75.9h19c15.3,0,27.8-12.4,27.8-27.7
	C148.7,40.2,145.3,33.1,139.9,28z M112.9,11h5.3c1.6,0.2,10.5,1.9,11.2,10.8c-2.7-0.9-5.5-1.3-8.5-1.3h-8V11z M112.9,31.5h8
	c1.5,0,2.9,0.2,4.3,0.5c-2.7,2.2-6,2.9-7.1,3.1h-5.2V31.5z M120.9,64.9h-8V46.1h5.6l0.7,0c4.2-0.5,10.7-2.7,15.3-7.7
	c2,2.8,3.2,6.1,3.2,9.8C137.7,57.4,130.2,64.9,120.9,64.9z M135.6,157.7l-26.5-75.1l-25.2,71.6l-1.2,3.5H135.6z M121.7,147.7h-25
	l12.2-36.6L121.7,147.7z M18.7,64.9h30.8v11H0L17.7,44h-5.9V33h12l11.6-21H6V1h48L36.3,33h6.4v11H30.2L18.7,64.9z M85.5,12l10.7,0V1
	H85.7c-1.2,0-9.5,0.1-15.6,6.1c-2.7,2.6-5.9,7.4-5.9,15.3c0,4.1,0.8,7.7,2.4,10.8h-13v42.7h42.6v-11H64.6V44.2h31.6v-11H85.4
	c-2.4-0.1-10.2-1-10.2-10.8c0-3.3,0.8-5.8,2.5-7.4C80.7,12,85.5,12,85.5,12z M150.9,98.1l0-14.5l-10,0l0,14.5H130v10h10.9l-0.1,49.6
	l10,0l0.1-49.6h10.8v-10H150.9z M189,126.2h12.5v-11h-6.3l17.7-31.6h-48.1v11h29.3l-11.5,20.6h-12.1v11h5.9l-17.7,31.6h49.5v-11
	h-30.7L189,126.2z" />
            </svg>

            <!-- <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (has_custom_logo()) {
                echo '<h1 id="logo"><div  style="background: url(' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . ')"><img src="' . esc_url($logo[0]) . '"></div></h1>';
            } else {
                echo get_bloginfo('name');
            }
            ?> -->
        </h1>
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