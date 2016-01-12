module.exports = function(grunt){
  grunt.registerTask ('compileProd', [
    'clean:prod',
    'copy:prod',
    'concat_css',
    'cssmin:mini',
    'uglify:mini',
    'jade:prod',
    'injector:prod'

  ]);
}
