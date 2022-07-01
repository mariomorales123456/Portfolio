<?php include('/app/portfolio/global_variables.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="front_page_header" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Front Page Header</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_1.jpg" target="_blank"><img class="img-fluid" src="images/front_page_1.jpg" alt="adm website header"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues with old header:</p>
                <p><ul>
                    <li>Not centered</li>
                    <li>Assymetrical</li>
                    <li>An older version of the megamenu was being used (oxygen editor tool) which made it somewhat buggy</li>
                    <li>The sticky function wasn't working</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Used flexbox to perfectly center elements, special attention to margin and width for each one</li>
                    <li>Made sure the description for the menu items were about the same characters</li>
                    <li>Started from fresh with the oxygen editor tool megamnu to refresh all the code</li>
                    <li>There is two headers one for mobile and one for desktop, the "sticky" feature on the oxygen component didn't work, so I went on to make a custom script to control it</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="banner_ad" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Banner Ad</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_2.jpg" target="_blank"><img class="img-fluid" src="images/front_page_2.jpg" alt="banner ad"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>The issue: Visual customers were not exploring the nav menu</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Took highlights from the navbar to redirect customers to specific pages</li>
                    <li>Scroll only customers would see a picture visual with a link redirect that would entice them to continue on the website</li>
                    <li>Hover effects to make it interactive</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="superbox" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Superbox</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_3.jpg" target="_blank"><img class="img-fluid" src="images/front_page_3.jpg" alt="superbox feature"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>While it worked at one point, the editor updated and hover title is no longer working</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The old system was based on hover -> secondary element would z-index to the front of the hovered element</li>
                    <li>JS script to change z-index with addClass removeClass to change z-index</li>
                    <li>Only issue is hover effects no longe recognize the hovered element when another z-indexes on top</li>
                    <li>Changed script to move the z-index up and then wait for leave element to lower the index, firing only once and removing the trigger aftewards so its effectively :hover</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="review_banner" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Review Banner</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_4.jpg" target="_blank"><img class="img-fluid" src="images/front_page_4.jpg" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>ADM has great reviews on several websites but no advertising for it</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Simple links and icons can be used to shape a review banner</li>
                    <li>Confidence from so many reviews is should to help buyers shop</li>
                    <li>Only requires some CSS for the links to shape them in to buttons</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="image_grid_1" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Image Grid 1</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_5.jpg" target="_blank"><img class="img-fluid" src="images/front_page_5.jpg" alt="icon grid"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Previous grid was created using raw HTML/CSS and the source images were from other websites</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Screenshot the icons to use through own server</li>
                    <li>Use oxygen editor to manage the styling of the grid</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 



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
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>__INSERT_LIST_HERE__</p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 
    




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
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>__INSERT_LIST_HERE__</p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 
    
    

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>