<?php echo( $rootPath . 'includes/head.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>

<div class="gradient_title">
       <h1>ADM Projects</h1>
</div>

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="__________INSERT_ID_HERE_________" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">______INSERT_TITLE_HERE________</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="__INSERT_IMAGE_HERE__" target="_blank"><img class="img-fluid" src="__INSERT_IMAGE_HERE_" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="__INSERT_WEBSITE_HERE__" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>
            <div class="row reflection">  <!-- /*reflection container*/ -->
                <div class="col">
                    <h3 class="text-center">Notes</h3>  
                    <p>__INSERT_REFLECTION_HERE__</p>
                </div>
            </div>     
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Requirements</h3>  
                <p>__INSERT_LIST_HERE__</p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>