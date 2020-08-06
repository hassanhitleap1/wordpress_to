<?php

/**
 * trigger this file unnstall plugin
 */

defined('WP_UNINDTALL_PLUGIN') or die('');

//$posts=get_posts(array('post_type'=>"books",'numberposts'=>-1));
//foreach ($posts as $post){
//    wp_delete_post($post->ID ,true);
//}

global  $wpdb;
$wpdb->query("delete from wp_postmeta where post_id in (select id from wp_post where post_type='books')");
$wpdb->query("delete from wp_term_relationships where object_id in (select id from wp_post where post_type='books')");
$wpdb->query("delete  from wp_post where post_type='books'");