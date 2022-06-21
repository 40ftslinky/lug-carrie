<?php
	/**
	 * The template for displaying all single reviews.
	 *
	 * @package storefront
	 */
	$single=1;
	
	get_header(); 
?>
		
		<main id="main" class="site-main" role="main">
			<?php
				$image_url = get_the_post_thumbnail_url();
			?>
			<section class=" no_bg centered" style="background: url('<?php echo $image_url; ?>');     background-size: cover; background-repeat:no-repeat; ">

				<div class="_row">        
					<div class="column_60 ">

						<div class="_wrap">
							<div class="text_block left">
								<h1><?php the_title(); ?></h1>             
							</div>
						</div>

					</div>
				</div>
				
			</section>		
		
		<section class="blog-single centered">
				<div class="_row ">
					<div class="column_60">
						<?php
							$post_id= get_the_ID();
							$rating = get_field("rating",$post_id);
							$subheading = get_field("subheading",$post_id);
						?>
						<h2><?php echo $subheading; ?></h2>
						<div class="stars yellow">
							<?php if($rating>=1){ ?><i class="fa-solid fa-star"></i><?php } ?>
						  <?php if($rating>=2){ ?><i class="fa-solid fa-star"></i><?php } ?>
						  <?php if($rating>=3){ ?><i class="fa-solid fa-star"></i><?php } ?>
						  <?php if($rating>=4){ ?><i class="fa-solid fa-star"></i><?php } ?>
						  <?php if($rating>=5){ ?><i class="fa-solid fa-star"></i><?php } ?>
						</div>						
						
						<?php
							// get post 
							$POST= get_the_content();
							// displays the post 
							echo $POST;
						?>
					</div>
				</div>
			</section>
		</main><!-- #main -->


<?php

get_footer();
