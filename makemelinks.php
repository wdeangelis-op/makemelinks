<?php
/**
 * Plugin Name: Make Me Links
 * Plugin URI: http://makemelinks.williamdeangelis.com
 * Description: Make Me Links is a simple plugin that scours your content looking for text URL's to turn into links. Once it finds one, it analyzes the type of link it is to see if it should open in a new window / tab or itself. Site URL's open in self. External URL's open in a new tab / window.
 * Version: 1.0
 * Author: William DeAngelis
 * Author URI: http://williamdeangelis.com
 * License: Free for use under GPLv2
 */

wp_enqueue_script('jquery');

function make_me_links_js() {
    echo '<script>
	jQuery(document).ready(function()
	{
		jQuery(".entry-content a[href^=\'http://\']").attr("target","_blank");
		jQuery(".entry-content a[href^=\'http://williamdeangelis.com\']").attr("target","_self");
	});
	</script>';
}

add_action('wp_head', 'make_me_links_js');

add_filter( 'the_content', 'make_clickable' );