<?php
include __DIR__ . '/partials/init.php';

?>
<?php include __DIR__ . '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
<style>
    .jumbotron{
        height: 90vh;
        background:url(./imgs/ameer-basheer-2WeHZHIW6v0-unsplash.jpg);
        background-size: cover;
        
    }
    .index-logo {
           width: 100%;
           display: flex;
           justify-content: center;
           align-items: center;
           flex-direction: column;
           
       }
       .index-logo>a{
           text-decoration: none;
       }
       #logo {
           width:60% ;
           
       }
</style>
<div class="jumbotron">
    <h1 class="display-4 text-light">Hello, This is Lung² !</h1>
    <br>
    <br>
    <br>
    <p class="lead text-light">This is a website about<h3 class="text-light">--Pet Adoption--</h3> </p>
    <br>
    
    <br>
    <br>
    <br>
    <a class="btn btn-secondary btn-lg" href="data-list.php" role="button">Adopt Pets</a>
</div>
<?php include __DIR__ . '/partials/scripts.php'; ?>
<?php include __DIR__ . '/partials/html-foot.php'; ?>


