<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<input type="text" id="myInput" class="search" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">	
		
		<?php 

$images = get_field('images');

if( $images ): ?>
   <div class="grid" id="grid"> 
        <?php foreach( $images as $image ): ?>
            	<div class="item">
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /><span><?php echo $image['caption']; ?></span>
                </a>
					</div>
                
            
        <?php endforeach; ?>
    </div>
<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
