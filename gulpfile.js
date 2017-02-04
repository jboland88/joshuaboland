// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./wp-content/themes/jboland/css/src/sass/main.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./wp-content/themes/jboland/css/dist'));
});
 
gulp.task('default', function () {
  gulp.watch('./wp-content/themes/jboland/css/src/sass/**/*.sass', ['sass']);
});