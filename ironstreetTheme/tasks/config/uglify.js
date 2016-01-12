module.exports = function(grunt) {
  grunt.config.set('uglify', {
    mini: {
      options: {
        mangle: false
      },
      files: {
        'prod/main.min.js': [
            '.tmp/js/vendor/jquery/**/*.js',
            '.tmp/js/vendor/greensock-js/**/**/**/.js',
            '.tmp/js/vendor/animatesprite/**/*.js',
            '.tmp/js/**/**/**/*.js',
            '.tmp/js/app.js']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-uglify');
};
