<?php get_header(); ?>

<main>
  <section id="casts" class=" wow fadeIn" data-wow-duration="1s">
    <h2 class="section_title"><?php single_post_title() ;?></h2>
    <div class="cast_bg">
      <div class="cast_inner inner">
        <div class="cast_items">

          <?php get_template_part('template-parts/cast-casts'); ?>

        </div><!-- /.cast_items -->
      </div><!-- /.cast_inner -->
    </div><!-- /.cast_bg -->
  </section><!-- /.cast -->

  <section class="cast_sub_cast">
    <div class="cast_sub_inner inner">
      <div class="cast_sub_items">

        <?php get_template_part('template-parts/cast-sub'); ?>

      </div><!-- /.cast_sub_items -->
    </div><!-- /.cast_sub_inner inner -->
  </section>

  <section class="cast_bg_musician">
    <h2 class="section_title">MUSICIAN</h2>
    <div class="cast_sub_inner inner">
      <div class="cast_sub_items">

        <?php get_template_part('template-parts/cast-musician'); ?>

      </div><!-- /.cast_sub_items -->
    </div><!-- /.cast_sub_inner inner -->
  </section><!-- /.cast_bg_musician -->

  <section class="cast_bg_staff">
    <h2 class="section_title">STAFF</h2>
    <div class="cast_sub_inner inner">
      <div class="cast_sub_items">

        <?php get_template_part('template-parts/cast-staff'); ?>

      </div><!-- /.cast_sub_items -->
    </div><!-- /.cast_sub_inner inner -->
  </section><!-- /.cast_bg_staff -->
</main>

<?php get_footer(); ?>