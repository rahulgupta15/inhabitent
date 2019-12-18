<?php get_header(); ?>
<div class="main">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="posts">
    <h2><?php the_title(); ?></h2>
    <section class="image">
    <?php the_post_thumbnail('large');?>
    </section>
    <?php echo wp_trim_words(get_the_excerpt(), 50, "[...]") ; ?>
    <section>
    <a href="<?php echo get_permalink();?>"> <button class="read-more">READ MORE <i class="fas fa-long-arrow-alt-right"></i></button></a>
    </section>
    
    
    
    
    
    
   
    
   
    <!-- <?php the_content(); ?> -->
    
    <br>
    </div>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>
    

    <?php the_posts_navigation();?>



<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<section class="sidebar">
<?php get_sidebar();?>  
</section> 

</div>

<?php get_footer();?>