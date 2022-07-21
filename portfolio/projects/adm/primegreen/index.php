<?php include('/app/portfolio/global_variables.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>



<div class="gradient_title">
       <h1><a href="https://www.primegreen.us/" class="hover_underline_animation">Primegreen</a></h1>
</div>

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="__id__" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">___title___</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="__imageurl___" target="_blank"><img class="img-fluid" src="__imageurl___" alt="__ALT__"></a><figcaption class="text-center">Click <a href="__Urlwebsite___" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
        <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>__issues___</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>__fixes__</li>
                    <li>__fixes__</li>
                    <li>__fixes__</li>
                    <li>__fixes__</li>
                    <li>__fixes__</li>
                 </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 


    

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>