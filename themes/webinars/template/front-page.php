<?php
/**
 * Template Name: Front Page Template
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
        		<div id="page" class="wrapper">
                	<nav class="main-navigation">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav-menu',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>'
                                    )
                                );
                            ?> 
                    </nav>
		            <section id="primary" class="site-content">
			            <div id="content">
                                        <div class="banner">
                                            <div class="container">
                                                <div class="advertisement">
                                                    <h1 id="UTP">Мы создаем сайты, приводящие к вам клиентов</h1>
                                                    <h2 id="UTP2">от 3 дней, качественно, под ключ. Создайте страницу для своей компании!</h2>
                                                </div>
                                                <div class="action col-xs-12 col-md-6 col-sm-6 col-lg-6 pull-left" style="background-color:rgba(0,0,0,0.3)">
                                                    <h1>Акция</h1>
                                                    <div style="font-size: 24px;">
                                                        <div class="share">
                                                            Получите макет вашего сайта в ПОДАРОК!<br>
                                                            <br>
                                                            <!-- div style="font-size: 16px; line-height: 16px; ">
                                                                    Кроме того вы получаете:<br>
                                                                    + Аудит сайта и анализ конкурентов;<br>
                                                                    + Техническую поддержку сайта на 1 месяц;<br>
                                                                    + Мобильную версию сайта;<br>
                                                        </div -->
                                                    </div>
                                                    До конца акции осталось:
                                                    <div id="countdown"></div>
                                                </div>
                                            </div>
                                            <div id="order-form" class="feedbackForm col-xs-12 col-md-6 col-sm-6 col-lg-6 pull-right">
                                                <h3 class="share">Получите макет сайта в ПОДАРОК!</h3>
                                                <div>Мы свяжемся с вами <br>в течение 2х часов</div>
                                                <form name="contacus" action="">
                                                    <input type="text" name="name" id="name" placeholder="Как вас зовут?"/>
                                                    <input type="text" name="contact" id="contact" placeholder="Телефон, e-mail или Skype"/>
                                                    <textarea name="message" id="message" cols="15" rows="3" placeholder="Добавить сообщение"></textarea>
                                                    <input type="hidden" name="param" value="1">
                                                    <input type="submit" class="sendFeedback" value="Получить">
                                                    <br>
                                                </form>
                                                <a class="privacy" href="privacy.html">Политика конфиденциальности</a>
                                            </div>
                                            <div class="clouds">
                                                <img src=<?php echo THEME_DIR . '/img/clouds.png'?> alt="" class="hidden-xs hidden-sm"/>
                                            </div>
                                        </div>
                                    </div>
						</div>
					</section>
            	</div>
            <?php get_footer(); ?>