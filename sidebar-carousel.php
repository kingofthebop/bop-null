<?php
/*
This carousel requires ACF Repeater plugin. Needs a repeater field called "slides" and sub-fields called "slide" which is an Image ID and "slide_caption" which is a textarea.
*/ ?>
<div class="container-fluid">
    <div class="row">
        <div id="homepage-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php $i=0; while( have_rows( 'slides' ) ): the_row(); ?>
				<li data-target="#homepage-carousel" data-slide-to="<?php echo $i ?>"<?php echo $i==0 ? ' class="active"' : '' ?>></li>
              <?php ++$i; endwhile ?>
            </ol>
            <div class="carousel-inner" role="listbox">
				<?php $i=0; while( have_rows( 'slides' ) ): the_row(); ?>
					<div class="carousel-item<?php echo $i==0 ? ' active"' : '' ?>">
						<?php
							$image_id = get_sub_field( 'slide' );
							echo wp_get_attachment_image( $image_id, 'full', false , array('class'=>'img-fluid'));
						?>
						<div class="carousel-caption">
							<?php echo esc_html( get_sub_field( 'slide_caption' ) ); ?>
						</div>
					</div>
                <?php ++$i; endwhile ?>
            </div>
            <a class="left carousel-control" href="#homepage-carousel" role="button" data-slide="prev">
              <span class="icon-prev" aria-hidden="true"></span>
              <span class="sr-only"><?php _e( 'Previous', 'THEME-TEXT-DOMAIN' ) ?></span>
            </a>
            <a class="right carousel-control" href="#homepage-carousel" role="button" data-slide="next">
              <span class="icon-next" aria-hidden="true"></span>
              <span class="sr-only"><?php _e( 'Next', 'THEME-TEXT-DOMAIN' ) ?></span>
            </a>
        </div>
    </div><!-- end .row -->
</div><!-- end .container-fluid -->
