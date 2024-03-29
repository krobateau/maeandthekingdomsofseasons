	<div class="mae-footer">

		<div class="footer section large-padding bg-mae">
			
			<div class="footer-inner section-inner group">
			
				<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
				
					<div class="column column-1 left">
					
						<div class="widgets">
				
							<?php dynamic_sidebar( 'footer-a' ); ?>
												
						</div>
						
					</div>
					
				<?php endif; ?><!-- .footer-a -->
					
				<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
				
					<div class="column column-2 left">
					
						<div class="widgets">
				
							<?php dynamic_sidebar( 'footer-b' ); ?>
												
						</div><!-- .widgets -->
						
					</div>
					
				<?php endif; ?><!-- .footer-b -->
									
				<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
				
					<div class="column column-3 left">
				
						<div class="widgets">
				
							<?php dynamic_sidebar( 'footer-c' ); ?>
												
						</div><!-- .widgets -->
						
					</div>
					
				<?php endif; ?><!-- .footer-c -->
						
			</div><!-- .footer-inner -->
		
		</div><!-- .footer -->
		
  
	</div><!-- .mae-footer -->
	<div class="credits section bg-mae no-padding">
	
		<div class="credits-inner section-inner group">
	
			<p class="credits-left">
				&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
			</p>
			
			<p class="credits-right">
				<span><?php printf( __( 'Base theme by <a href="%s">Anders Noren</a>', 'hemingway' ), 'https://www.andersnoren.se' ); ?></span> &mdash; <a title="<?php _e( 'To the top', 'hemingway' ); ?>" class="tothetop"><?php _e( 'Up', 'hemingway' ); ?> &uarr;</a>
				<br>
				<span><?php printf( __( 'Customized theme by <a href="%s">Ansel Robateau</a> and <a href="%s">Kyla Robateau</a>', 'hemingway' ), 'https://www.robaone.com', 'https://bugmangaka.carrd.co' ); ?></span>
			</p>
					
		</div><!-- .credits-inner -->
		
	</div><!-- .credits -->

</div><!-- .big-wrapper -->

<?php wp_footer(); ?>

<div id="myModal" class="modal">
	<span id="modalClose">&times;</span>
	<img class="modal-content" id="modalImage">
	<div id="caption"></div>
</div>
</body>
</html>
