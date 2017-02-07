module.exports = {
  src: './src',
  dest: '../assets/',
  watchOptions: {
    cwd: '.'
  },
  html: {
    all: 'dist/**/*.html'
  },
  hbs: {
    all: 'src/**/*.{hbs,md,json}'
  },
  styles: {
    srcPath: './src/styles',
    entryFile: 'styles.styl',
    watch: 'src/styles/**/*',
    outputFile: 'styles.css',
    destPath: '../assets/styles'
  },
  scripts: {
    srcPath: './src/scripts',
    all: 'src/**/*.js',
    vendor: '!src/scripts/vendor/**',
    entryFile: './src/scripts/scripts.js',
    destPath: '../assets/scripts',
    outputFile: 'scripts.js',
    sourcemapFile : '../assets/scripts/scripts.js.map'
  },
  images: {
    all: 'src/images/**/*',
    destPath: '../assets/images'
  },
  fonts: {
    all: 'src/fonts/**/*.{eot,svg,ttf,woff,woff2}',
    destPath: '../assets/fonts'
  }
};
