module.exports = function (grunt){
  grunt.registerTask('default', ['compileAssets', 'browserSync', 'watch']);
  grunt.registerTask('prod', [ 'compileAssets', 'compileProd']);
};
