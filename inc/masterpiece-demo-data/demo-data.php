<?php 
// Security check
defined('ABSPATH') || die();

add_action( 'after_setup_theme', 'mk_demo_data' );

function mk_demo_data(){
    
    if( !defined('MASTERPIECE_THEME') ) return; // Masterpiece theme ok
    if(!class_exists('OCDI_Plugin')) return; // Ocdi plugin ok

	add_filter( 'pt-ocdi/import_files', 'mk_import_files' );
   
}

function mk_import_files(){

    return array(
        array(
			'import_file_name'             => 'Blog Demo One',
			'categories'                   => array( 'Blog'),
			'local_import_file'            => plugin_dir_path(__FILE__) . 'demo-one/content.xml',
			'local_import_widget_file'     => plugin_dir_path(__FILE__) . 'demo-one/widgets.wie',
			'local_import_customizer_file' => plugin_dir_path(__FILE__) . 'demo-one/customizer.dat',
			'import_preview_image_url'     => plugin_dir_url(__FILE__) . 'demo-one/preview.png',
			'import_notice'                => __( 'After importing demo you have to regenerate thumbnails.', 'your-textdomain' ),
			'preview_url'                  => 'https://demo.wpnitro.vip/masterpiece/demo-one/',
		),
		array(
			'import_file_name'             => 'Blog Demo Two',
			'categories'                   => array( 'Blog' ),
			'local_import_file'            => plugin_dir_path(__FILE__) . 'demo-two/content.xml',
			'local_import_widget_file'     => plugin_dir_path(__FILE__) . 'demo-two/widgets.wie',
			'local_import_customizer_file' => plugin_dir_path(__FILE__) . 'demo-two/customizer.dat',
			'import_preview_image_url'     => plugin_dir_url(__FILE__) . 'demo-two/preview.jpg',
			'import_notice'                => __('After importing demo you have to regenerate thumbnails.', 'your-textdomain' ),
			'preview_url'                  => 'https://demo.wpnitro.vip/masterpiece/demo-two/',
		),
    );

}

?>