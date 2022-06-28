<?php

/* testing absolute pathing */
//php function: getcwd(); //result: /app/portfolio //this is the root directory of Heroku servers
//Right click, copy path on gitpod: /workspace/Portfolio/portfolio/includes/test.php
//root directory of gitpod is /workspace/Portfolio/portfolio
//So if we want to absolute path using Heroku servers
//$rootPath = "/app/portfolio/";
//$rootPath replaces "/workspace/Portfolio/portfolio"
//$rootPath . includes/test.php for absolute path on Heroku
//When switching servers will just have to explore getcwd(); to get root for server, and replace it in the variable $rootPath:

$rootPath = "/app/portfolio/";

//test function
function currentDirectory(){

    $currentDirectory = getcwd();

    echo '
    <script>

    console.log("' . $currentDirectory . '");

    </script>
    ';

}

//currentDirectory();

?>