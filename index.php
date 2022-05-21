<?php
$page =(isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] :'';
?>
<!DOCTYPE html>

<html> 
   <head>
   <title> CLET</title>
       <link rel="stylesheet" href="files/LT6.css">
       <script src="files/cpg.js"> </script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
       </head>
   <body>
        <header>
       <div id="logobox">
           <img alt="logo" src="files/logo.png">
           <h1>CPG<span> -PORTFOLIO-</span></h1>
            </div>
            
          <div id="nav">
          <ul>
            <li><a href="index.php?load=home">HOME</a></li>
            <li><a href="index.php?load=profile">PROFILE</a></li>
            <li><a href="index.php?load=projects">PROJECTS</a></li>
          </ul>
         </div>
       </header>
       
       <div id="content">
           <?php 
            switch($page){
                case 'home':
                    include_once 'home.php';
                    break;
                case 'projects':
                    include_once 'project.php';
                    break;
                case 'profile':
                    include_once 'profile.php';
                    break;
                default:
                    include_once 'home.php';
            }
        ?>
        
       
       </div>
        
        </body>
</html>
  