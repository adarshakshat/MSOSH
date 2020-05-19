<?php get_header('course'); ?>

<?php the_post(); 
 $featured_img_url = get_the_post_thumbnail_url();
?> 
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <img class="img-fluid" src="<?php echo $featured_img_url; ?>"></div>
                <div class="col-md-6">
                    <h1 class="text-center"><?php echo get_the_title(); ?></h1>
                    <div>
                    <?php the_excerpt();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-top: 25px;">
                    <div class="card"><div><img class="card-img-top img-fluid " src="http://lcpatna.com/temp/targetexam.svg" alt="Image" /> </div>
                        <div class="card-body">
                            <h6 class="text-center text-muted card-subtitle mb-2">Target Exam</h6>
                            <h4 class="text-center card-title">Exam Title</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 25px;">
                    <div class="card"><div><img class="card-img-top img-fluid " src="http://lcpatna.com/temp/duration.svg" alt="Image" /> </div>
                        <div class="card-body">
                            <h6 class="text-center text-muted card-subtitle mb-2">Duration</h6>
                            <h4 class="text-center card-title">Exam Title</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 25px;">
                    <div class="card"><div><img class="card-img-top img-fluid " src="http://lcpatna.com/temp/Start-date.svg" alt="Image" /> </div>
                        <div class="card-body">
                            <h6 class="text-center text-muted card-subtitle mb-2">Start date</h6>
                            <h4 class="text-center card-title">Exam Title</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 25px;">
                    <div class="card"><div><img class="card-img-top img-fluid " src="http://lcpatna.com/temp/Classroom-white.svg" alt="Image" /> </div>
                        <div class="card-body">
                            <h6 class="text-center text-muted card-subtitle mb-2">Intended Class</h6>
                            <h4 class="text-center card-title">Exam Title</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">

<?php the_content(); ?>
</div>

<?php get_footer(); ?>



