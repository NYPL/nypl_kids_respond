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
 
function nypl_kids_respond_form_alter(&$form, &$form_state, $form_id) {
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

function nypl_kids_respond_preprocess_html(&$vars) {
  //$vars['head_title'] = str_replace("_", " ", $vars['head_title']);
  $title_tag = str_replace("_", " ", $vars['head_title']);
  $vars['head_title'] = str_replace("| Kids!", "| NYPL Kids", $title_tag);
}








 


