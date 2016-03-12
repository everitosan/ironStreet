module.exports = function (grunt) {
  grunt.config.set('browserSync',  {
    dev: {
      bsFiles: {
        src : [
          'tmp/*.html',
          'tmp/css/*.css',
          'tmp/css/**/*.css',
          'tmp/js/*.js',
          'tmp/js/**/*.js',
        ]
      },
      options: {
        watchTask: true,
        server: {
          baseDir: "tmp/"
        }
      }
    },
    wordpress: {
      bsFiles: {
          src : [
            '../site/wp-content/themes/IronStreetPrinting/*.php',
            '../site/wp-content/themes/IronStreetPrinting/*.html',
            '../site/wp-content/themes/IronStreetPrinting/components/*.html'
          ]
      },
      options: {
          proxy : "localhost:8888/site",
          watchTask: true
      }
    }
  });

  grunt.loadNpmTasks('grunt-browser-sync');

};
