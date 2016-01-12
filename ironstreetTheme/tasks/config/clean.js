module.exports = function (grunt) {
  grunt.config.set('clean', {
    dev : ['tmp'],
    prod : ['prod']
  });

  grunt.loadNpmTasks('grunt-contrib-clean');

};
