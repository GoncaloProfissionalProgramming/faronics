<?php

require get_template_directory() . '/framework/addons/wordpress-importer/wordpress-importer.php';

$themeton_dummy_files = array(
							array(
								'id' 		=> 'file1',
								'title' 	=> 'Home - Corporate',
								'location' 	=> 'data-corporate.xml'
							),
							array(
								'id' 		=> 'file2',
								'title' 	=> 'Home - Fullscreen',
								'location' 	=> 'data-fullscreen.xml'
							),
							array(
								'id' 		=> 'file3',
								'title' 	=> 'Home - One page',
								'location' 	=> 'data-onepage.xml'
							),
							array(
								'id' 		=> 'file10',
								'title' 	=> 'Full content',
								'location' 	=> 'data(full).xml'
							),
						);


$themeton_dummy_layerslider = 'LayerSlider_Export.json';



/* Import Dummy Data */
add_action('wp_ajax_tt_import_dummy_data', 'tt_import_dummy_data_hook');
add_action('wp_ajax_nopriv_tt_import_dummy_data', 'tt_import_dummy_data_hook');

function tt_import_dummy_data_hook() {
    try {
        global $themeton_dummy_files;
        $file = isset($_POST['tt_file']) ? $_POST['tt_file'] : '';
        $file_location = '';

        if( $file!='' ){
        	foreach ($themeton_dummy_files as $dummy_data){
	            if( $dummy_data['id'] == $file ){
	            	$file_location = $dummy_data['location'];
	            }
	        }

	        if( $file_location!='' ){
	        	$file_location = dirname(__FILE__).'/files/'.$file_location;

	        	$wp_import = new WP_ImportX();
				$wp_import->fetch_attachments = true;
				$wp_import->import( $file_location );
	        }

	        // Import LayerSlider
	        tt_import_layerslider_data();

	        echo "1";
        }

        echo "-1";
    } catch (Exception $e) {
        echo "-1";
    }
    exit;
}


function tt_import_layerslider_data(){
	global $themeton_dummy_layerslider;
	global $wpdb;

	if( $themeton_dummy_layerslider=='' || !file_exists(dirname(__FILE__).'/files/'.$themeton_dummy_layerslider) ){
		return -1;
	}

	//  DB stuff
	$table_name = $wpdb->prefix . "layerslider";
	if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){
		return -1;
	}

	try{
		// Get decoded file data
		$data = fs_decode(fs_get_contents(dirname(__FILE__).'/files/'.$themeton_dummy_layerslider));

		// Parsing JSON or PHP object
		if(!$parsed = json_decode($data, true)) {
			$parsed = unserialize($data);
		}

		// Iterate over imported sliders
		if(is_array($parsed)){
			

			$ls_items = array();
			$layer_sliders = $wpdb->get_results("SELECT data FROM $table_name
                                            WHERE flag_hidden = '0' AND flag_deleted = '0'
                                            ORDER BY date_c ASC LIMIT 100");

			foreach ($layer_sliders as $key => $item){
				$ls_items[] = $item->data;
			}

			// Import sliders
			foreach($parsed as $item) {

				// Fix for export issue in v4.6.4
				if(is_string($item)) {
					$item = json_decode($item, true);
				}

				$data = json_encode($item);

				if( !in_array($data, $ls_items) ){
					// Add to DB
					$wpdb->query(
						$wpdb->prepare("INSERT INTO $table_name (name, data, date_c, date_m)
												VALUES (%s, %s, %d, %d)",
												$item['properties']['title'], $data, time(), time()
											)
						);
				}
			}

			return 1;
		}

		return -1;

	} catch (Exception $e) {
        return -1;
    }
}


?>