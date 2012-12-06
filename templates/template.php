<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
lk * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
function respond_form_alter(&$form, &$form_state, $form_id) {
  switch($form_id) {
    /**
      * Make some adjustments to the login form to use HTML5 Placeholder values. 
      * They can be easily changed as they are wrapped in the t() function
      * or you can simply copy this function to your sub theme and change the values
      */
  
  case 'user_login_block':
    $form['name']['#attributes']['placeholder'] = t('Username…');
    $form['pass']['#attributes']['placeholder'] = t('Password...');
    break;
    
  case 'search_block_form':
    $form['search_block_form']['#attributes']['placeholder'] = t('Search…');
    break;
  }
}

function respond_preprocess_node(&$vars) {
  /**
    * if user pictures are enabled on nodes, inject them with the body field
    */
  if(isset($vars['user_picture']) && isset($vars['content']['body'][0]['#markup']) && !$vars['teaser']) {
    $vars['content']['body'][0]['#markup'] = $vars['user_picture'] . $vars['content']['body'][0]['#markup'];
  }

  $alias = drupal_lookup_path('alias', arg(0) . '/' . arg(1));
  
  //  debug(menu_get_active_trail());
  //  debug(menu_get_item());

  if(strstr($alias, 'for-parents/children-s-literature-blogs-at-nypl/')){
    //    debug(menu_tree_all_data('main-menu'));
    $current_menu_item = menu_get_item();
    $current_menu_item['href'] = 'for-parents/children-s-literature-blogs-at-nypl';
    $current_menu_tiem['tab_root_href'] = 'for-parents';
    //menu_set_item(NULL, $current_menu_item);
    //debug(menu_get_item());
    //global $base_url;
    //$current_menu = menu_get_active_trail();
    //debug($current_menu);

    //$current_menu[0]['href'] = $base_url . '/'. drupal_lookup_path('alias', arg(0) . '/' . arg(1));
    //$current_menu[0]['link_path'] = drupal_lookup_path('alias', arg(0) . '/'. arg(1));

    $current_menu[1]['menu_name'] = 'main-menu';
    $current_menu[1]['link_path'] = 'for-parents';
    $current_menu[1]['router_path'] = 'for-parents';
    $current_menu[1]['link_title'] = 'For Parents';
    $current_menu[1]['tab_parent'] = 'for-parents';
    $current_menu[1]['mlid'] = 376;
    //menu_set_active_trail($current_menu);
    //debug(menu_get_active_trail());
    //menu_tree_set_path('for-parents', NULL);
    
    //$menu_item = menu_get_item();
    //$menu_item['href'] = drupal_lookup_path('alias', arg(0) . '/' . arg(1));
    //menu_set_item(NULL, $menu_item);
    //    debug($menu_item);
    //    menu_set_active_trail($current_menu);
  }

}









 


