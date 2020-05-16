 <!-- Design for Faculty List Page -->
 <?php get_header( '' ); ?>


<!--Card Section, Cards for each faculties -->
<section class="card-section-imagia">
    <h1>Faculty</h1>
    <h2>Meet the face behind our sucess</h2>
    <div class="container">
        <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'faculty', 'posts_per_page' => 10 ) );?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-sm-6 col-md-4">
                <div class="card-container-imagia">
                    <div class="card-imagia">
                        <div class="front-imagia">
                            <div class="cover-imagia"><img alt src="https://unsplash.it/720/500?image=1067" /></div>
                            <div class="user-imagia"><img class="img-circle" alt src="<?php $url = get_the_post_thumbnail_url( $post->ID,'facultycard'); echo $url ;?> " /></div>
                            <div class="content-imagia">
                                <h3 class="name-imagia"><?php the_title(); ?></h3>
                                <p class="subtitle-imagia"><?php  $key_values = get_post_meta( $post->ID, 'education',true ); echo $key_values?> </p>
                                <p class="text-center"><em><?php the_excerpt(  ); ?></em></p>
                            </div>
                            <div class="footer-imagia"><span><i class="fa fa-black-tie"></i> <?php  $key_values = get_post_meta( $post->ID, 'post',true ); echo $key_values?></span></div>
                        </div>
                        <div class="back-imagia">
                            <div class="content-imagia content-back-imagia">
                                <div>
                                    <h3 class="text-center">Experience</h3>
                                    <p class="text-center"><?php the_title(); ?> has over <?php $key_values = get_post_meta( $post->ID, 'experience',true ); 
                                    echo $key_values; ?> years of experience </p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</section>


 <?php get_footer(); ?>