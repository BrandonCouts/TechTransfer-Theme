<div class="row">
	<div id="below-the-home-header" class="row-border-bottom-top">
		<div class="span4">
			<?php $blog = get_page_by_path('blog'); ?>
			<a href="<?=get_page_link($blog->ID); ?>">
				<?php $aboutPage = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 1 )); ?>
				<?php while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>
					<?=the_post_thumbnail( array( 300, 300 ) ); ?>
					<h2>Blog: <b><?=the_title(); ?></b></h2>
				<?php if($shortDescription = get_post_meta($post->ID, 'post_short_description', true)) : ?>
						<p><?=$shortDescription; ?></p>
				<?php else : ?>
						<p><?=get_the_content(); ?></p>
				<?php endif;
				endwhile; ?>
			</a>
		</div>
		<div class="span4">
			<?php $sucessStoryPosts = new WP_Query(array( 'post_type' => 'success_story' , 'posts_per_page' => 1 )); ?>
			<?php while($sucessStoryPosts->have_posts()) : $sucessStoryPosts->the_post(); ?>
				<a href="<?=get_permalink( $post->ID ); ?>">
				<?=the_post_thumbnail( array( 300, 300 )); ?>
				<h2>Success Story: <b><?=the_title(); ?></b></h2>
				<?php if($shortDescription = get_post_meta($post->ID, 'success_story_short_description', true)) : ?>
				<p><?=$shortDescription; ?></p>
				<?php else : ?>
				<p><?=get_the_content(); ?></p>
				<?php endif; ?>
				</a>
			<?php endwhile; ?>
		</div>
		<div class="span4">
			<?php $aboutPage = new WP_Query(array( 'post_type' => 'news', 'posts_per_page' => 1 )); ?>
			<?php while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>
				<a href="<?=get_permalink( $post->ID ); ?>">
				<?=the_post_thumbnail(array( 300, 300 )); ?>
				<h2>News: <b><?=the_title(); ?></b></h2>
				<?php if($shortDescription = get_post_meta($post->ID, 'news_short_description', true)) : ?>
				<p><?=$shortDescription; ?></p>
				<?php else : ?>
				<p><?=get_the_content(); ?></p>
				<?php endif; ?>
				</a>
			<?php endwhile; ?>
		</div>
	</div>
</div>