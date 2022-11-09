<!DOCTYPE html>
<html <?php language_attributes(); ?>
<?php zebrakatz_schema_type(); ?>>

<!--  

Designed and developed by
 ____  ____  __    ____  _  _          
( ___)( ___)(  )  (_  _)( \/ )         
 )__)  )__)  )(__  _)(_  )  (          
(__)  (____)(____)(____)(_/\_)         
 ____  __  __  _   _  __    ____  ____ 
(  _ \(  )(  )( )_( )(  )  ( ___)(  _ \
 ) _ < )(__)(  ) _ (  )(__  )__)  )   /
(____/(______)(_) (_)(____)(____)(_)\_)

www.felix-buhler.de

-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <?php
    get_header()
        ?>

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();

            comments_template();
        endwhile;
    endif;
    get_template_part('nav', 'below');
    ?>
    <!-- Top Left Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('top-left'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('top-left')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>
    <!-- Top Right Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('top-right'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('top-right')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>
    <!-- Center Left Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('center-left'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('center-left')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>

    <!-- Center Right Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('center-right'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('center-right')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>

    <!-- Bottom Left Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('bottom-left'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('bottom-left')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>

    <!-- Bottom Right Content -->
    <div class="content-box" id="<?php echo strtolower(get_the_title(get_theme_mod('bottom-right'))) ?>">
        <?php
        $page_slug = strtolower(get_the_title(get_theme_mod('bottom-right')));
        $page_data = get_page_by_path($page_slug);
        $page_id = $page_data->ID;
        echo '<div class="headline-wrapper"><h2>' . $page_data->post_title . '</h2></div>';
        echo apply_filters('the_content', $page_data->post_content);
        ?>
    </div>


    <div id="backdrop" style="background: url(<?php echo get_theme_mod('zebrakatz_background_image'); ?>), var(--color-black);">
    </div>

    <?php
    get_footer()
        ?>
</body>