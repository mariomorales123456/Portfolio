<?php include('../../../includes/head.php'); ?>

<!-- //////////////  XML Activities   ///////////////////// -->

<div class="raw_code_container">
    <h1 class="text-center">
        XMl Activities
    </h1>
    <pre class="border-1 rounded ">
        <?php echo htmlentities(file_get_contents('activity_date_picker_xml.php')); ?>
    </pre>
    <pre>
        <?php include('activity_gridview_xml.php'); ?>
    </pre>
    <pre>
        <?php include('activity_main_xml.php'); ?>
    </pre>
    <pre>
        <?php include('activity_radio_timer_play_pause_xml.php'); ?>
    </pre>
    <pre>
        <?php include('splash_activit_.xml.php'); ?>
    </pre>

<!-- //////////////  XML Utilities   ///////////////////// -->

    <h1 class="text-center">
        XMl Utilities
    </h1>
    <pre>
        <?php include('colors_xml.php'); ?>
    </pre>
    <pre>
        <?php include('strings_xml.php'); ?>
    </pre>
    <pre>
        <?php include('styles_xml.php'); ?>
    </pre>

<!-- //////////////  Java   ///////////////////// -->

    <h1 class="text-center">
        Java code
    </h1>
    <pre>
        <?php include('activity_main_java.php'); ?>
    </pre>
    <pre>
        <?php include('date_picker_java.php'); ?>
    </pre>
    <pre>
        <?php include('gridview_java.php'); ?>
    </pre>
    <pre>
        <?php include('radio_timer_play_pause_java.php'); ?>
    </pre>
    <pre>
        <?php include('splash_activity_java.php'); ?>
    </pre>
</div>