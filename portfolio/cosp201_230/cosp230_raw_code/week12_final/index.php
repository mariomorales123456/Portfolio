<?php include('../../../includes/head.php'); ?>

<!-- //////////////  XML Activities   ///////////////////// -->

<div class="raw_code_container">
    <div class="col text-center">
        <div class="row text-center">
            <h1>XMl Activities</h1>
        </div>
        <div class="row">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('activity_date_picker_xml.php')); ?></pre>
        </div>
        <div class="row">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('activity_gridview_xml.php')); ?></pre>
        </div>
        <div class="row">
             <pre class="text-left"><?php echo htmlentities(file_get_contents('activity_main_xml.php')); ?></pre>
        </div>
        <div class="row">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('activity_radio_timer_play_pause_xml.php')); ?></pre>
        </div>
        <div class="row">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('splash_activit_.xml.php')); ?></pre>
        </div> 

<!-- //////////////  XML Utilities   ///////////////////// -->

        <div class="row text-center">
            <h1>XMl Utilities</h1>
        </div>
        <div class="row text-left">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('colors_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
            <pre class="text-left"><?php echo htmlentities(file_get_contents('strings_xml.php')); ?></pre>
        </div>
        <div class="row text-left">
             <pre class="text-left"><?php echo htmlentities(file_get_contents('styles_xml.php')); ?></pre>
        </div>

<!-- //////////////  Java   ///////////////////// -->

        <div class="row text-center">
            <h1>Java code</h1>
        </div>
        <div class="row">
             <pre class="text-left"><?php include('activity_main_java.php'); ?></pre>
        </div>
        <div class="row">
             <pre class="text-left"><?php include('date_picker_java.php'); ?></pre>
        </div>
        <div class="row">
             <pre class="text-left"><?php include('gridview_java.php'); ?></pre>
        </div>
        <div class="row">
             <pre class="text-left"><?php include('radio_timer_play_pause_java.php'); ?></pre>
        </div>
        <div class="row">
             <pre class="text-left"><?php include('splash_activity_java.php'); ?></pre>
        </div>
    </div>
</div>