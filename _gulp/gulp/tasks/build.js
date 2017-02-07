'use strict';

import gulp from 'gulp';

gulp.task('build', [
  'stylus',
  'scripts',
]);

gulp.task('build:dist', [
  'stylus:dist',
  'scripts:dist',
]);
