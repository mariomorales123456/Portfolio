function stickymenu(){

    var menuElement = $("nav");

    var windowScrollPosition = $(window);

    windowScrollPosition.scroll(function () {
        if (windowScrollPosition.scrollTop() > 120) {
            menuElement.addClass("sticky_menu");	
            console.log("test2");
        } 
        else {
            menuElement.removeClass("sticky_menu");

        }
    });

}



$(document).ready(function(){
    
    console.log("test");

    stickyMenu();
    
      
    
    
    
    
    
}) 
