<?php

function add_admin_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        // Créer le nouvel élément de menu
        $new_item = '<li id="menu-item-477"><a href="/wp-admin/"><span>Admin</span></a></li>';

        // Initialiser un compteur
        $counter = 0;

        // Parcourir les éléments du menu existant
        $menu_items = explode('</li>', $items);
        foreach ($menu_items as &$menu_item) {
            $menu_item .= '</li>';
            $counter++;
            
            // Insérer le nouvel élément après le premier élément du menu (2e position)
            if ($counter === 1) {
                $menu_item .= $new_item;
            }
        }

        // Joindre les éléments du menu dans une seule chaîne
        $items = implode('', $menu_items);
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_item_to_nav_menu', 10, 2);

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
?>

