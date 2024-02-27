<?php get_header('secondary'); ?> <!-- Tu peux avoir pleins de header, du moment qu'il est specifier ici, et que le nom du header est conforme. Pareillement pour le footer-->

<?php // Variables
$title = get_field('page_title');

?>

<div class="container">

    <h1><?php the_title(); ?> </h1>

    <?php get_template_part('includes/section', 'content'); ?>

    <?php if($title): ?>
        <h1>
           <?php echo $title; ?>    
        </h1>
    <?php endif; ?>

</div>

<?php get_footer(); ?>