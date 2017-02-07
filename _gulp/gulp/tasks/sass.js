'use strict';

import gulp from 'gulp';
import config from '../config';
import sass from 'gulp-sass';
import cssnano from 'gulp-cssnano';

gulp.task('sass', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest(config.styles.destPath));
});

gulp.task('sass:dist', () => {
  return gulp.src(config.styles.srcPath + '/' + config.styles.entryFile)
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(cssnano())
    .pipe(gulp.dest(config.styles.destPath));
});
