<!DOCTYPE html>
<html lang="en">
<head>
  
<?php wp_enqueue_style(
'wordpress',
get_stylesheet_uri(),
array(),
'1.0'
);              ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php get_header()   ?>
    <main>
        <!-- <h1><?php bloginfo('name'); ?></h1> -->
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <a href="page.php">
                <?php the_post_thumbnail();   ?>
                <h2><?php the_title(); ?> </h2>
            </a>    
            <?php the_excerpt(); ?>
        </article>
        <?php endwhile; ?>
    </main>

       
<?php the_content()   ?>



<?php get_footer()   ?>






</body>
</html>