'use strict';

import gulp from 'gulp';
import config from '../config';
import gutil from 'gulp-util';
import path from 'path';
import babelify from 'babelify';
import browserify from 'browserify';
import source from 'vinyl-source-stream';
import buffer from 'gulp-buffer';
import uglify from 'gulp-uglify';
import exorcist from 'exorcist';


gulp.task('scripts', ['eslint'], () => {
  return browserify({
    paths: [path.join(__dirname, config.src)],
    entries: config.scripts.entryFile,
    debug: true
  })
  .transform(babelify)
  .bundle().on('error', function(error){
    gutil.log(gutil.colors.red('[Build Error]', error.message));
    this.emit('end');
  })
  .pipe(exorcist(config.scripts.sourcemapFile))
  .pipe(source(config.scripts.outputFile))
  .pipe(buffer())
  .pipe(gulp.dest(config.scripts.destPath));
});


gulp.task('scripts:dist', () => {
  return browserify({
    paths: [path.join(__dirname, config.src)],
    entries: config.scripts.entryFile,
    debug: true
  })
  .transform(babelify)
  .bundle().on('error', function(error){
    gutil.log(gutil.colors.red('[Build Error]', error.message));
    this.emit('end');
  })
  .pipe(source(config.scripts.outputFile))
  .pipe(buffer())
  .pipe(uglify())
  .pipe(gulp.dest(config.scripts.destPath));
});
