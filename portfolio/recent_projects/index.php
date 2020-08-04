<?php include('../includes/header.php'); ?>
    
<main>

<div class="gradient_title">
       <h1>Recent Projects</h1>
</div>

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="link_1" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Responsive Component</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="__INSERT_IMAGE_HERE__" target="_blank"><img class="img-fluid" src="__INSERT_IMAGE_HERE_" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="sdg_package/sdg_project/component.html" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Requirements</h3>  
                <?php include('sdg_package/README.php'); ?>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

</main>
    
<?php include('../includes/javascript.php'); ?>

</body>
</html>