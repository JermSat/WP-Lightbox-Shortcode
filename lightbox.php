//Add this to functions.php
//Lightbox Shortcode

function lightbox_shortcode_callback( $atts,  $content = null ) {
 
    $atts = shortcode_atts( array(
        'name' => 'click Here', //Default shortcode button text
        'button' => 'sc-button'
    ), $atts, 'lightbox' );
 
    $button = '<div class="sc-lightbox-button"><a href="#" class="' . trim($atts['button']) . '">' . $atts['name'] . '</a></div>';
 
    $lightbox_content = $button . '<div class="sc-lightbox"><div class="sc-lightbox-outer"><div class="sc-close-lightbox close-pop"></div><div class="sc-lightbox-inner"><div class="sc-lightbox-content">' . $content . '</div></div></div></div>';
 
    return $lightbox_content;
}
add_shortcode( 'lightbox', 'lightbox_shortcode_callback' );