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
                <ul>

                    <?php while(has_sub_field('portrait_section')): ?>

                    <li><img src="<?php the_sub_field('left_image'); ?>" /></li>
                    <li><img src="<?php the_sub_field('center_image'); ?>" /></li>
                    <li><img src="<?php the_sub_field('right_image'); ?>" /></li>

                    <?php endwhile; ?>

                </ul>
            </div>
            <?php endif; ?>

        </div>
        <div class="page-section" id="animals">
            <div class="picture-row">
                <ul>

                    <?php while(has_sub_field('animals_section')): ?>

                    <li><img src="<?php the_sub_field('left_image'); ?>" /></li>
                    <li><img src="<?php the_sub_field('center_image'); ?>" /></li>
                    <li><img src="<?php the_sub_field('right_image'); ?>" /></li>

                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
        <div class="page-section" id="stills">

        </div>

    </div>
</div>

<?php get_footer(); ?>