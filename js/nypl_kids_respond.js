/**
 * @todo
 */

(function($) {
  /**
   * This is needed for a little extra flexibility in defining our default active menu item
   * if Drupal isn't by default. If nothing is labeled as active, then we'll make the first link 
   * active (which is usually the home link
   */
  Drupal.behaviors.respondActiveMenu = {
    attach: function (context) {
      var activeMenu = $('nav ul.main-menu li.active, nav ul.main-menu li.active-trail').size();
      //console.log(activeMenu);
      //if (activeMenu == '0') {
        //$('nav ul.main-menu li:first-child').addClass('active').children('a:first-child').addClass('active');
      //}
    }
  };

})(jQuery);


(function($){
  /**
   * @todo
   * Views will make the last URL param the title of the node, but it will not format it. 
   */
  $(document).ready(function(){
    var pageTitleText = $('#page-title').text();
    if(pageTitleText == 'Websites_Frontpage'){
      $('#page-title').html('Websites for Kids');
    }else if(pageTitleText == 'front-page'){
      $('#page-title').hide();;
    }else{
      $('#page-title').html(pageTitleText.replace(/_/g, ' '));
    }
  });
})(jQuery);
