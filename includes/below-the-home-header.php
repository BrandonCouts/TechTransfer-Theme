<?php
 $blog = get_page_by_path('blog');
 $archives = get_page_by_path('archives');
?>
<div class="row">
	<div id="below-the-home-header" class="row-border-bottom-top">
		<div class="span4">
		<?php $blogPage = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 1 )); ?>
		<?php while($blogPage->have_posts()) : $blogPage->the_post(); ?>
			<a href="<?=get_page_link($blog->ID); ?>">
				<h2>Patent Trending Blog</h2>
					<?=the_post_thumbnail( array( 300, 300 ) ); ?>
					<b><?=the_title(); ?></b>
				<?php if($shortDescription = get_post_meta($post->ID, 'post_short_description', true)) : ?>
						<p><?=$shortDescription; ?></p>
				<?php else : ?>
						<p><?=get_the_content(); ?></p>
				<?php endif; ?>
			</a>
			<a href="<?=get_page_link($blog->ID); ?>">&raquo; Blog Archives</a>
		<?php endwhile; ?>
		</div>

		<div class="span4">
		<?php $techNewsPosts = new WP_Query(array( 'post_type' => 'success_story' , 'posts_per_page' => 1 )); ?>
		<?php while($techNewsPosts->have_posts()) : $techNewsPosts->the_post(); ?>
				<a href="<?=get_permalink( $post->ID ); ?>">
				<h2>Technology News</h2>
				<?=the_post_thumbnail( array( 300, 300 )); ?>
				<b><?=the_title(); ?></b>
				<?php if($shortDescription = get_post_meta($post->ID, 'success_story_short_description', true)) : ?>
				<p><?=$shortDescription; ?></p>
				<?php else : ?>
				<p><?=get_the_content(); ?></p>
				<?php endif; ?>
				</a>
				<a href="<?=get_page_link($archives->ID); ?>">&raquo; Tech News Archives</a>
		<?php endwhile; ?>
		</div>

		<div class="span4">
		<?php $newsPage = new WP_Query(array( 'post_type' => 'news', 'posts_per_page' => 1 )); ?>
		<?php while($newsPage->have_posts()) : $newsPage->the_post(); ?>
				<a href="<?=get_permalink( $post->ID ); ?>">
				<h2>Featured Researcher</h2>
				<?=the_post_thumbnail(array( 300, 300 )); ?>
				<b><?=the_title(); ?></b>
				<?php if($shortDescription = get_post_meta($post->ID, 'news_short_description', true)) : ?>
				<p><?=$shortDescription; ?></p>
				<?php else : ?>
				<p><?=get_the_content(); ?></p>
				<?php endif; ?>
				</a>
				<a href="<?=get_page_link($archives->ID); ?>">&raquo; Researcher Archives</a>
		<?php endwhile; ?>
		</div>
	</div>
</div>
