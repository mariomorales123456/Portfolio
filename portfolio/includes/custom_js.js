function stickymenu(){

    var menuElement = jQuery("nav");

    var windowScrollPosition = jQuery(window);

    windowScrollPosition.scroll(function () {
        if (windowScrollPosition.scrollTop() > 120) {
            menuElement.addClass("sticky_menu");	
        } 
        else {
            menuElement.removeClass("sticky_menu");

        }
    });


}



$(document).ready(function(){
    

    stickyMenu();
    
      
    
    
    
    
    
}) 
