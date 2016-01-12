module.exports = function(grunt){
  grunt.config.set('stylus', {
    dev: { //components style files
      files: [
      {//main style files
        expand: true,
        cwd: 'app/styl',
        src: ['style.styl'],
        dest: 'tmp/css',
        ext: '.css'
      }]
    }
  });

  grunt.loadNpmTasks('grunt-contrib-stylus');

};
