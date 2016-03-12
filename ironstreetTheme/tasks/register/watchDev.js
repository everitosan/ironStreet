module.exports = function(grunt){
  grunt.registerTask ('watchDev', [
    'watch:devStyles',
    'watch:devHtml',
    'watch:devJsMain'
  ]);
}
