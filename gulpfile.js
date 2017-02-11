var gulp = require('gulp'),
    pug = require('gulp-pug'),
    less = require('gulp-less'),
    minifyCSS = require('gulp-csso'),
    watch = require('gulp-watch');

gulp.task('html', function() {
    return watch('client/templates/*.pug', function() {
        gulp.src('client/templates/*.pug')
            .pipe(pug())
            .pipe(gulp.dest(''))
    });
});

gulp.task('css', function() {
    return watch('client/templates/*.less', function() {
        gulp.src('client/templates/*.less')
            .pipe(less())
            .pipe(minifyCSS())
            .pipe(gulp.dest('css'))
    });
});

gulp.task('default', ['html', 'css']);