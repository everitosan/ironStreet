module.exports = function(grunt) {
  grunt.config.set('cssmin', {
    mini: {
      options: {},
      files: {
        'prod/main.min.css': ['.tmp/css/main.css']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-cssmin');
};
