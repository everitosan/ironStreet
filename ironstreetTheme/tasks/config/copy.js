module.exports = function (grunt) {
  grunt.config.set('copy', {
      dev: {
        files: [{ //general images
            expand: true,
            cwd: 'app/assets',
            src: ['**/*'],
            dest: 'tmp/assets'
          },
          { //css vendor files
            expand: true,
            cwd: './bower_components',
            src: ['pure/grids.css',
                  'pure/grids-core-min.css',
                  'pure/grids-units-min.css',
                  'pure/grids-responsive-min.css',
                  'normalize-css/normalize.css',
                  'sweetalert/dist/sweetalert.css'],
            dest: 'tmp/css/vendor'
          },
          { //js vendor files
            expand: true,
            cwd: './bower_components',
            src: ['greensock-js/src/minified/TweenMax.min.js',
                  'jquery/dist/jquery.js',
                  'greensock-js/src/minified/utils/Draggable.min.js',
                  'sweetalert/dist/sweetalert.min.js'],
            dest: 'tmp/js/vendor'
          },
          { //fonts
            expand: true,
            cwd: 'app/fonts',
            src: ['*'],
            dest: 'tmp/fonts'
          }
        ]
      },
      prod: {
        files: [{
          expand: true,
          cwd: 'tmp/assets',
          src: ['*', '**/*'],
          dest: 'prod/assets'
        },{
          expand: true,
          cwd: 'tmp/fonts',
          src: ['*', '**/*'],
          dest: 'prod/fonts'
        }]
      }

  });

  grunt.loadNpmTasks('grunt-contrib-copy');

};
