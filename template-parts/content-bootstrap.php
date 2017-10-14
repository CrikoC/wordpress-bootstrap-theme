<?php
//Video
$bootstrap_title = get_field('bootstrap_title');
$bootstrap_body = get_field('bootstrap_body');
$bootstrap_image = get_field('bootstrap_image');

?>
<section id="bootstrap">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $bootstrap_title; ?></h1>
                <img class="img-responsive" src="<?php echo $bootstrap_image['url']; ?>" alt="<?php echo $bootstrap_image['alt']; ?>">
                <p class="lead"><?php echo $bootstrap_body; ?></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section>
