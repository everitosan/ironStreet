module.exports = function (grunt){
  grunt.registerTask('default', ['compileAssets', 'browserSync:dev', 'watchDev']);
  grunt.registerTask('word', ['stylus:wordpress', 'browserSync:wordpress', 'watch:wordpressStyles']);
  grunt.registerTask('prod', [ 'compileAssets', 'compileProd']);
};
