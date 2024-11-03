<div class="sidebar fade-up-item">
    <ul class="year-list">
        <?php 
        // 年ごとの投稿リストを取得
        $years = [];
        $query_args = [
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => -1, // 全ての投稿を取得
            'orderby' => 'date',
            'order' => 'DESC',
        ];
        $news_query = new WP_Query($query_args);

        // 投稿データを年・月ごとに分類
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
                $year = get_the_date('Y');
                $month = get_the_date('m');

                if (!isset($years[$year])) {
                    $years[$year] = [];
                }
                if (!isset($years[$year][$month])) {
                    $years[$year][$month] = 0;
                }
                $years[$year][$month]++;
            endwhile;
            wp_reset_postdata(); 
        endif;

        foreach ($years as $year => $months) :
            $year_post_count = array_sum($months); // 各年の投稿数
        ?>
        <li class="year-list__item">
            <button class="year-toggle"><?php echo $year; ?> (<?php echo $year_post_count; ?>)</button>
            <ul class="month-list">
                <?php foreach ($months as $month => $post_count) : ?>
                <li class="month-list__item">
                    <a href="<?php echo home_url('/news/') . $year . '/' . $month . '/'; ?>">
                        <?php echo $year; ?>年<?php echo $month; ?>月
                    </a>
                    (<?php echo $post_count; ?>)
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <?php endforeach; ?>
    </ul>
</div>