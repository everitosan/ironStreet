module.exports = function (grunt) {

  grunt.config.set('jade', {
      dev: {
        options: {
          data: {
            debug: true
          }
        },
        files: [{
          expand: true,
  				cwd: 'app/jade',
  				src: ['*.jade'],
  				dest: 'tmp',
  				ext: '.html'
        }]
      },
      prod: {
        files: [{
          expand: true,
  				cwd: 'app/jade',
  				src: ['*.jade'],
  				dest: 'prod',
  				ext: '.html'
        }]
      }
  });

  grunt.loadNpmTasks('grunt-contrib-jade');
};
