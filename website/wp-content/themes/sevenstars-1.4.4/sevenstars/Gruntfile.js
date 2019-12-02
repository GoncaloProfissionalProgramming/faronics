module.exports = function(grunt){

	css_files = [
		
	];

	js_files = [
		
	];

	scripts_file = [
		
	];

	var isWin = /^win/.test(process.platform);
	var path = require('path');
	var current_dir = isWin ? path.basename(path.resolve()) : path.posix.basename(path.resolve());
	current_dir = current_dir.replace('/', '');
	var textdomain = current_dir;
	

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		pot: {
			options: {
				text_domain: textdomain,
				dest: 'languages/',
				keywords: [
		            '__:1',
		            '_e:1',
		            '_x:1,2c',
		            'esc_html__:1',
		            'esc_html_e:1',
		            'esc_html_x:1,2c',
		            'esc_attr__:1', 
		            'esc_attr_e:1', 
		            'esc_attr_x:1,2c', 
		            '_ex:1,2c',
		            '_n:1,2', 
		            '_nx:1,2,4c',
		            '_n_noop:1,2',
		            '_nx_noop:1,2,3c'
	           ]
			},
		    files:{
          		src: ['*.php', '**/*.php', '!node_modules/**'],
          		expand: true,
			}
		},

		checktextdomain: {
		   options:{
		      text_domain: textdomain,
		      correct_domain: true, //Will correct missing/variable domains
		      keywords: [ //WordPress localisation functions
		            '__:1,2d',
		            '_e:1,2d',
		            '_x:1,2c,3d',
		            'esc_html__:1,2d',
		            'esc_html_e:1,2d',
		            'esc_html_x:1,2c,3d',
		            'esc_attr__:1,2d', 
		            'esc_attr_e:1,2d', 
		            'esc_attr_x:1,2c,3d', 
		            '_ex:1,2c,3d',
		            '_n:1,2,4d', 
		            '_nx:1,2,4c,5d',
		            '_n_noop:1,2,3d',
		            '_nx_noop:1,2,3c,4d'
		      ],
		   },
		   files: {
		       src: ['*.php', '**/*.php', '!node_modules/**'],
		       expand: true,
		   },
		}

	});


	grunt.loadNpmTasks('grunt-pot');
	grunt.loadNpmTasks('grunt-checktextdomain');

	defined_tasks = [
		
	];

	grunt.registerTask('lan', ['checktextdomain', 'pot']);

	grunt.registerTask('default', defined_tasks);

}