// Info: http://www.sitepoint.com/simple-gulpy-workflow-sass/

var gulp = require('gulp');
    sass = require('gulp-sass');
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    include = require('gulp-include'),
    concat = require('gulp-concat'),
    runSequence = require('run-sequence'),
    $ = require('gulp-load-plugins')();

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 1%', 'Firefox ESR', 'Opera 12.1']
};

var foundationPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];



gulp.task('default', function(done) {
  runSequence(['sass', 'js'], done);
});

gulp.task('watch', ['default'], function() {
  gulp.watch('assets/scss/**/*', ['sass'])
      .on('change', function(event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
      });
  gulp.watch('assets/js/*', ['js'])
      .on('change', function(event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
      });
});





gulp.task('sass', function () {
  return gulp
    .src('assets/scss/app.scss')
    .pipe($.sass({ includePaths: foundationPaths })
      .on('error', $.sass.logError))
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('css/'));
});

gulp.task('js', function() {
  gulp.src('assets/js/app.js')
      .pipe(include())
        .on('error', console.log)
      .pipe(concat('all.js'))
      .pipe(gulp.dest('js/'));
});
