<?php get_header() ;?>

<main class="main wow fadeIn" data-wow-duration="1s">
  <h2 class="section_title"><?php the_title() ;?></h2>
  <div class="inner">
    <div class="comic_inner">
      <?php the_content(); ?>
    </div><!-- /.inquiry_inner -->
  </div><!-- /.inner -->

  
</main>
<?php get_footer() ; ?>