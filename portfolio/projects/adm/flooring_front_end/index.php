<?php include('/app/portfolio/global_variables.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>


<div class="gradient_title">
       <h1>ADM Flooring Front End</h1>
</div>

<!--///////////////////////// SECTION START /////////////////////////////////// #1 -->   
<section id="affiliate_program" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Affiliate Program</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/affiliate_program.jpg" target="_blank"><img class="img-fluid" src="images/affiliate_program.jpg" alt="affiliate program image"></a><figcaption class="text-center">Click <a href="admflooring.com/affiliate-links" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>No backend or frontend for the affiliate program or discounts provided through it</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>First step was to find a plugin for discounts that allowed custom coupons</li>
                    <li>After finding a pluign for that purpose, there was some backend work for wordpress & woocommerce</li>
                    <li>Tracking orders by coupons isn't actually stock in woocommerce, you need to use woocommerce order hooks to add to orders </li>
                    <li>Using certain conditions you can identify a specific coupon, flag it with metadata, and then track that metadata using filters</li>
                    <li>Using about half a dozen hooks with variables is rather annoying. Passing a variable thhrough several hooks isn't possible.</li>
                    <li>Optimization workaround was to create a class for these functions, and then create an object with the variables and pass the funtions to the hooks</li>
                    <li>Tracking orders was possible, so the next step was to find a plugin for a front end of the process</li>
                    <li>I found a free one with a coupon add-on, and then stylized it so it was more resembling of the website</li>
                    <li>I then added the affiliate information to the plugin and it was ready</li>
                    <li>Final link page was created to serve affiliates</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #2 -->   
<section id="all_products_page" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">All Products Page</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/all_product_page.jpg" target="_blank"><img class="img-fluid" src="images/all_product_page.jpg" alt="all products image"></a><figcaption class="text-center">Click <a href="admfloorin.com/all-products/" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>There wasn't a general catalog page for every product we sold.</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Added the gridbuilding catalogs for all our products seperated by type</li>
                    <li>Now there's a place to just browse everything</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #3 -->   
<section id="cookie_bar" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Cookie Bar</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/cookie_accept_bar.jpg" target="_blank"><img class="img-fluid" src="images/cookie_accept_bar.jpg" alt="cookie bar image"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>By law there's requirements to have a cookie use notice, which we did nto have.</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Found a free to use plugin</li>
                    <li>Adjusted the styles to match the website</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #4 -->   
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
                <p>Issues:</p>
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

<!--///////////////////////// SECTION START /////////////////////////////////// #5 -->   
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
                    <li>Visual customers were not exploring the nav menu</li>
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

<!--///////////////////////// SECTION START /////////////////////////////////// #6 -->   
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

<!--///////////////////////// SECTION START /////////////////////////////////// #7 -->   
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

<!--///////////////////////// SECTION START /////////////////////////////////// #8 -->   
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


<!--///////////////////////// SECTION START /////////////////////////////////// #9 -->   
<section id="image_grid_2" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Image Grid 2</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/front_page_6.jpg" target="_blank"><img class="img-fluid" src="images/front_page_6.jpg" alt="icon grid"></a><figcaption class="text-center">Click <a href="admflooring.com" target="_blank">here</a> to go to site</figcaption>
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
                    <li>Assymetrical and off-center</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Screenshot the icons to use through own server</li>
                    <li>Use oxygen editor to manage the styling of the grid</li>
                    <li>Flexbox controls to align</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 
    
<!--///////////////////////// SECTION START /////////////////////////////////// #10 -->   
<section id="image_gallery" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Image Gallery</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/gallery_page.jpg" target="_blank"><img class="img-fluid" src="images/gallery_page.jpg" alt="gallery page image"></a><figcaption class="text-center">Click <a href="admflooring.com/gallery" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Gallery page while functional has a problem guiding visitors to the products themselves</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The first that needed to be solved identification of the flooring being viewed</li>
                    <li>There is a way to add a caption to each picture, however we are working with a database of thousands of images</li>
                    <li>Adding captions to each individual image would take weeks so there has to be a workaround</li>
                    <li>I was at least confident the images were labeled correctly -- so not 358FA1 and instead Vintage White.jpg</li>
                    <li>So the idea was to build a matrix with the name of each floor and have it search an image title for the correct floor name</li>
                    <li>Once found we can have attributes in that matrix such as URL, display name, etc</li>
                    <li>So I built a matrix in JS and each time a user goes to a new image, it searches the name of the picture</li>
                    <li>Basic but this is where the project hit a snag -- the picture being displayed was one of three in the source html</li>
                    <li>Logically you'd imagine the middle image element would be the picture being displayed, but that was not the case</li>
                    <li>There was 3 img elements and it would rotate between the 3 to display the image</li>
                    <li>I developed an algorithm to track the position of the right URL, so my previous search matrix could identify the picture and label it correctly</li>
                    <li>A little styling and I could now produce a label and link to the product directly from the gallery page with no backend image labeling</li>
                    <li>This does have a human dependency to continiously add new flooring names to the matrix and to make sure people label new image uploads correctly</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #11 -->   
<section id="installation_gallery" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Installation Gallery</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/installation_gallery.jpg" target="_blank"><img class="img-fluid" src="images/installation_gallery.jpg" alt="installation gallery image"></a><figcaption class="text-center">Click <a href="admflooring.com/installations" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>There is a need to identify which flooring selections have installed photos but there is slow load times on product pages</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The gallery on product pages has some pictures, but adding every single installtion photo would bog down the page</li>
                    <li>Lowering quality of photos isn't a good idea since it's our only way to showcase our products</li>
                    <li>So the plan is to simply seperate the images by index, keeping their high quality</li>
                    <li>This also has the advantage of allowing a customer to interact with different flooring products not just the one page they wer eon</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #12 -->   
<section id="product_page_cart_area" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Product Page Cart Area</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/product_page_cart_area.jpg" target="_blank"><img class="img-fluid" src="images/product_page_cart_area.jpg" alt="product page cart area image"></a><figcaption class="text-center">Click <a href="admflooring.com/sea-smoke" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>This part has being overhauled in several ways</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Addeda sqft calculator via JS</li>
                    <li>PHP call to fill out price descriptions and formulas to create the discounted price</li>
                    <li>Several ad links to other parts of the website</li>
                    <li>Uniform template for other products not just flooring (they were all different)</li>
                    <li>Links that will only show up on certain products based on category</li>
                    <li>Two JS functions that open the side cart after a product is addded</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #13 -->   
<section id="product_page_specs" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Product Page Specs</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/product_page_php_specs.jpg" target="_blank"><img class="img-fluid" src="images/product_page_php_specs.jpg" alt="Product specs image"></a><figcaption class="text-center">Click <a href="admflooring.com/sea-smoke" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>The previous itirations of this table and description was created using individual PHP calls for the database and the CSS was written in an ackward way </li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Created the tables using the Oxygen editors native elements</li>
                    <li>Using JS we can go ahead and fill the information by finding the children elements in the table</li>
                    <li>We do a single PHP call for information rather then several dozen, and pass information in to JS to be filled post-load</li>
                    <li>I also went further and revamped the description area, which was simple text </li>
                    <li>Descriptions were 1) not standard 2) not really discriptive</li>
                    <li>Using the same PHP call I can fill out a canned description with the specifics</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #14 -->   
<section id="shop_page" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Shop Page</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/shop_page.jpg" target="_blank"><img class="img-fluid" src="images/shop_page.jpg" alt="shop page image"></a><figcaption class="text-center">Click <a href="admflooring.com/flooring-catalog" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Similiar competitors had a way to compare floorings, I needed to add this function to the website</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>I'm familiar with PHP get/post functions so it's just a matter of gathering data from a selection and passing it to another page</li>
                    <li>The gridbuilder app that creates these AJAX grids uses wordpress posts, so each of these product showings has all its information if needed</li>
                    <li>So I went in to the card generator (post information) and added the product ID, set it to hidden thorugh css</li>
                    <li>Now that information I need is there, I use some script to identify the post that user clicks on, and backtrack all the information and store it</li>
                    <li>The stored information is kept in an array, and using script users can now remove or add to the array as neccessary</li>
                    <li>Once the array is ready to go, the user can click launch to send the information to another page</li>
                    <li>The next page just grabs the ID from the get information and grabs the information from the DB of each of the IDs and displays them</li>
                    <li>The original feature was just at the bottom of page, I later updated it so it can be toggled to be sticky at the footer via a button on the side </li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

    
    

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>