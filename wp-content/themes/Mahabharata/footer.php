<section id="schedule">
    <div class="inner wow fadeIn" data-wow-duration="1s">
        <div class="schedule_inner">
            <h2 class="section_title">SCHEDULE</h2>

            <?php
            $page = get_page_by_path('top');
            $scheduleGroup = SCF::get('schedule', $page->ID);
            if ($scheduleGroup) : ?>
                <?php foreach ($scheduleGroup as $fields) : ?>
                    <div class="schedule_info">
                        <div class="schedule_box_right">
                            <div class="schedule_date"><?php echo $fields['schedule_date']; ?></div><!-- /.schedule_date -->
                            <div class="schedule_time"><?php echo $fields['schedule_time']; ?></div><!-- /.schedule_time -->
                            <div class="schedule_location"><?php echo $fields['schedule_location']; ?></div><!-- /.schedule_location -->
                        </div><!-- /.schedule_box_right -->
                        <?php if (!empty($fields['schedule_reserve'])) : ?>
                            <div class="schedule_reserve"><a href="<?php echo esc_url($fields['schedule_reserve']); ?>"><?php echo $fields['schedule_reserve_text']; ?></a></div><!-- /.schedule_reserve -->
                        <?php else : ?>
                            <div class="schedule_reserve"><?php echo $fields['schedule_reserve_text']; ?></a></div><!-- /.schedule_reserve -->
                        <?php endif; ?>
                    </div><!-- /.schedule_info -->
                <?php endforeach; ?>
            <?php endif; ?>

        </div><!-- /.schedule_inner -->
        <div class="schedule_btn">
            <a href="<?php echo esc_url(home_url('inquiry')); ?>" class="btn_contact">お問い合わせはこちら</a><!-- /.btn_contact -->
            <a href="<?php echo esc_url(my_reserve_btn()); ?>" class="btn_reserve">チケット予約サイトへ</a><!-- /.btn_reserve -->
        </div><!-- /.schedule_links -->
    </div><!-- /.inner -->
</section><!-- /.schedule -->

<footer id="footer">
    <small class="copyright">Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</small><!-- /.copyright -->
</footer><!-- /.footer -->


<?php wp_footer(); ?>

    <!-- <script>
        new WOW().init();
    </script> -->

</body>

</html>