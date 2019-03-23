module.exports = function (grunt) {
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-clean');

  grunt.initConfig({
    pkg: grunt
      .file
      .readJSON('package.json'),
    // legacy fontend - build sass
    sass: {
      dist: {
        files: [
          {
            expand: true,
            cwd: 'assets/styles',
            src: ['base.scss'],
            dest: 'dist/styles/css',
            ext: '.css'
          },
        ],
      },
    },

    // legacy fontend - css minified
    cssmin: {
      target: {
        files: [
          {
            expand: true,
            cwd: 'dist/styles/css',
            src: ['base.css'],
            dest: 'dist/styles/minified',
            ext: '.min.css'
          }
        ]
      }
    },
    // legacy fontend - lazy loading clean
    clean: {
      stylesheets: {
        src: ['dist/styles']
      },
    },
    // legacy fontend - lazy loading watch
    watch: {
      stylesheets: {
        files: ['assets/styles/**/*.scss'],
        tasks: [
          'sass', 'cssmin'
        ],
        options: {
          spawn: false
        }
      }
    },
  });

  // legacy fontend - lazy loading
  grunt.registerTask('build-scss', ['sass', 'cssmin']);

};  