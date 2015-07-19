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
					style : 'compressed',
				}
			}
		},
		uglify : {
			dist: {  
				files: {
					'custom-script.min.js' : ['includes/resources/*/js/*.js']
				},
				options : {
					style : 'compressed' ,
					sourceMap : false,
				}
			}
		},
		watch: {
			css: {
				files: ['style.scss', 'includes/resources/*/css/*.scss'],
				tasks: ['sass']
			} , 
			js : {
				files:  ['includes/resources/*/js/*.js'],
				tasks:['uglify']
			},
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',['watch']);
}

