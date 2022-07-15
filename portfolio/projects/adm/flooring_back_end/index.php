<?php include('/app/portfolio/global_variables.php'); ?>

<?php include( $rootPath . 'includes/head.php'); ?>

<main>



<div class="gradient_title">
       <h1>ADM Flooring Back End</h1>
</div>

<!--///////////////////////// SECTION START /////////////////////////////////// #1 -->   
<section id="add_acf_sqft_price_to_product_display_table" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">ACF Sqft Price of Product</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_acf_sqft_price_to_product_display_table.png" target="_blank"><img class="img-fluid" src="code_images/add_acf_sqft_price_to_product_display_table.png" alt="image of square foot price of product"></a></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/acf_price_display.png" target="_blank"><img class="img-fluid" src="result_images/acf_price_display.png" alt="image of square foot price of product"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Advanced Custom Fields (ACF) plugin allows you to add fields to the DB of products, in this case the square foot price of flooring, but it was not being displayed on product table, making it difficult to identify pricing errors</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>PHP snippet adding ACF field to the product table as a new column</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #2 -->   
<section id="add_avg_price_sqft_of_collection_to_product_display_table" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">ACF Avg Sqft Price of Collection</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_avg_price_sqft_of_collection_to_product_display_table.png" target="_blank"><img class="img-fluid" src="code_images/add_avg_price_sqft_of_collection_to_product_display_table.png" alt="image of avg price sqft of collection"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/acf_collection_price_display.png" target="_blank"><img class="img-fluid" src="result_images/acf_collection_price_display.png" alt="image of avg price sqft of collection"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>At a glance being able to identify outliers is important, no way to see this value unless you filter an entire collection</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>PHP code was used to gather the entire product line of a collection</li>
                    <li>Calculations to gather the avg</li>
                    <li>Display the avg in a new column</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #3 -->   
<section id="add_comment_column_to_wc_order_table" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Add Comment Column</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_comment_column_to_wc_order_table.png" target="_blank"><img class="img-fluid" src="code_images/add_comment_column_to_wc_order_table.png" alt="image of add column to order table"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/order_table_comments.png" target="_blank"><img class="img-fluid" src="result_images/order_table_comments.png" alt="image of add column to order table"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Customer notes are inside order details, but nowhere else</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Transffering the customer notes to their own column would highlight requests</li>
                    <li>It also gets moved to invoice pdfs which is another important part to have requests</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #4 -->   
<section id="add_compare_acf_calculated_to_product_display_table" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Calculated Price Comparison</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_compare_acf_calculated_to_product_display_table.png" target="_blank"><img class="img-fluid" src="code_images/add_compare_acf_calculated_to_product_display_table.png" alt="image of acf and price comparison"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/product_acf_price_comparison.png" target="_blank"><img class="img-fluid" src="result_images/product_acf_price_comparison.png" alt="image of acf and price comparison"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Price per sqft and comparison to the collection avg being available are important, but there needs to be a hard comparison of a calculated price vs manually input price</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The product table draws from the database, so finding an attribute like square foot and the box price isn't difficult</li>
                    <li>Price divided by sqft per box</li>
                    <li>This gives a calculated price that can then be compared to the manually input price</li>
                    <li>The results column is then labeled true for equivelant, false with the calculated price if it does not match, and n/a for produts with a $0 cost (samples)</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #5 -->   
<section id="add_coupons_used_to_order_page" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Add coupons used to order page</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_coupons_used_to_order_page.png" target="_blank"><img class="img-fluid" src="code_images/add_coupons_used_to_order_page.png" alt="image of add coupons to order page"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/add_coupons_to_order_page.png" target="_blank"><img class="img-fluid" src="result_images/add_coupons_to_order_page.png" alt="image of add coupons to order page"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Coupon usage is hard to track when you have to open up every single order, WC native coupon area is not very user friendly to track usage either</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The coupon metadata already exists so it's just about extracting it to the order table page</li>
                    <li>Also sending the information to the invoice plugin</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #6 -->   
<section id="add_custom_field_radio_button_2_choices_checkout" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Ckechout Custom Field - Radio Button</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_custom_field_radio_button_2_choices_checkout.png" target="_blank"><img class="img-fluid" src="code_images/add_custom_field_radio_button_2_choices_checkout.png" alt="image of back end code"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_checkout_radio_buttons.png" target="_blank"><img class="img-fluid" src="result_images/flooring_checkout_radio_buttons.png " alt="image of back end code"></a><figcaption class="text-center">Click <a href="https://admflooring.com/checkout/" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>We need more information from clients when they are placing an order, but without adding more plugins to get this functionality</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Woocommerce has several PHP hooks to get the functionality needed</li>
                    <li>Combining several hooks we can add the information to the metadata, use it and display it</li>
                    <li>Furthermore, we want to reuse this snippet of code</li>
                    <li>Using a PHP object to encapsulate the hooks, and then a secondary function to put together the variables servers this purpose</li>
                    <li>Using this format I created 3 different options blocks for a client to go through</li>
                    <li>NOTE: To visit the checkout page you need to add something to cart</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #7 -->   
<section id="add_custom_field_terms_and_conditions_checkbox" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Add custom field checkbox to checkout</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_custom_field_terms_and_conditions_checkbox.png" target="_blank"><img class="img-fluid" src="code_images/add_custom_field_terms_and_conditions_checkbox.png" alt="image of backend terms and conditions code box"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_checkout_checkbox.png" target="_blank"><img class="img-fluid" src="result_images/flooring_checkout_checkbox.png" alt="image of terms and condition checkbox"></a><figcaption class="text-center">Click <a href="https://admflooring.com/checkout/" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>WooCommerce comes native with a terms and conditions box, but we wanted further documentation of agreement</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Hid the native checkbox</li>
                    <li>Next checkbox will mark the time and date on order submission</li>
                    <li>Time and date will be recorded on order details and invoice pdf</li>
                    <li>NOTE: To visit the checkout page you need to add something to cart</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #8 -->   
<section id="add_custom_field_text_input_checkout" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Checkout Text Input</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_custom_field_text_input_checkout.png" target="_blank"><img class="img-fluid" src="code_images/add_custom_field_text_input_checkout.png" alt="image of backend custom field text input checkout"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_checkout_text_box.png" target="_blank"><img class="img-fluid" src="result_images/flooring_checkout_text_box.png" alt="image of front end custom field text input checkout"></a><figcaption class="text-center">Click <a href="https://admflooring.com/checkout/" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>A piece of information that is asked of clients is which batch their product belongs to</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Added as an optional text input field</li>
                    <li>Using object proramming to create the field</li>
                    <li>Added a modal for the pop up more information icon</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #9 -->   
<section id="add_customer_order_status" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Add custom order status</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_customer_order_status.png" target="_blank"><img class="img-fluid" src="code_images/add_customer_order_status.png" alt="image of backend code for custom order status"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_custom_order_status.png" target="_blank"><img class="img-fluid" src="result_images/flooring_custom_order_status.png" alt="image of custom order status"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>The native woocommerce order status options are not descriptive enough for certain tasks</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Add custom status using woocommerce hooks</li>
                    <li>Create a PHP object to house it so the code is reuseable</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #10 -->   
<section id="add_google_code" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Adding Google Code</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_google_code.png" target="_blank"><img class="img-fluid" src="code_images/add_google_code.png" alt="image of google code snippet"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Google has code snippets that need to be added for analytics</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Added via wordpress hooks</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #11 -->   
<section id="add_used_coupons_to_the_order_confirmation_email" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Add coupons used to confirmation emails</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_used_coupons_to_the_order_confirmation_email.png" target="_blank"><img class="img-fluid" src="code_images/add_used_coupons_to_the_order_confirmation_email.png" alt="image of backend coupons added to email"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_custom_email_information.png" target="_blank"><img class="img-fluid" src="result_images/flooring_custom_email_information.png" alt="image of coupons added to confirmation email"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Coupons being easily tracked by email, as well as other metadata information</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>The emails are produced from woocommerce</li>
                    <li>Hooks can be used to add information to the emails</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #12 -->   
<section id="add_visibility_to_product_display_table" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Visibility Column</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/add_visibility_to_product_display_table.png" target="_blank"><img class="img-fluid" src="code_images/add_visibility_to_product_display_table.png" alt="image of backend code visibility added to product table"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/flooring_visibility.png" target="_blank"><img class="img-fluid" src="result_images/flooring_visibility.png" alt="image of visiibility added to product table"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Hidden/Visible Products are not easily identifiable</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>Added new column</li>
                    <li>Added hidden/visible metadata</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #13 -->   
<section id="affiliate_code_filtering" class="container">
    <div class="row">                                                     
        <div class="col">
            <h2 class="text-center">Affiliate Order Filering</h2>  <!-- /*title row*/ -->
        </div>
    </div> 
    <div class="row">                                                     <!-- /*content row start*/-->
        <div class="col">                          <!-- /*left column start*/ -->
            <div class="row preview">     <!--/* image container*/ -->
                <div class="col">
                    <h3 class="text-center">Preview</h3>  
                    <figure class="text-center">
                        <a href="code_images/affiliate_code_filtering.png" target="_blank"><img class="img-fluid" src="code_images/affiliate_code_filtering.png" alt="image of backend affiliate code filtering"></a><figcaption class="text-center"></figcaption>
                    </figure>
                    <figure class="text-center">
                        <a href="result_images/afiliate_filering.png" target="_blank"><img class="img-fluid" src="result_images/afiliate_filering.png" alt="image of affiliate filtering"></a><figcaption class="text-center"></figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>Affiliate orders are based on coupon codes distributed to them</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>In order to identify an order you'd have to individually search for each coupon</li>
                    <li>This would take too long, so we need to start flagging these orders</li>
                    <li>PHP code to identify the coupons we're interested in and then add to metadata a simple true/false for affiliate or not affiliate</li>
                    <li>Once flaged we can now create a filter for that metadata</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #14 -->   
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
                        <a href="code_images/custom_css_library.png" target="_blank"><img class="img-fluid" src="code_images/custom_css_library.png" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="__INSERT_WEBSITE_HERE__" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>__TEXT__</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #15 -->   
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
                        <a href="code_images/custom_javascript_library.png" target="_blank"><img class="img-fluid" src="code_images/custom_javascript_library.png" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="__INSERT_WEBSITE_HERE__" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>__TEXT__</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 

<!--///////////////////////// SECTION START /////////////////////////////////// #16 -->   
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
                        <a href="code_images/custom_php_library.png" target="_blank"><img class="img-fluid" src="code_images/custom_php_library.png" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="__INSERT_WEBSITE_HERE__" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>__TEXT__</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 
    
<!--///////////////////////// SECTION START /////////////////////////////////// #17 -->   
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
                        <a href="code_images/flooring_single_product_template_skeleton.png" target="_blank"><img class="img-fluid" src="code_images/flooring_single_product_template_skeleton.png" alt="__INSERT_ALT_HERE__"></a><figcaption class="text-center">Click <a href="__INSERT_WEBSITE_HERE__" target="_blank">here</a> to go to site</figcaption>
                    </figure>
                </div>
            </div>    
        </div>                                       <!-- /*left column end*/ -->
        <div class="col">                            <!-- /*right column start*/ -->
            <div class="requirements">
                <h3 class="text-center">Details</h3>  
                <p>Issues:</p>
                <p><ul>
                    <li>__TEXT__</li>
                </ul></p>
                <p>Fixes:</p>
                <p><ul>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                    <li>__TEXT___</li>
                </ul></p>
            </div>
        </div>                                       <!-- /*right column end*/ -->   
    </div>                                                                   <!-- /*content row end*/-->
</section>                                                               
<!--///////////////////////// SECTION END ///////////////////////////////////--> 
    

</main>
    
<?php include( $rootPath . 'includes/foot.php'); ?>