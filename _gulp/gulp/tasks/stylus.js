'use strict';

import gulp from 'gulp';
import config from '../config';
import stylus from 'gulp-stylus';
import cssnano from 'gulp-cssnano';
import autoprefixer from 'gulp-autoprefixer';

gulp.task('stylus', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
    .pipe(stylus())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
    }))
    .pipe(gulp.dest(config.styles.destPath));
});

gulp.task('stylus:dist', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
    .pipe(stylus())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
    }))
    .pipe(cssnano())
    .pipe(gulp.dest(config.styles.destPath));
});
