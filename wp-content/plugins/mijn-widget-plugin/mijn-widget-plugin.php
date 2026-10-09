<?php
/*
Plugin Name: Mijn Widget Plugin
Plugin URI: http://voorbeeld.com/
Description: Een plugin met een zelfgemaakte widget.
Version: 1.0
Author: Jouw Naam
Author URI: http://voorbeeld.com/
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Mijn_Eigen_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'mijn_eigen_widget',
			__( 'Mijn Eigen Widget', 'text_domain' ),
			array(
				'description' => __( 'Een voorbeeld van een eenvoudige widget', 'text_domain' ),
			)
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		if ( ! empty( $instance['content'] ) ) {
			echo '<p>' . esc_html( $instance['content'] ) . '</p>';
		}

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title   = isset( $instance['title'] ) ? $instance['title'] : __( 'Nieuwe titel', 'text_domain' );
		$content = isset( $instance['content'] ) ? $instance['content'] : __( 'Voer hier de inhoud in', 'text_domain' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Titel:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_html_e( 'Inhoud:', 'text_domain' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>"><?php echo esc_textarea( $content ); ?></textarea>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return array(
			'title'   => isset( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : '',
			'content' => isset( $new_instance['content'] ) ? sanitize_textarea_field( $new_instance['content'] ) : '',
		);
	}
}

function registreer_mijn_eigen_widget() {
	register_widget( 'Mijn_Eigen_Widget' );
}
add_action( 'widgets_init', 'registreer_mijn_eigen_widget' );
