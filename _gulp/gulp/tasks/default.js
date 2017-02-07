'use strict';

import gulp from 'gulp';
import config from '../config';

// Serve the site from .dest directory
gulp.task('default', [
  'stylus',
  'scripts',
  'notify:server'
  ], () => {
    gulp.watch(config.styles.watch, config.watchOptions, ['stylus']);
    gulp.watch(config.scripts.all, config.watchOptions, ['scripts']);
});
