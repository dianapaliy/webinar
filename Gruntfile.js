module.exports = function(grunt) {
    // Конфигурация проекта
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //------------------------------------------------------------
        less: { 
            options: {
                expand: true,
                sourceMap: true
            },
            dev: {
                files: {
                    'themes/webinars/css/all.css': ['themes/webinars/less/all.less']
                }
            }
        },
        watch: {
            less: {
                files: ['themes/webinars/less/**/*.less'],
                tasks: ['less']
            }
        },
        browserSync: {
            files: {
                src: ['*.html', 'themes/webinars/css/all.css']
            },
            options: {
                watchTask: true,
                server: {
                    baseDir: '.'
                }
            }
        }
    });
    require('load-grunt-tasks')(grunt);
    grunt.registerTask('default', ['less', 'browserSync', 'watch']);
};
