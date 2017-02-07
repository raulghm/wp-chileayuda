'use strict';

import gulp from 'gulp';
import config from '../config';
import cssnano from 'gulp-cssnano';
import suitcss from 'gulp-suitcss';

gulp.task('suitcss', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
  .pipe(suitcss({
    minify: false,
    lint: false,
    autoprefixer: { browsers: ['> 1%', 'IE 7'], cascade: false },
  }))
  .pipe(reload({stream:true}))
  .pipe(gulp.dest(config.styles.destPath));
});

gulp.task('suitcss:dist', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
  .pipe(suitcss({
    minify: true,
    lint: false,
    autoprefixer: { browsers: ['> 1%', 'IE 7'], cascade: false },
  }))
  .pipe(gulp.dest(config.styles.destPath));
});
