<?php
/*
Template Name: Custom Page
*/
get_header();?>

<div class="container">
  <div class="row">
    <!--START TITLE CONTAINER -->
    <div class="col">
      <h1><?php the_title();?></h1>
    </div>
    <!--/END TITLE CONTAINER-->
  </div>
  
  <div class="row">
    <!--START CONTENT-->
    <div class="col">
      <?php the_content(); ?>
    </div>
    <!--/END CONTENT-->
  </div>
</div>

<?php 
/*Brought to you by https://rushax.com*/
get_footer(); ?>
