<?php 
/**
 * Template Name: Project
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage rc
 * @since rc 1.0
 */
            get_header(); ?>
        		<div class="page">
                            <div>
                                <a href="<?php echo THEME_DIR . '/template/page-owner.php'?>">Owners</a>
                                <a href="<?php echo THEME_DIR . '/template/page-schedule.php'?>">Schedule</a>
                            </div>
            	</div>
<?php get_sidebar(); ?>
            <?php get_footer(); ?>