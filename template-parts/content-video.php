<?php
//Video
$video_title = get_field('video_title');
$video_link = get_field('video_link');
?>
<section id="featured-video" data-type="background" data-speed="5">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $video_title; ?></h1>
                <iframe width="100%" height="415" src="<?php echo $video_link; ?>" frameborder="0" allowfullscreen></iframe>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section>
