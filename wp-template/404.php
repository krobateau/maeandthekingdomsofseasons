<?php get_header(); ?>

<div class="wrapper section-inner group">

	<div class="content center">

		<div class="posts">
	
			<div class="post">
			
				<div class="content-inner">
		                
					<div class="post-header">
			        	<h2 class="post-title"><?php _e( 'Error 404', 'hemingway' ); ?></h2>
			        </div>
				    <hr class="wp-block-separator has-text-color has-background has-dark-gray-background-color has-dark-gray-color m0 is-style-wide">                                            	            
			        <div class="post-content">
			        	            
			            <p><?php _e( "It seems like you have tried to open a page that doesn't exist. It could have been deleted, moved, or it never existed at all. You are welcome to search for what you are looking for with the form below.", "hemingway" ); ?></p>
			            
			            <?php get_search_form(); ?>
			            
			        </div><!-- .post-content -->
		        
		        </div><!-- .content-inner -->
		            	                        	
			</div><!-- .post -->
		
		</div><!-- .posts -->
	
	</div><!-- .content -->
	
	<?php get_sidebar(); ?>
	
</div><!-- .wrapper -->

<?php get_footer(); ?>

