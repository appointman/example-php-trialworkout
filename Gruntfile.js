

module.exports = function(grunt) {

  grunt.initConfig({
    compress: {
      main: {
        options: {
          archive: 'example-php-trialworkout.zip'
        },
        files: [
          {
            src: ['**'],
            dest: '/'
          },
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-compress');

  grunt.registerTask('dist', ['compress']);

};