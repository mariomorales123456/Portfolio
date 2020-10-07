<?php 

function fetchAndPopulateIndex($tableName){

    $selectAllQuery = "SELECT * FROM $tableName";

    $selectAllResult = mysqli_query($connection, $selectAllQuery);

    if($selectAllResult) {

            $rows = mysqli_fetch_all($selectAllResult);

            foreach($rows as $row){
                echo "<!--///////////////////////// SECTION START ///////////////////////////////////-->   
                    <section id=\"$row[1]\" class=\"container\">
                        <div class=\"row\">                                                     
                            <div class=\"col\">
                                <h2 class=\"text-center\">$row[2]</h2>  <!-- /*title row*/ -->
                            </div>
                        </div> 
                        <div class=\"row\">                                                     <!-- /*content row start*/-->
                            <div class=\"col\">                          <!-- /*left column start*/ -->
                                <div class=\"row preview\">     <!--/* image container*/ -->
                                    <div class=\"col\">
                                        <h3 class=\"text-center\">Preview</h3>  
                                        <figure class=\"text-center\">
                                            <a href=\"$row[3]\" target=\"_blank\"><img class=\"img-fluid\" src=\"$row[4]\" alt=\"$row[5]\"></a><figcaption class=\"text-center\">Click <a href=\"$row[6]\" target=\"_blank\">here</a> to go to site</figcaption>
                                        </figure>
                                    </div>
                                </div>    
                            </div>                                       <!-- /*left column end*/ -->
                            <div class=\"col\">                            <!-- /*right column start*/ -->
                                <div class=\"requirements\">
                                    <h3 class=\"text-center\">Requirements</h3>  
                                    $row[7]
                                </div>
                            </div>                                       <!-- /*right column end*/ -->   
                        </div>                                                                   <!-- /*content row end*/-->
                    </section>                                                               
                    <!--///////////////////////// SECTION END ///////////////////////////////////--> ";
            }
            }
    else {

            echo('Unable to fetch from database');
    }
}
?>