module.exports = function(grunt) {
  grunt.config.set('injector',  {

    options: {
      ignorePath: ['tmp/','prod'],
      addRootSlash: false,
      sort: function(a, b) {
        return 1;
      }
    },
    dev: {
      files: {
        'tmp/index.html': ['tmp/**/*.css', 'tmp/js/**/*.js']
      }
    },
    prod: {
      files: {
        'prod/index.html': ['prod/*.css', 'prod/*.js']
      }
    }

  });

  grunt.loadNpmTasks('grunt-injector');
};
