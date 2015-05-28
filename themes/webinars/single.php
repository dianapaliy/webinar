            <?php 
                get_header();
            ?>
        		<div id="page" class="wrapper">

            <?php get_sidebar(); ?>
            <div id="content">
				<?php if (have_posts()) { ?>
					<?php while (have_posts()) { the_post();
						$more = 1;
					 ?> 
						<div class="post">
                            <div class="post-title">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <span class="post-cat"><a href="#"><?php the_category(', ') ?></a></span>
                            <div class="post-date">
                                <span class="post-day"><?php the_time('j') ?></span><span class="post-month"><?php the_time('M') ?></span><span class="post-year"><?php the_time('Y') ?></span>
                            </div>
<!--                            <span class="post-comments">--><?php //comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><!--</span>-->
                            <div class="entry">
                            <?php the_content('', false); ?>
                                <?php if (is_user_logged_in()){
                                    global $wpdb;
                                    $user_id = get_current_user_id();
                                    $post_id = get_the_ID();
                                    $query  = $wpdb->get_results("SELECT * FROM wp_subscribe WHERE user_id = $user_id AND post_id = $post_id");
                                    if (!$query) {
                                        ?>
                                        <button type="submit" name="subscribe" id="subscribe">Subscribe</button>
                                        <input id="postId" type="hidden" value="<?php the_ID(); ?>" />
                                <?php
                                    }
                                }?>
                            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                            </div>
						</div>
					<?php } ?>
				<?php } else { ?>
					<h2>Ничего не найдено</h2>
				<?php } ?> 
				<div class="navigation">
					<span class="previous-entries"><?php previous_post_link('Читать: %link') ?></span>
					<span class="next-entries"><?php next_post_link('Читать: %link') ?></span> 
				</div>
			</div>
            </div>
            <?php get_footer(); ?>