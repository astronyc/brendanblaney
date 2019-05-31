<?php
/**
 * This is the home page template file
 */
$home_image = get_field('home_image'); 
get_header(); ?>

<div class="home-page">
    <div class="page-wrap">
        <div class="image-wrap">
            <div class="page-section hero" id="1" style="background-image:url('<?php echo $home_image; ?>')">
            </div>
        </div>
        <div class="page-section" id="portraits">

            <?php if(get_field('portrait_section')): ?>
            <div class="picture-row">
                <?php while(has_sub_field('portrait_section')): ?>

                <div> <img src="<?php the_sub_field('left_image'); ?>" /></div>
                <div><img src="<?php the_sub_field('center_image'); ?>" /></div>
                <div> <img src="<?php the_sub_field('right_image'); ?>" /></div>

                <?php endwhile; ?>


            </div>
            <?php endif; ?>

        </div>
        <div class="page-section" id="animals">
            <div class="picture-row">
                <?php while(has_sub_field('animals_section')): ?>
                <div>
                    <img src="<?php the_sub_field('left_image'); ?>" />
                    <img src="<?php the_sub_field('center_image'); ?>" />
                    <img src="<?php the_sub_field('right_image'); ?>" />

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
        <div class="page-section" id="stills">
            <div class="picture-row">
                <?php while(has_sub_field('stills_section')): ?>
                <div>
                    <img src="<?php the_sub_field('left_image'); ?>" />
                    <img src="<?php the_sub_field('center_image'); ?>" />
                    <img src="<?php the_sub_field('right_image'); ?>" />

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
        <div class="contact-section">

        </div>
    </div>
</div>

<?php get_footer(); ?>