<?php

/*
Template Name: Content Page
*/


$image = get_field('feature_image');
// var_dump($image); // Debugging
$picture = $image['sizes']['large'];

$file = get_field('upload_file');
$filename = $file['filename'];
$fileurl = $file['url'];

$embed = get_field('embed_video');

?>

<?php get_header(); ?>

<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

        <img src="<?= $picture ?>" class="img-fluid" alt="">

        <?php if($file): ?>
            <a href="<?= $fileurl ?>" download > Download the image </a>
        <?php endif; ?>
        
        <?php if($embed): ?>
            <?= ($embed); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>