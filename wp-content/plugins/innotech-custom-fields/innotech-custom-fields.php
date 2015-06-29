<?php
/**
* Plugin Name: Innovation Technology CustomFields
* Plugin URI: unplugged2d
* Description: This plugin adds some Facebook Open Graph tags to our single posts.
* Version: 1.0.0
* Author: Tostyle
* Author URI: unplugged2d
* License: GPL2
*/

function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init', 'wptp_add_tags_to_attachments' );