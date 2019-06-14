<?php
/**
 * This is the home page template file
 */
$home_image = get_field('home_image'); 
$artist_image = get_field('artist_image'); 
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

            <?php if(get_field('animals_section')): ?>
            <div class="picture-row">
                <?php while(has_sub_field('animals_section')): ?>

                <div> <img src="<?php the_sub_field('left_image'); ?>" /></div>
                <div><img src="<?php the_sub_field('center_image'); ?>" /></div>
                <div> <img src="<?php the_sub_field('right_image'); ?>" /></div>

                <?php endwhile; ?>


            </div>
            <?php endif; ?>

        </div>
        <div class="page-section" id="stills">

            <?php if(get_field('stills_section')): ?>
            <div class="picture-row">
                <?php while(has_sub_field('stills_section')): ?>

                <div> <img src="<?php the_sub_field('left_image'); ?>" /></div>
                <div><img src="<?php the_sub_field('center_image'); ?>" /></div>
                <div> <img src="<?php the_sub_field('right_image'); ?>" /></div>

                <?php endwhile; ?>


            </div>
            <?php endif; ?>

        </div>
        <div class="contact-section" id="contact">
            <div class="about">
                <div class="left-wrap wrap">
                    <p>Brendan Blaney is a commercial and fine art photographer, hailing from Toronto, Onta</p>
                </div>
                <div class="center-wrap wrap">
                    <img src="<?php echo $artist_image; ?>" />
                </div>
                <div class="right-wrap wrap">
                    <p>Clientele includes: Burberry, Loro Piana, Major Model NYC, True Model Management,
                        Nylon Magazine, Billboard Magazine, and Friar's Club.</p>
                </div>
            </div>
            <div class="contact-form">
                <form class="form">
                    <div class="id">
                        <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>