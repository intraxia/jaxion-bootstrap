var gulp = require('gulp');
var glob = require('glob');
var fs = require('fs');
var Q = require('Q');
var path = require('path');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');
var sass = require('gulp-sass');
var extrep = require('gulp-ext-replace');
var wpPot = require('gulp-wp-pot');
var sort = require('gulp-sort');

gulp.task('default', ['scripts', 'styles', 'packages', 'translation', 'watch']);

gulp.task('watch', function () {
    gulp.watch(
        'assets/src/js/**/*.js',
        ['scripts']
    );
    gulp.watch(
        'assets/src/scss/**/*.scss',
        ['styles']
    );
    gulp.watch(
        'app/**/*.php',
        ['translation']
    );
});

gulp.task('build', ['scripts', 'styles', 'packages']);

gulp.task('scripts', function() {
    var promises = [];

    glob.sync('assets/src/js/!(js)').forEach(function(filePath) {
        if (fs.statSync(filePath).isDirectory()) {
            var defer = Q.defer();
            var pipeline = gulp.src(filePath + '/**/*.js')
                .pipe(concat(path.basename(filePath) + '.js'))
                .pipe(gulp.dest('assets/js'))
                .pipe(uglify())
                .pipe(concat(path.basename(filePath) + '.min.js'))
                .pipe(gulp.dest('assets/js'));
            pipeline.on('end', function() {
                defer.resolve();
            });
            promises.push(defer.promise);
        }
    });

    return Q.all(promises);
});

gulp.task('styles', function() {
    return gulp.src('assets/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'))
        .pipe(minify())
        .pipe(extrep('.min.css'))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('packages', ['package1']);

gulp.task('package1', function() {
    // Copy or concat your packages
    // and place them in the appropriate assets folder
});

gulp.task('translation', function() {
    return gulp.src('app/**/*.php')
        .pipe(sort())
        .pipe(wpPot( {
            domain: 'plugin-name',
            destFile:'plugin-name.pot',
            package: 'plugin-name',
            bugReport: 'http://github.com/username/plugin-name'
        } ))
        .pipe(gulp.dest('languages/'));
});
