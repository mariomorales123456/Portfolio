<?php include('/app/portfolio/global_variables.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>



<div class="gradient_title">
       <h1>ADM Bathroom</h1>
</div>

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="addon_product" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Addon Product</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/addon_product.png" target="_blank"><img class="img-fluid" src="images/addon_product.png" alt="image of addon product feature"></a><figcaption class="text-center">Click <a href="https://admbathroom.com/collections/freestanding-bathtubs/products/freestanding-tub-edged-sw-101" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
        <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Some bathroom products are presented with a white or chrome drain option, shopify has no way to add this simple small add-on as an extra order option rather then an entirely new product</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>So this basically had us double our inventory options for products that could have a white drain or chrome drain</li>
                    <li>This adds to inventory cost of maintaining, over a very simple color option</li>
                    <li>Shopify has apps that basically auto-duplicates products to add options such as these, but not only are these expensive it continues to add unneccessary inventory that needs to be managed as well</li>
                    <li>All this for a $20 item</li>
                    <li>My solution is to build a UI interfact that looks identical to the previous iteriation that used shopifys product builder</li>
                    <li>Remove the old product duplicates</li>
                    <li>Add an AJAX call to add a single "add on white drain cap" to the cart and then display the side cart</li>
                    <li>Selecting the stock drain option automatically removes the white drain cap, if there is one</li>
                    <li>Adding extras of the cap is possible</li>
                    <li>A custom cap option is available as a seperate product</li>
                    <li>display/hide jquery to expand on the drain cap, it's fine print and when you should get one</li>
                    <li>This allowed me to cut about 50 redundant products from inventory while still allowing clients to be informed about the our drain options, all while working within Shopify's limits</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="bathroom_code_render" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Back end code</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/bathroom_code_render.png" target="_blank"><img class="img-fluid" src="iamges/bathroom_code_render.png" alt="image of bathroom code render"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
        <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Modifying code in a shopify theme should be easily identified should it need to be removed</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>I made to always add my name to the comment tags so if you were to search "Mario" it would easily be found in source code</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="bathroom_custom_code" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Custom Code</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/bathroom_custom_code.png" target="_blank"><img class="img-fluid" src="images/bathroom_custom_code.png" alt="images of backend code snippets"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
        <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Theme changes and code were being added to the source code and disorganized</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Finding custom code is difficult from one dev to the next if theres no documentation</li>
                    <li>In this case, this company doesn't keep documetnation so I have to code in such a way that at a glance one knows where the custom code is</li>
                    <li>So I add custom_code snippets that use the {%render%} function to import themselves</li>
                    <li>This way someone searching for the code source should be able to track it to the custom snippets, or by searching the code base can find an association which is also kept in the snippets</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START ///////////////////////////////////-->   
<section id="collection_html_product_page" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Collection Description in Product Pages</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="images/collection_html_product_page.png" target="_blank"><img class="img-fluid" src="images/collection_html_product_page.png" alt="images of collection descritpion in product pages"></a><figcaption class="text-center">Click <a href="https://admbathroom.com/collections/freestanding-bathtubs/products/freestanding-tub-edged-sw-101" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
        <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Products in collections needed to share warnings without having to add to every single product</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Collections have their own html for descritpions</li>
                    <li>You can use Liquid to select a collections text if the product is in that collection</li>
                    <li>Able to display collection relevant text/warnings on each product belonging to that collection easily</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 



    

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>