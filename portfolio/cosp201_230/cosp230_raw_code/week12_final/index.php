<?php include('../../../includes/head.php'); ?>

<!-- //////////////  XML Activities   ///////////////////// -->

<div class="raw_code_container">
    <div class="col text-center">
        <div class="row">
            <h1 class="text-center">
                XMl Activities
            </h1>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('activity_date_picker_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('activity_gridview_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php echo htmlentities(file_get_contents('activity_main_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('activity_radio_timer_play_pause_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('splash_activit_.xml.php')); ?></pre>
        </div> 

<!-- //////////////  XML Utilities   ///////////////////// -->

        <div class="row">
            <h1 class="text-center">
                XMl Utilities
            </h1>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('colors_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
            <pre><?php echo htmlentities(file_get_contents('strings_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php echo htmlentities(file_get_contents('styles_xml.php')); ?></pre>
        </div>

<!-- //////////////  Java   ///////////////////// -->

        <div class="row">
            <h1 class="text-center">
                Java code
            </h1>
        </div>
        <div class="row text-left">
             <pre><?php include('activity_main_java.php'); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php include('date_picker_java.php'); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php include('gridview_java.php'); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php include('radio_timer_play_pause_java.php'); ?></pre>
        </div>
        <div class="row text-left">
             <pre><?php include('splash_activity_java.php'); ?></pre>
        </div>
    </div>
</div>