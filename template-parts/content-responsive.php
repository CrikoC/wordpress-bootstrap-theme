<?php
//Video
$responsive_title = get_field('responsive_design_title');
$responsive_body = get_field('responsive_design_body');
$responsive_image = get_field('responsive_design_image');
?>
<section id="responsive-design" data-type="background" data-speed="5">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $responsive_title; ?></h1>
                <img class="img img-responsive" src="<?php echo $responsive_image['url']; ?>" alt="<?php echo $responsive_image['alt']; ?>">
                <p class="lead"><?php echo $responsive_body; ?></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section>
