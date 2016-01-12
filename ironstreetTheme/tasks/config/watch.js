module.exports = function (grunt) {
  grunt.config.set('watch', {
    styles: {
      files: ['app/**/**/*.styl'],
      tasks: ['stylus:dev']
    },
    html: {
      files: ['app/**/**/*.jade'],
      tasks: ['jade', 'injector:dev']
    },
    jsMain: {
      files: ['app/js/*.js','app/**/**/*.js'],
      tasks: ['browserify:devmain']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
};
