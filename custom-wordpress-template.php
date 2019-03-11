<?php
/*
Template Name: Custom Page
*/
get_header();?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1><?php the_title();?></h1>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php 
/*Brought to you by https://rushax.com*/
get_footer(); ?>
