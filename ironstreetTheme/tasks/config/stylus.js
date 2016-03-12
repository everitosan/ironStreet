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
    },
    wordpress: {
      files: [
      {//main style files
        expand: true,
        cwd: 'app/styl',
        src: ['style.styl'],
        dest: '../site/wp-content/themes/ironStreetPrinting/css',
        ext: '.css'
      }]
    }
  });

  grunt.loadNpmTasks('grunt-contrib-stylus');

};
