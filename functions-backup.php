<?php
add_action('after_setup_theme', 'zebrakatz_setup');
function zebrakatz_setup()
{
    load_theme_textdomain('zebrakatz', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'editor-styles' );
    add_editor_style( get_template_directory() . 'style.css' );
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('woocommerce');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'zebrakatz')));
}
add_action('admin_notices', 'zebrakatz_notice');
function zebrakatz_notice()
{
    $user_id = get_current_user_id();
    $admin_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $param = (count($_GET)) ? '&' : '?';
    if (!get_user_meta($user_id, 'zebrakatz_notice_dismissed_7') && current_user_can('manage_options'))
        echo '<div class="notice notice-info"><p><a href="' . esc_url($admin_url), esc_html($param) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__('Ⓧ', 'zebrakatz') . '</big></a>' . wp_kses_post(__('<big><strong>📝 Thank you for using zebrakatz!</strong></big>', 'zebrakatz')) . '<br /><br /><a href="https://wordpress.org/support/theme/zebrakatz/reviews/#new-post" class="button-primary" target="_blank">' . esc_html__('Review', 'zebrakatz') . '</a> <a href="https://github.com/tidythemes/zebrakatz/issues" class="button-primary" target="_blank">' . esc_html__('Feature Requests & Support', 'zebrakatz') . '</a> <a href="https://calmestghost.com/donate" class="button-primary" target="_blank">' . esc_html__('Donate', 'zebrakatz') . '</a></p></div>';
}
add_action('admin_init', 'zebrakatz_notice_dismissed');
function zebrakatz_notice_dismissed()
{
    $user_id = get_current_user_id();
    if (isset($_GET['dismiss']))
        add_user_meta($user_id, 'zebrakatz_notice_dismissed_7', 'true', true);
}
add_action('wp_enqueue_scripts', 'zebrakatz_enqueue');
function zebrakatz_enqueue()
{
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Caladea:ital@0;1&display=swap'); 
    wp_enqueue_style('zebrakatz-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    get_template_directory_uri() . ('/js/zebrakatz.js'); } 
    
    add_action('wp_footer', 'zebrakatz_footer');
add_action('wp_footer', 'zebrakatz_footer');
function zebrakatz_footer()
{
?>
<script>
    jQuery(document).ready(function ($) {
        var deviceAgent = navigator.userAgent.toLowerCase();
        if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
            $("html").addClass("ios");
            $("html").addClass("mobile");
        }
        if (deviceAgent.match(/(Android)/)) {
            $("html").addClass("android");
            $("html").addClass("mobile");
        }
        if (navigator.userAgent.search("MSIE") >= 0) {
            $("html").addClass("ie");
        }
        else if (navigator.userAgent.search("Chrome") >= 0) {
            $("html").addClass("chrome");
        }
        else if (navigator.userAgent.search("Firefox") >= 0) {
            $("html").addClass("firefox");
        }
        else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            $("html").addClass("safari");
        }
        else if (navigator.userAgent.search("Opera") >= 0) {
            $("html").addClass("opera");
        }
    });
</script>
<?php } add_filter('document_title_separator', 'zebrakatz_document_title_separator'); function
    zebrakatz_document_title_separator($sep)
{
    $sep=esc_html('|');
    return $sep; } add_filter('the_title',
    'zebrakatz_title'); function zebrakatz_title($title)
{
    if ($title=='') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    } } function zebrakatz_schema_type()
{
    $schema='https://schema.org/';
    if (is_single()) {
        $type="Article";
    } elseif (is_author()) {
        $type='ProfilePage';
    } elseif (is_search()) {
        $type='SearchResultsPage';
    } else {
        $type='WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"'; } add_filter('nav_menu_link_attributes', 'zebrakatz_schema_url', 10); function
    zebrakatz_schema_url($atts)
{
    $atts['itemprop']='url';
    return $atts; } if (!function_exists('zebrakatz_wp_body_open')) {
    function zebrakatz_wp_body_open()
    {
        do_action('wp_body_open');
    } } add_action('wp_body_open', 'zebrakatz_skip_link', 5); function zebrakatz_skip_link()
{
    echo '<a href="#content"
    class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'zebrakatz') . '</a>'; } add_filter('the_content_more_link', 'zebrakatz_read_more_link'); function zebrakatz_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'zebrakatz'),
    '<span class="screen-reader-text"> ' . esc_html(get_the_title()) . '</span>') . '</a>';
    } } add_filter('excerpt_more', 'zebrakatz_excerpt_read_more_link'); function zebrakatz_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' .
    sprintf(__('...%s', 'zebrakatz'), '<span class="screen-reader-text"> ' . esc_html(get_the_title()) . '</span>') . '</a>';
    } } add_filter('big_image_size_threshold', '__return_false'); add_filter('intermediate_image_sizes_advanced', 'zebrakatz_image_insert_override'); function
    zebrakatz_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes; } add_action('widgets_init', 'zebrakatz_widgets_init'); function
    zebrakatz_widgets_init()
{
    register_sidebar(
        array(
            'name'=> esc_html__('Sidebar Widget Area', 'zebrakatz'),
            'id'=> 'primary-widget-area',
            'before_widget'=> '<li id="%1$s" class="widget-container %2$s">',
            'after_widget'=>
    '</li>',
            'before_title'=> '<h3 class="widget-title">',
            'after_title'=> '</h3>',
        )
    ); } add_action('wp_head',
    'zebrakatz_pingback_header'); function zebrakatz_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    } } add_action('comment_form_before', 'zebrakatz_enqueue_comment_reply_script'); function
    zebrakatz_enqueue_comment_reply_script()
{     if (get_option('thread_comments')) {         wp_enqueue_script(
   'comment-reply');     } } function zebrakatz_custom_pings($comment)
{ ?>
    
               
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
<?php
}
add_filter('get_comments_number', 'zebrakatz_comment_count', 0);
function zebrakatz_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}