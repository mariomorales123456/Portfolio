<?php $root = '/portfolio/projects/' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-flex justify-content-center" id="navbar">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/portfolio/index.php">Home</a>
        </li>
        <?php 
            include('nav_sublinks/cosw10_20.php'); 
            include('nav_sublinks/cosp38.php'); 
            include('nav_sublinks/cosw200.php');
            include('nav_sublinks/cosw30.php');  
            include('nav_sublinks/cosw240.php'); 
            include('nav_sublinks/cs21_22.php'); 
            include('nav_sublinks/cosp201_230.php'); 
            include('nav_sublinks/cs11.php'); 
            include('nav_sublinks/cosn205_215.php');
            include('nav_sublinks/freelance.php');
            include('nav_sublinks/adm.php');
            include('nav_sublinks/profiles.php');
        ?>
    </ul>
</nav>