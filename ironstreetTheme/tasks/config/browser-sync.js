module.exports = function (grunt) {
  grunt.config.set('browserSync',  {
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
  });

  grunt.loadNpmTasks('grunt-browser-sync');

};
