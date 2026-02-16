const { src, dest, watch, parallel, series } = require('gulp');

// CSS
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

// Imágenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// JavaScript
const terser = require('gulp-terser-js');
const concat = require('gulp-concat');
const rename = require('gulp-rename');

const paths = {
    css: 'src/css/**/*.css',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*.{png,jpg}',
    svg: 'src/img/**/*.svg'
}
function copiarSVG() {
    return src(paths.svg)
        .pipe(dest('public/build/img'));
}

function css() {
    return src(paths.css)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('public/build/css'));
}

function javascript() {
    return src(paths.js)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('public/build/js'));
}

function imagenes() {
    return src(paths.imagenes)
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest('public/build/img'));
}

function versionWebp() {
    return src(paths.imagenes)
        .pipe(webp({ quality: 50 }))
        .pipe(dest('public/build/img'));
}

function dev() {
    watch(paths.css, css);
    watch(paths.js, javascript);
    watch(paths.imagenes, imagenes);
    watch(paths.imagenes, versionWebp);
    watch(paths.svg, copiarSVG);
}

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.copiarSVG = copiarSVG;
exports.dev = parallel(css, javascript, imagenes, versionWebp, copiarSVG, dev);
exports.build = series(css, javascript, imagenes, versionWebp, copiarSVG);
