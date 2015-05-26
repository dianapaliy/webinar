           <?php if ( is_home() ) :
			  get_header('blog');
			else :
			  get_header();
			endif;
			?>
        
        		<div id="page" class="wrapper">
        		
            		<?php get_sidebar(); ?>
		            <section id="primary" class="site-content">
			            <div id="content">
			            	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
							    <?php if(function_exists('bcn_display'))
							    {
							        bcn_display();
							    }?>
							</div>
			            	<?php global $more; ?>
			            	<ul class="post-list">
							<?php if (have_posts()) { ?>
								<?php while (have_posts()) { the_post();
									$more = 0; ?> 
									<li class="post">
										<div class="entry">
										<?php the_content(); ?>
										</div>
									</li>
								<?php } ?>
							</ul>
								<?php wp_corenavi(); ?>
							<?php } else { ?>
								<h2>Ничего не найдено</h2>
							<?php } ?> 
						</div>
					</section>
            	</div>
            <?php get_footer(); ?>