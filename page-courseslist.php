<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'course', 'posts_per_page' => 10 ) );?>

<div class="container">
    <table class="table">
        <thead style="background-color: #cd2653;">
            <tr style="color:#fffff">
                <th>Course Name</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tbody>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
        $key_values3 = get_post_meta( $post->ID, 'startdate',true ); ?>
        

            <tr>
                <td><a href="<?php get_permalink(); ?>" > <?php  the_title(); ?> </a> </td>
                <td><?php echo $key_values3; ?></td>
            </tr>
        <?php endwhile ; ?>
        </tbody>
    </table>
</div>
<?php get_footer(); ?>