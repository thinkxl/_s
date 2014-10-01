var mountFolder = function(connect, dir) {
  return connect.static(require('path').resolve(dir));
};

// # Globbing
// for performance reasons we're only matching one level down:
// 'path/to/{,*/}*.js'
// If you want to recursively match all subfolders, use:
// 'path/to/**/*.js'

module.exports = function(grunt) {

  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);

  // Load grunt tasks automatically
  // require('load-grunt-tasks')(grunt);
  require('jit-grunt')(grunt);

  // Configurable paths
  var config = {
    dev: '.',
    prod: 'prod'
  };

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Project settings
    config: config,

      watch: {
        options: {
          livereload: true        
        },
        gruntfile: {
          files: ['Gruntfile.js']          
        },
        sass: {
          files: '<%= config.dev %>/sass/{,*/}*.scss',
          tasks: ['sass', 'autoprefixer']
        },
        livereload: {
          livereload: true,
          files: [
            '<%= config.dev %>/{,*/}*.php',
            '<%= config.dev %>/js/{,*/}*.js',
            '<%= config.dev %>/css/{,*/}*.css'
          ]
        }
      },

      sass: {
        options: {
          trace: true
        },
        dev: {
          files: {
            '<%= config.dev %>/style.css': '<%= config.dev %>/sass/style.scss'
          }
        }
      },

      autoprefixer: {
        options: {
          browsers:['last 2 versions', 'ie 8', 'ie 7']
        },
        target: {
          src: '<%= config.dev %>/style.css',
          dest: '<%= config.dev %>/style.css'
        }
      },

      connect: {
        options: {
          port: 9000,
          open: true,
          livereload: 35729,
          // Change this to '0.0.0.0' to access the server from outside
          hostname: 'localhost'
        },
        livereload: {
          options: {
            middleware: function ( connect ) {
              return [
                mountFolder(connect, '.tmp'),
                mountFolder(connect, '')
              ];
            }
          }
        }
      },
      open: {
        server: {
          path: 'http://localhost:<%= connect.options.port %>'
        }
      },

      rsync: {
        options: {
          args: ["--verbose"],
          exclude: ["sass", "*~", "*.swp", ".*", "*.md", "node_modules", "prod", "bower_components", "Gruntfile.js", "package.json", "bower.json"],
          recursive: true
        },
        dist: {
          options: {
            src: "<%= config.dev %>",
            dest: "<%= config.prod %>"
          }
        }
      }
  });

  // load plugins
  // require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // default task(s)
  grunt.registerTask('default', function() {
    grunt.task.run([
      'connect:livereload',
      'watch'
    ]);
  });
};
