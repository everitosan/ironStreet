module.exports = function(grunt) {
  grunt.config.set('concat_css', {
    concat_css: {
      options: {
        assetBaseUrl:'../',
        baseDir: '../../(assets|fonts)'

      },
      files: {
        '.tmp/css/main.css': [
            '.tmp/css/vendor/pure/grids.css',
            '.tmp/css/vendor/pure/*.css',
            '.tmp/css/vendor/**/**/*.css',
            '.tmp/css/**/*.css',
            '.tmp/css/*.css']
      }
    }
  });
  grunt.loadNpmTasks('grunt-concat-css');
};
