module.exports = function(grunt) {
  grunt.config.set('ftp-deploy', {
    build: {
        auth: {
          host: 'ftp.ironstreet.us',
          port: 21,
          authKey : 'key1'
        },
        src: 'tmp/',
        dest: 'Site'
    }
  });

  grunt.loadNpmTasks('grunt-ftp-deploy');
};
