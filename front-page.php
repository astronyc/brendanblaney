<?php
/**
 * This is the home page template file
 */
$home_image = get_field('home_image'); 
$artist_image = get_field('artist_image'); 
$image_1 = get_field('image_1'); 
$image_2 = get_field('image_2'); 
$image_3 = get_field('image_3'); 
$image_4 = get_field('image_4'); 
$image_5 = get_field('image_5'); 
$image_6 = get_field('image_6'); 
$image_7 = get_field('image_7'); 
$image_8 = get_field('image_8'); 
$image_9 = get_field('image_9'); 
$image_10 = get_field('image_10'); 
$image_11 = get_field('image_11'); 
$image_12 = get_field('image_12'); 
$image_13 = get_field('image_13'); 
$image_14 = get_field('image_14'); 
$image_15 = get_field('image_15'); 
$image_16 = get_field('image_16'); 
$image_17 = get_field('image_17'); 
$image_18 = get_field('image_18'); 
$image_19 = get_field('image_19'); 
$image_20 = get_field('image_20'); 
$image_21 = get_field('image_21'); 
$image_22 = get_field('image_22'); 
$image_23 = get_field('image_23'); 
$image_24 = get_field('image_24'); 
$image_25 = get_field('image_25'); 
$image_26 = get_field('image_26'); 
$image_27 = get_field('image_27'); 
$image_28 = get_field('image_28'); 
$image_29 = get_field('image_29'); 
$image_30 = get_field('image_30'); 
$image_31 = get_field('image_31'); 
$image_32 = get_field('image_32'); 
$image_33 = get_field('image_33'); 
$image_34 = get_field('image_34'); 
$image_35 = get_field('image_35'); 
$image_36 = get_field('image_36'); 
$image_37 = get_field('image_37'); 
$image_38 = get_field('image_38'); 
$image_39 = get_field('image_39'); 
$image_40 = get_field('image_40'); 
$image_41 = get_field('image_41'); 
$image_42 = get_field('image_42'); 
$image_43 = get_field('image_43'); 
$image_44 = get_field('image_44'); 
$image_45 = get_field('image_45'); 
$image_46 = get_field('image_46'); 
$image_47 = get_field('image_47'); 
$image_48 = get_field('image_48'); 
$image_49 = get_field('image_49'); 
$image_50 = get_field('image_50'); 
$image_51 = get_field('image_51'); 
$image_52 = get_field('image_52'); 
$image_53 = get_field('image_53'); 
$image_54 = get_field('image_54'); 
$image_55 = get_field('image_55'); 
$image_56 = get_field('image_56'); 
$image_57 = get_field('image_57'); 
$image_58 = get_field('image_58'); 
$image_59 = get_field('image_59'); 
$image_60 = get_field('image_60'); 

get_header(); ?>

<div class="home-page">
    <div class="page-wrap">
        <div class="image-wrap">
            <div class="page-section hero" id="1" style="background-image:url('<?php echo $home_image; ?>')">
            </div>
        </div>

        <div class="page-section" id="work">
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_1; ?>"></div>
                <div class=" vertical-image"><img src="<?php echo $image_2; ?>"></div>
            </div>
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_19; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_30; ?>"></div>
            </div>
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_5; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_17; ?>"></div>
            </div>
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_35; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_22; ?>"></div>
            </div>
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_16; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_14; ?>"></div>
            </div>
            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_6; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_48; ?>"></div>
            </div>


            <div class="row">
                <div class="vertical-image"><img src="<?php echo $image_; ?>"></div>
                <div class="vertical-image"><img src="<?php echo $image_; ?>"></div>
            </div>

            <div class="row row6"></div>
            <div class="row row7"></div>
            <div class="row row8"></div>
            <div class="row row9"></div>
            <div class="row row10"></div>

            <div class="row">
                <div class="horizontal-image"><img src="<?php echo $image_60; ?>"></div>
            </div>

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

            <!-- </div> -->
            <div class="contact-section" id="contact">
                <div class="about">
                    <div class="left-wrap wrap">
                        <div>
                            <p>Brendan Blaney is a commercial and fine art photographer from Toronto, Ontario.
                                Brendan plays with chiaroscuro in his intimately-lit studio set-ups, capturing striking
                                details
                                of the subjects he photographs. This love of contrast through light and color stems from
                                a
                                strong fascination with the master
                                painters that were a result of the Renaissance, Baroque, and Rococo art movements. The
                                first
                                years of his career were spent in New York City, after having attended Parsons School of
                                Design.
                                Brendan now works and lives in Europe, traveling across borders to transcend the
                                subjects
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
                    <div class="form-header">
                        <div class="form-title">
                            Connect with Brendan
                        </div>
                        <div class="form-icons">
                            <div class="icon icon-instagram">
                                <a href="/www.instagram.com/brendanblaney/"><i data-feather="instagram"></i></a>
                            </div>
                            <div class="icon icon-facebook">
                                <a href="/www.instagram.com/brendanblaney/"><i data-feather="facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <form class="form">
                        <div class="id">
                            <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>