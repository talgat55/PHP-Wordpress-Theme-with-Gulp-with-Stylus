var gulp = require('gulp'); 
var del = require('del'); 
var stylus = require('gulp-stylus');
const browserSync = require('browser-sync').create();
 
gulp.task('clean:build', function() {
    del('./wp-content/themes/legacy/css/*')
})

gulp.task("build", function(){
  return gulp.src('./wp-content/themes/legacy/stylus/index.styl')
    .pipe(stylus())
    .pipe(gulp.dest('./wp-content/themes/legacy/css/'));

})
 
gulp.task('watch', function() {

  gulp.watch('./wp-content/themes/legacy/stylus/*.*', gulp.series('build'));
 
});

gulp.task('serve', function() {
  browserSync.init({
    proxy: 'http://wordpresstheme.dev/'
  });

  browserSync.watch('./wp-content/themes/legacy/**/*.*').on('change', browserSync.reload);
});
gulp.task('dev',
    gulp.series('build', gulp.parallel('watch', 'serve'))
);
