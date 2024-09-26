<?php
/**
 * Template Name: Product
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();

?>



	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php $custom_fields = get_post_custom(); ?>
			<?php endwhile; ?>

		</div>
	</div>

	<aside class="product-specifications">
		<?php if ( ! post_password_required() && ! is_attachment() ) :
			the_post_thumbnail();

			// Output product specifications
			foreach ( $custom_fields as $field_key => $field_values ) {
				foreach ( $field_values as $key => $value )
					if ( substr( $field_key, 0, 1 ) === '_' ) {
						if ( $field_key === '_buy link' ) {
							$buy_link = $value;
						} else if ( $field_key === '_product_price' ) {
							$product_price = $value;
						} else if ( $field_key === '_hide_price' ) {
							$hide_price = $value;
						} else if ( $field_key === '_product_comparison' ) {
							$comparison = $value;
						} else if ( $field_key === '_sales_sheet' ) {
							$sales_sheet = $value;
						} else if ( $field_key === '_owners_manual' ) {
							$owners_manual = $value;
						} else if ( $field_key === '_video' ) {
							$video = $value;
						}
						break;
					} else if ( $field_key != NULL ) {
						if ( $field_key === 'Product weight' ){
							$product_weight = $value;
						} else if ( $field_key === 'Bike brake'){
							$bike_brake = $value;
						} else if ( $field_key === 'Flywheel'){
							$flywheel = $value;
						} else if ( $field_key === 'Product dimensions' ){
							$product_dimensions = $value;
						} else if ( $field_key === 'Weight capacity' ){
							$weight_capacity = $value;
						} else if ( $field_key === 'Heart rate' ){
							$heart_rate = $value;
						} else if ( $field_key === 'Resistance Levels' ){
							$resistance_levels = $value;
						} else if ( $field_key === 'Speed/Incline' ){
							$speed_incline = $value;
						} else if ( $field_key === 'Frame' ){
							$warranty_frame = $value;
						} else if ( $field_key === 'Electronic' ){
							$warranty_electronic = $value;
						} else if ( $field_key === 'Frame, Motor, Deck' ){
							$warranty_fmd = $value;
						} else if ( $field_key === 'Brake' ) {
							$warranty_brake = $value;
						} else if ( $field_key === 'Parts' ){
							$warranty_parts = $value;
						} else if ( $field_key === 'Labor' ){
							$warranty_labor = $value;
						} else if ( $field_key === 'Wear items' ){
							$warranty_wear_items = $value;
						}
					}
			}

			echo '<div class="action-panel">';


				echo '<a target="_blank" class="buy-link" href="' . $buy_link . '">buy now';

				if ($hide_price != 1) {
					echo ' - ' . $product_price;
				}

				echo '</a>';

				if ( $comparison != NULL ) {
					echo '<a href="' . $comparison . '">product comparison</a>';
				}

				if ( $sales_sheet != NULL ) {
					echo '<a target="_blank" href="' . $sales_sheet . '">sales sheet</a>';
				}

				if ( $owners_manual != NULL ) {
					echo '<a target="_blank" href="' . $owners_manual . '">owners manual</a>';
				}

				if ( $video != NULL ) {
					echo '<a class="video" href="' . $video . '">video</a>';
				}

			echo '</div>';

			echo '<h2>Specifications</h2>';

			if ( $bike_brake != NULL || $flywheel != NULL || $product_weight != NULL || $product_dimensions != NULL || $weight_capacity != NULL ){
				echo '<h3>Mechanical</h3>';
				echo '<table>';

				if ( $bike_brake != NULL ) {
					echo '<tr><td class="attr">Brake</td><td>' . $bike_brake . '</td></tr>';
				}

				if ( $flywheel != NULL ){
					echo '<tr><td class="attr">Flywheel</td><td>' . $flywheel . '</td></tr>';
				}

				if ( $product_weight != NULL ){
					echo '<tr><td class="attr">Product Weight</td><td>' . $product_weight . '</td></tr>';
				}

				if ( $product_dimensions != NULL ){
					echo '<tr><td class="attr">Product Dimensions</td><td>' . $product_dimensions . '</td></tr>';
				}

				if ( $weight_capacity != NULL ){
					echo '<tr><td class="attr">Weight Capacity</td><td>' . $weight_capacity . '</td></tr>';
				}

				echo '</table>';
			}

			if ( $heart_rate != NULL || $speed_incline != NULL || $resistance_levels != NULL ){
				echo '<h3>Electrical</h3>';
				echo '<table>';

				if ( $heart_rate != NULL ){
					echo '<tr><td class="attr">Heart Rate</td><td>' . $heart_rate . '</td></tr>';
				}

				if ( $speed_incline != NULL ){
					echo '<tr><td class="attr">Speed/Incline</td><td>' . $speed_incline . '</td></tr>';
				}

				if ( $resistance_levels != NULL ){
					echo '<tr><td class="attr">Resistance Levels</td><td>' . $resistance_levels . '</td></tr>';
				}

				echo '</table>';
			}
			
			if ( $warranty_frame != NULL || $warranty_electronic != NULL || $warranty_fmd != NULL || $warranty_parts != NULL || $warranty_labor != NULL || $warranty_brake != NULL || $warranty_wear_items != NULL ){
				echo '<h3>Warranty</h3>';
				echo '<table>';

				if ( $warranty_frame != NULL ){
					echo '<tr><td class="attr">Frame</td><td>' . $warranty_frame . '</td></tr>';
				}

				if ( $warranty_electronic != NULL ){
					echo '<tr><td class="attr">Electronic</td><td>' . $warranty_electronic . '</td></tr>';
				}

				if ( $warranty_fmd != NULL ){
					echo '<tr><td class="attr">Frame, Motor, Deck</td><td>' . $warranty_fmd . '</td></tr>';
				}

				if ( $warranty_brake != NULL ){
					echo '<tr><td class="attr">Brake</td><td>' . $warranty_brake . '</td></tr>';
				}

				if ( $warranty_parts != NULL ){
					echo '<tr><td class="attr">Parts</td><td>' . $warranty_parts . '</td></tr>';
				}

				if ( $warranty_labor != NULL ){
					echo '<tr><td class="attr"x>Labor</td><td>' . $warranty_labor . '</td></tr>';
				}

				if ( $warranty_wear_items != NULL ){
					echo '<tr><td class="attr">Wear Items</td><td>' . $warranty_wear_items . '</td></tr>';
				}

				echo '</table>';
			}

		endif; ?>

	</aside>
<?php get_footer(); ?>