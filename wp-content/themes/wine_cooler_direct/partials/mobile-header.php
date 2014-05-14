<header id="mobile-header">
	<section class="mobile-logo">
		<a href="<?php echo home_url() ;?>">
			<img src="<?php the_field('mobile_logo', 'option');?>"/>
		</a>
	</section>
	<section class="mobile-shop-link">
		<a href="http://compactappliance.com/on/demandware.store/Sites-Appliance-Site/default/Cart-Show">shop</a>
	</section>
	<section class="mobile-cart"><a href="http://compactappliance.com/on/demandware.store/Sites-Appliance-Site/default/Cart-Show"><i class="icon-cart"></i></a></section>
</header>
<section id="mobile-nav">
	<a href="#" class="mobile-drop">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/menu-icon.png"/>
	</a>
	<section class="mobile-search"><?php echo mobile_search_form();?></section>
</section>
<section id="mobile-drop-menu">
	<div class="section-container accordion" data-section="accordion">
		<section>
			<p class="title" data-section-title>Product Knowledge</p>
			<div class="content" data-section-content>
				<?php while (have_rows('product_articles','option') ) : the_row();
					$articles = get_sub_field('article','option'); 
					foreach ($articles as $article) {
						$title = get_the_title($article->ID);
						$permalink = get_permalink($article->ID);
						echo '<a href="'.$permalink.'">';
							echo '<p>'.$title.'</p>';
						echo '</a>';
					}
				endwhile; 
				?>
			</div>
		</section>
		<section>
			<p class="title" data-section-title>Lifestyle Improvements</p>
			<div class="content" data-section-content>
				<?php while (have_rows('lifestyle_articles','option') ) : the_row();
						$articles = get_sub_field('article','option'); 
						foreach ($articles as $article) {
							$title = get_the_title($article->ID);
							$permalink = get_permalink($article->ID);
							echo '<a href="'.$permalink.'">';
								echo '<p>'.$title.'</p>';
							echo '</a>';
						}
					endwhile; 
				?>
			</div>
		</section>
		<section>
			<p class="title" data-section-title>News & Events</p>
			<div class="content" data-section-content>
				<?php echo ca_mobile_news();?>
			</div>
		</section>
	</div>
</section>