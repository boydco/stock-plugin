<?php
/**
 * The view for the single job metadata for the location
 */

if ( ! empty( $meta['job-location'][0] ) ) {

	?><h3><?php echo esc_html( apply_filters( 'motley-fool-stock-adviser-title-job-location', 'Location' ), 'motley-fool-stock-adviser' ); ?></h3>
	<p class="<?php echo esc_attr( 'job-location' ); ?>"><?php echo $meta['job-location'][0]; ?></p><?php

}