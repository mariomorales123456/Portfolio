function stickymenu(){

    console.log('test');

    var menuElement = $("nav");

    var windowScrollPosition = $(window);

    console.log('test2');

    windowScrollPosition.scroll(function () {
        if (windowScrollPosition.scrollTop() > 120) {
            menuElement.addClass("sticky_menu");	
            console.log('test3');
        } 
        else {
            menuElement.removeClass("sticky_menu");

        }
    });

    console.log('test4');

}



$(document).ready(function(){
    

    stickyMenu();
    
      
    
    
    
    
    
}) 
