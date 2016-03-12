module.exports = function (grunt) {
  grunt.config.set('watch', {
    devStyles: {
      files: ['app/**/**/*.styl'],
      tasks: ['stylus:dev']
    },
    devHtml: {
      files: ['app/**/**/*.jade'],
      tasks: ['jade', 'injector:dev']
    },
    devJsMain: {
      files: ['app/js/*.js','app/**/**/*.js'],
      tasks: ['browserify:devmain']
    },
    wordpressStyles: {
      files: ['app/**/**/*.styl'],
      tasks: ['stylus:wordpress']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
};
