<?php get_header(); ?>

<section class="front-header">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <?php the_content(); ?>
    
    <?php endwhile;?>
</section>

    <section class="home">
        <img class="home-background" src="<?php echo get_stylesheet_directory_uri();?>\images\home-hero.jpg" width="100%">
        <img class="home-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg" >
    </section>

    <section class="body">

    <h2>SHOP STUFF</h2>

    <div class= "shop">
<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
) );?>

<?php
foreach($terms as $term):?>

<div class="shop-items">
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg">
<?php echo category_description($term->term_id);?>
    <button>
    <a href="<?php echo get_home_url() . "/product-type/" . $term->slug;?>">
    <?php echo $term->name ;?>
    </button>
</a>
</div>
<?php endforeach;?>
</div>

    <h2>INHABITENT JOURNAL</h2>
    <section class="journal">

        <?php
        $args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?> 
    <div>
        <section class='journal-all'>
            <div class="journal-img">
                <?php the_post_thumbnail('medium');?>
            </div>
            <div class='journal-info'>
            <div class='journal-date'>
                <?php the_date(); ?>
            </div>
            <div class="journal-title">
                <?php the_title(); ?>
            </div id='journal-read'>
            <a href="<?php echo get_permalink();?>"> <button id="read-entry">READ ENTRY</button></a>
            </div>
        </section>
    </div>
   
   <?php endforeach; ?>
     </section>

     <br> 
    <br>
    <!-- <div class="adventures-section">
    <section class="adventures-heading">
     <div class="adventure-title"><h2>LATEST ADVENTURES</h2></div> -->
    
    <!-- <section class="adventures">
            <img class="canoe" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\canoe-girl.jpg" style="width: 20%">
            <img class="bonfire" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\beach-bonfire.jpg" style="width: 20%">
            <img class="hikers" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\mountain-hikers.jpg" style="width: 20%" >
            <img class="sky" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\night-sky.jpg" style="width: 20%" >
    </section> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>