<?php get_header(); the_post();?>

<h1></h1> 

<!-- BLOG POST -->

<article id="blog-post" class="center">

<header class="no-intro">

    <a href="blog.html">From our blog</a>
    <h1><?php the_title(); ?></h1>
    <time datetime="<?php the_time ( 'Y-m-d' );  ?>"><?php the_time ( 'd.m.Y' );  ?></time>

</header>

<div class="columns">

    <div class="post-content cols-8">

    <?php the_content(); ?>

    </div>

    <?php get_sidebar(); ?>

    

</div>

<a href="blog.html" class="button">Next article</a>

</article>

<?php get_footer();?>