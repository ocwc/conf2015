module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      develop: {
        options: {
          style: 'nested',
          loadPath: ['bower_components/bootstrap-sass-official/assets/stylesheets/']
        },
        files: {
          '../css/style.css': 'scss/bootstrap.scss'
        }
      },
      build: {
        options: {
          style: 'compressed',
          loadPath: ['bower_components/bootstrap-sass-official/assets/stylesheets/']
        },
        files: {
          '../css/style.css': 'scss/bootstrap.scss'
        }
      }
    },

    uglify: {
      build: {
        files: {
          '../js/script.min.js': [
            'bower_components/fingerprint/fingerprint.js',
            'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
            'bower_components/ResponsiveSlides.js/responsiveslides.min.js',
            'js/dropdowns-enhancement.js',
            'js/script.js'
          ]
        }
      }      
    },

    jshint: {
      'all': ['js/script.js']
    },

    watch: {
      grunt: { files: ['scss/*.scss', 'Gruntfile.js', '../*.php', '../partials/*.php'],},

      options: {
        livereload: true,
      },

      sass: {
        files: ['scss/*.scss', 'Gruntfile.js', '../*.php'],
        tasks: ['sass:develop']
      },

      uglify: {
        files: ['js/*.js'],
        tasks: ['uglify', 'jshint']
      }
    },

    fontelloUpdate: {
      options: {
        config: 'fontello.json',
        fonts: '../font',
        css: 'css/'
      },
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-fontello-update');

  grunt.registerTask('build', ['fonts', 'sass:build', 'jshint', 'uglify']);
  grunt.registerTask('default', ['build','watch']);
  grunt.registerTask('develop', ['sass:develop', 'jshint', 'uglify', 'watch']);
  grunt.registerTask('fonts', ['fontelloUpdate']);
};
