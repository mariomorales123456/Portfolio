$(document).ready(function(){
    

  $(window).on("scroll", function(){
    if( $(window).scrollTop() >= 110) {
        
        
        $("#projectStickyMenu").addClass("sticky");
    }
    else {
        $("#projectStickyMenu").removeClass("sticky");
    }
   
})    
    
$("#projectNavList li").click(function(){
    
    $("#projectNavList").children(".clicked").removeClass("clicked")
    $(this).addClass("clicked");
    
    
    
   
})
    
      
    
    
    
    
    
}) /*document ready closing brackets*/
