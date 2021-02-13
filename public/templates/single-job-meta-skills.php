<?php
/**
 * The view for the single job metadata for skills
 */

if ( ! empty( $meta['job-requirements-skills'][0] ) ) {

	?><h3><?php echo esc_html( apply_filters( 'motley-fool-stock-adviser-title-job-requirements-skills', 'Skills/Qualifications' ), 'motley-fool-stock-adviser' ); ?></h3>
	<p class="<?php echo esc_attr( 'job-requirements-skills' ); ?>"><?php echo html_entity_decode( $meta['job-requirements-skills'][0] ); ?></p><?php

}