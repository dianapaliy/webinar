           <?php
			  get_header();
			?>
        		<div id="page" class="wrapper">
        		        
            		<?php get_sidebar(); ?>
            		<section id="primary" class="site-content">
			            <div id="content">
			            <ul class="post-list">
							<?php if (have_posts()) { ?>
								<?php while (have_posts()) { the_post();
									$more = 0; ?> 
									<li class="post">
										<div class="post-title">
											<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>							
										</div>
										<div class="post-top">
											<div class="post-date"><span><?php the_time('j F Y'); ?></span></div>
											<div class="rubric-post">
												<span>Категории:</span>
												<?php 
												global $post;
												foreach((get_the_category( $post->ID )) as $categories) {
												echo '<a>' . $categories-> cat_name . '</a>'; 
												} ?>
											</div>
										</div>
										<a href="<?php the_permalink(); ?>" class="image image-full"><?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}  ?> </a>
										<div class="entry">
										<?php the_content('', false); ?>
										</div>
										<div class="more">
										<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >Читать далее...</a>
										</div>
									</li>
								<?php } ?>
								</ul>
<!--								--><?php //wp_corenavi(); ?>
							<?php } else { ?>
								<h2>Ничего не найдено</h2>
							<?php } ?> 
						</div>
					</section>
            	</div>
            <?php get_footer(); ?>