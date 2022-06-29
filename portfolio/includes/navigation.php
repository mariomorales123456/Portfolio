<?php $root = '/portfolio/projects/' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center desktop-tablet-nav" id="navbar">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex mobile-nav" id="navbar">
    <ul class="nav nav-pills .container-fluid justify-content-between">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/portfolio/index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{Projects}</a>
            <ul class="dropdown-menu">
                
                <li><a class="dropdown-item" href="<?php echo $root ?>cosw10_20/html-css-projects.php">HTML/CSS</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosw200/javascript-jquery-projects.php">SQL</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosw200/javascript-jquery-projects.php">jQuery/JavaScript</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosw30/php-mysql-projects.php">PHP/MySQL</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosw240/wordpress-projects.php">Wordpress</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cs21_22/java-data-structures-and-algorithms.php">Java</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosp201_230/android-development.php">Android</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cs11/c++-projects.php">C++</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>cosn205_215/unix-fundementals-and-linux-networking-and-security.php">UNIX/Linux</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>freelance/index.php">Freelance</a></li>
                <li><a class="dropdown-item" href="<?php echo $root ?>adm/index.php">ADM</a></li>

            </ul>
        </li>

    </ul>
</nav>