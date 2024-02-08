<?php
get_header();
?>
<main>
    <section class="teacher-post">
        <div class="container">
            <div class="teacher-post-person">
                <div class="teacher-post-person-img-box">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="teacher-post-person-img">
                </div>
                <div>
                    <h1 class="teacher-post-person-name"><?php the_title(); ?></h1>
                    <div class="teacher-post-person-position">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="teacher-post-person-position"><?php echo get_field("teacher_position"); ?></div>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="teacher-post-person-list-dist">
                        <?php echo get_field("teacher-post-person-list-dist"); ?>
                    </div>
                </div>
            </div>
            <?php if (get_field("teacher-post-bio")) : ?>
                <div class="teacher-post-inf">
                    <div class="teacher-post-bio">
                        <?php echo get_field("teacher-post-bio"); ?>
                    </div>
                    <div class="teacher-post-bio-add">
                        <?php if (have_rows('teacher_post-bio_add_list')) : ?>
                            <?php while (have_rows('teacher_post-bio_add_list')) : the_row(); ?>
                                <?php
                                $teacher_post_add_item = get_sub_field('teacher_post_bio-add_list_item');
                                ?>
                                <div class="teacher-post-bio-add-item">
                                    <?php echo $teacher_post_add_item ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field("teacher-post-lit")) : ?>
            <div class="teacher-post-lit">
                <h2 class="teacher-post-lit-title"><?php echo get_field("teacher-post-lit-title"); ?></h2>
                <div class="teacher-post-lit-list">
                    <?php echo get_field("teacher-post-lit"); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

</main>
<?php
get_footer();
?>

