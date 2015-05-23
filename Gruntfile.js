module.exports = function(grunt) {
	grunt.initConfig({

		// SASS
		sass: {
			options: {
				includePaths: [
					'bower_components/bourbon/app/assets/stylesheets'
				]
			},
			dist: {
				options: {
						outputStyle: 'expanded'
				},
				files: {
					'build/css/normalize.css': 'src/sass/normalize.sass',
					'build/css/main.css': 'src/sass/main.sass'
				}
			}
		},

		// SVG STORE
		svgstore: {
			options: {
				prefix : 'icon-', // This will prefix each ID
				svg: { // will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
					viewBox : '0 0 100 100',
					xmlns: 'http://www.w3.org/2000/svg'
				}
			},
			default: {
				files: {
					'build/img/svg-sprite.svg': ['src/svg/*.svg']
				}
			},
		},


    	// Uglify
    	uglify: {
			build: {
				/*options: {
					beautify: {
						width: 80,
						beautify: true
					}
				},*/
				files: {
					//'build/js/main.min.js': 'src/js/**/*.js',

					/** 
					 *	Had to manually enter files due to 'smooth_scroll.js' and other 
					 *	plugins not working properly due to it's location on the
					 *	main.min.js file.
					**/

					// Main
					'build/js/main.min.js': ['src/js/form_verify.js', 'src/js/smooth_scroll.js', 'src/js/nav_follow.js', 'src/js/tabs.js', 'src/js/slider.js', 'src/js/navigation.js', 'src/js/svg4everybody.js'],


					// For mobile
					'build/js/fastclick.min.js': 'src/js/fastclick.js',

					// Polyfills/Fixes
					'build/js/respond.min.js': 'src/js/respond.js',
					'build/js/svg4everybody.ie.min.js': 'src/js/svg4everybody.ie.js',
					'build/js/svg4everybody.min.js': 'src/js/svg4everybody.js',

					// Vendor
					'build/js/vendor/modernizr.min.js': 'src/js/vendor/modernizr.js'
				}
			}
		},

    	// Watch
		watch: {
			//grunt: { files: ['Gruntfile.js'] },

			sass: {
				files: ['src/sass/**/*.sass', 'src/sass/**/*.scss'],
				tasks: ['sass']
			},

			uglify: {
				files: ['src/js/**/*.js'],
				task: ['uglify']
			}
		},
		
	});

grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-contrib-watch');

// SVG
grunt.loadNpmTasks('grunt-svgstore');

grunt.loadNpmTasks('grunt-contrib-uglify');
//grunt.loadNpmTasks('grunt-contrib-concat');

grunt.registerTask('build', ['sass']);
grunt.registerTask('default', ['build', 'watch']);

};