<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
		->add_fields( array(
			Field::make('text', 'email', 'Email')
				->set_width(30),
				Field::make('text', 'email_send', 'Email для отправки')
					->set_width(30),
			Field::make('text', 'tel', 'Телефон')
				->set_width(30),
			Field::make('text', 'address', 'Адрес')
				->set_width(30),
			Field::make('text', 'mkad_map_point', 'Центр карты') 
				->set_width(30),
					
			Field::make( 'text', 'crb_text', 'Text Field' ),
		) );
		
Container::make('post_meta', 'product', 'Доп поля')
	->show_on_template('single-product.php')
	->add_fields(array(
		Field::make('text', 'amazon_link', 'Ссылка на Амазон'),
		Field::make('rich_text', 'short_descr', 'Краткое описание'),
		Field::make('text', 'rating', 'Рейтинг'),
		Field::make('text', 'stiker', 'Бирка'),
		Field::make('text', 'price', 'Цена'),
	));
Container::make('post_meta', 'reviews', 'Доп поля')
	->show_on_category('otzyvy')
	->add_fields(array(
		Field::make('text', 'stars_product', 'Оценка продукта')
			->set_width(30),
		Field::make('text', 'stars_brand', 'Оценка Бренда')
			->set_width(30),
		Field::make('text', 'name_product', 'Название продукта')
			->set_width(30),
		Field::make('image', 'img_1', 'Фото 1')
			->set_width(30),
		Field::make('image', 'img_2', 'Фото 2')
			->set_width(30),
	));
// Container::make('post_meta', 'question', 'Доп поля')
// 	->show_on_category('vopros-otvet')
// 	->add_fields(array(
// 	));
?>