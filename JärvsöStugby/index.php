<?php get_header(); ?>

<main class="main-content">
    <?php
    // Hämta 'boende-inforuta' inlägg
    $args1 = array('category_name' => 'boende-inforuta');
    $query1 = new WP_Query($args1);
    if ($query1->have_posts()) {
        while ($query1->have_posts()) {
            $query1->the_post();
            ?>
            <article class="cabin-infobox">
                <?php the_content(); ?>
            </article>
            <?php
        }
        wp_reset_postdata(); // Återställ den globala $post-variabeln
    }
    ?>

    <div class="cabin-container">
        <?php
        // Hämta 'boenden' inlägg
        $args2 = array('category_name' => 'boenden');
        $query2 = new WP_Query($args2);
        if ($query2->have_posts()) {
            while ($query2->have_posts()) {
                $query2->the_post();
                ?>
                <div class="wrapper">
                    <article class="cabin-article-page">
                        <?php if (has_post_thumbnail()) { the_post_thumbnail('cabin'); } ?>
                        <div class="text">
                            <h2><?php the_title(); ?></h2>
                            <hr>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="button">Läs mer</a>
                        </div>
                    </article>
                </div>
                <?php
            }
            wp_reset_postdata(); // Återställ den globala $post-variabeln
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>
