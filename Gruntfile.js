'use strict';
module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'custom-styles.min.css' : 'style.scss'
				},
				options : {
					style : 'compressed'
				}
			}
		},
		uglify : {
			dist: { 
				files: {
					'includes/resources/headroom/headroom-custom.min.js' : [
					'includes/resources/headroom/headroom.min.js' ,
					'includes/resources/headroom/headroom-jquery.min.js' ,
					'includes/resources/headroom/headroom-custom.js' ,
					'includes/resources/owl/owl.min.js' ,
					]
				},
				options : {
					style : 'compressed' 
				}
			}
		},
		watch: {
			css: {
				files: ['style.scss',
				'includes/resources/wooCommerce/_woo-styles.scss',
				'includes/resources/headroom/_headroom.scss',
				'includes/resources/bootstrap/css/_bootstrap.scss',
				'includes/resources/owl/_owl.scss',
				],
				tasks: ['sass']
			} , 
			js : {
				files:  ['includes/resources/headroom/*.js'],
				tasks:['uglify']
			},
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',['watch']);
}

