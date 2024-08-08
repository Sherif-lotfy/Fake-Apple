<?php get_header(); ?>

<div class="category-posts">
    <?php
    $excluded_category_id = 1; // استبدل الرقم 3 بالرقم الخاص بالتصنيف الذي تريد استبعاده
    $categories = get_categories();
    foreach ($categories as $category) {
        if ($category->term_id == $excluded_category_id) {
            continue; // تجاوز التصنيف المحدد
        }
        
        $args = array(
            'category' => $category->term_id,
            'posts_per_page' => 1
        );
        $latest_post = new WP_Query($args);
        
        if ($latest_post->have_posts()) : 
            while ($latest_post->have_posts()) : $latest_post->the_post();
    ?>
                <div class="category-post">
                    <h2><?php echo $category->name; ?></h2>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    }
    ?>
</div>

<?php get_footer(); ?>
