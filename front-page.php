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
                    <div>
                        <p>Brendan Blaney is a commercial and fine art photographer from Toronto, Ontario.
                            Brendan plays with chiaroscuro in his intimately-lit studio set-ups, capturing striking
                            details
                            of the subjects he photographs. This love of contrast through light and color stems from a
                            strong fascination with the master
                            painters that were a result of the Renaissance, Baroque, and Rococo art movements. The first
                            years of his career were spent in New York City, after having attended Parsons School of
                            Design.
                            Brendan now works and lives in Europe, traveling across borders to transcend the subjects
                            that
                            he meets and photographs.
                        </p>
                    </div>
                    <div>
                        <p>Clientele includes: Burberry, Loro Piana, Major Model NYC, True Model Management,
                            Nylon Magazine, Billboard Magazine, and Friar's Club.</p>
                    </div>
                </div>

                <div class="right-wrap wrap">
                    <img src="<?php echo $artist_image; ?>" />
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