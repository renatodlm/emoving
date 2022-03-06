<?php




// Pagination
function new_pagination($post_type_collection, $paged)
{
    $big = 999999999; // need an unlikely integer

    $pagination = paginate_links(array(
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'type' => 'plain',
        'prev_text' => '',
        'next_text' => '',
        'total' => $post_type_collection->max_num_pages
    ));

    if (!empty($pagination)) {
        return '<div class="pagination">' . $pagination . '</div>';
    }
}


// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);


// function my_wp_nav_menu_objects($items, $args)
// {
//     //Aply transition duration
//     if ($args->theme_location == 'menu_footer' || $args->theme_location == 'menu_uteis') :
//         // vars
//         $i = 0;
//         // loop
//         foreach ($items as &$item) {
//             $i = $i + 0.25;

//             $item->title = '<span>' . $item->title . '</span>';
//         }
//     endif;
//     // return
//     return $items;
// }
