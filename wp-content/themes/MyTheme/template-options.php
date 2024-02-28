<?php

/*
Template Name: Options
*/

$colors = get_field('choose_your_color');

$flavors = get_field('choose_flavor');

$options = get_field('do_you_consent');
var_dump($options);

?>

<?php get_header(); ?>

<?php var_dump($colors) ?>

<div class="container">

    <h1><?php the_title(); ?> </h1>

    <?php if($colors): ?>
        <strong>Color: </strong> <?= $colors[0]; ?>
    <?php endif; ?>

    <?= implode(', ', $colors); ?>

    <?php foreach($colors as $color): ?>
    <?php endforeach; ?>

    <br /> <br />

    <?= implode(', ', $flavors); ?>

    <br /> <br />

</div>

<?php get_footer(); ?>