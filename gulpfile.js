var _            = require('lodash');
var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');
var php          = require('gulp-connect-php');
var changed      = require('gulp-changed');

// Asset files
var js = [

];
var css = [

];
gulp.task('copy-js', function () {
    _.forEach(js, function (file, _) {
      gulp.src(file)
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js' }))
        .pipe(gulp.dest('./public/js'))
    });
});

gulp.task('copy-css', function () {
    _.forEach(css, function (file, _) {
      gulp.src(file)
        .pipe(gulp.dest('./public/css'))
    });
});

// Compile all SCSS files in scss/
gulp.task('compile-sass', function(){
  return gulp.src('./resources/assets/sass/*.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./public/css/'))
  .pipe(browserSync.stream());
});

gulp.task('connect-sync', function() {
   php.server({
      base: './public',
      port: 8000
    },
    function (){
      browserSync({
        proxy: '127.0.0.1:8000'
      });
    }
  );
});


// Gulp watch
gulp.task('default', [ 'compile-sass', 'copy-js', 'copy-css','connect-sync'], function(){
  // gulp.watch('./resources/assets/sass/*.scss').on("change", browserSync.reload);
  gulp.watch('./resources/assets/sass/*.scss', ['compile-sass']);
  gulp.watch("**/*.php").on('change', browserSync.reload);
});