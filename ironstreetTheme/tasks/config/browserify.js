module.exports = function (grunt){
  grunt.config.set('browserify', {

    devmain: {
      options: {
        //transform: [["babelify", { "stage": 0 , compact: false}]]
      },

      files: [{ // main JS
        expand: true,
        cwd: 'app/js/',
        src: '**/*.js',
        dest:'tmp/js/' ,
        ext: '.js'
      }]
    }
  });

  grunt.loadNpmTasks('grunt-browserify');

};
