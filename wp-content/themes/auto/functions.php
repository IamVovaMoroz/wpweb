
<!-- эта функция подключает стили к проекту. get_stylesheet_uri вставляет путь к файлу css -->
<?php 
add_action( 'wp_enqueue_scripts', function() {

// 1) подключает стили в главном пути
// wp_enqueue_style( 'style-name', get_stylesheet_uri() );

 // 2) подключаем стили с интернета, название разное любое wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
 wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
 wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
 wp_enqueue_style( 'reset', get_template_directory_uri() . "/assets/css/reset.css" );
 wp_enqueue_style( 'slick', get_template_directory_uri() . "/assets/css/slick.css" );
 wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
 wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css" );
 

    // 3) подключаем стили к нужной папке/файлу get_stylesheet_uri() функция нужная для этого,  style - название файла который нужен нам, . "/assets/css/style.css" . конкатенация + путь
  

    
   
   // 4) подключаем скрипты с footer

//    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
// отключение общего jquery и подключение нужной версии
   wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

//    все что зависит от jquery ниже размещаем
   wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
   wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
    // подключает скрипты/ array('jquery') - зависит от jquery,  'null' - версия jquery, / true - если подключаем скрипты в footer внизу
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
}); 


// посты поддерживат картинки
add_theme_support('post-thumbnails');
// менять title wp
add_theme_support('title-tag');
// change logo in wp
add_theme_support('custom-logo');

// 1) for work with svg
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
// 2) for work with svg

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>

