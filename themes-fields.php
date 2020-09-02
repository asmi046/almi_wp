<?
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
		->add_fields( array(
			Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
?>